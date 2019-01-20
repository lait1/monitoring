<?php
/**
 * Created by PhpStorm.
 * User: Dexter
 * Date: 21.01.2019
 * Time: 0:03
 */

namespace app\controllers;


class Push extends Controller
{
    public function action_index()
    {
        $type = $_POST['type'];
        $endpoint = $_POST['url'];
        $endpoint_parsed = parse_url($endpoint);
        $subscriber_id = end(explode('/', $endpoint_parsed['path']));

        switch($type) {

            // Добавляем нового подписчика
            case 'add':
                $find_browser = false;
                $urls = [
                    'chrome' => 'https://android.googleapis.com/gcm/send/',
                    'firefox' => 'https://updates.push.services.mozilla.com/push/'
                ];
                foreach ($urls as $browser => $url) {
                    if(strpos($endpoint, $url) !== false) {
                        $find_browser = $browser;
                        break;
                    }
                }
                if($find_browser) {
                    $subscribers = json_decode(file_get_contents('subscribers.json'), true);
                    if(!in_array($subscriber_id, $subscribers[$find_browser])) {
                        $subscribers[$find_browser][] = $subscriber_id;
                        $json = json_encode($subscribers);
                        if($fh = fopen('subscribers.json', 'w+')) {
                            fwrite($fh, $json);
                            fclose($fh);
                            echo '{"response": "OK", "id": "'.$subscriber_id.'"}';
                        }
                    }
                }
                break;

            // Сообщение для подписчика
            case 'push':
                $data['notification'] = [
                    "title" => "У вас новое сообщение!",
                    "message" => "19:00 от Push-Test\nНу и как работают эти уведомления?",
                    "tag" => "some-tag",
                    "icon" => "/icon-192x192.png",
                    "data" => "/?utm_source=push-api"
                ];
                header('Content-Type: application/json');
                echo json_encode($data);
                break;
        }

        define('MY_KEY', 'AAAAqeVhybk:APA91bG_OSDmFGk2j5_NznRuO8Pom3JX5sUrU-hNVwTiWgRlVW_kK22SPESgEwVEmH0OCcC9YVyXtIKmZrfNXPQTBSdy9Rd03RNshYmjjgeP7Rd1dDQBm7UWhUNzFmmPmGWWFn2yjTXD');
        define('TIME_TO_LIVE', 300);

        $subscribers = json_decode(file_get_contents('subscribers.json'), true);

        foreach ($subscribers as $browser => $subscribers_list) {
            foreach ($subscribers_list as $subscriber_id) {
                $result = send_push_message($browser, $subscriber_id);
            }
        }

        function send_push_message($browser, $subscriber_id) {
            $ch = curl_init();
            switch($browser) {

                case 'chrome':
                    curl_setopt($ch, CURLOPT_URL, 'https://gcm-http.googleapis.com/gcm/send');
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: key='.MY_KEY, 'Content-Type: application/json']);
                    curl_setopt($ch, CURLOPT_POSTFIELDS,
                        json_encode([
                            'registration_ids' => [$subscriber_id],
                            'data' => ['message' => 'send'],
                            'time_to_live' => TIME_TO_LIVE,
                            'collapse_key' => 'test'
                        ])
                    );
                    break;

                case 'firefox':
                    curl_setopt($ch, CURLOPT_URL, 'https://updates.push.services.mozilla.com/push/v5/'.$subscriber_id);
                    curl_setopt($ch, CURLOPT_PUT, true);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, ['TTL: '.TIME_TO_LIVE]);
                    break;

            }
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
        }
    }
}