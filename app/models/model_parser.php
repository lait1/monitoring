<?php
class Model_Parser{



	// public static function get_web_page( $data ) {
	// 	foreach($data as $link){
	// 		$html=file_get_html($link->Distrib_link);
	// 		$data = $html->find('td.delta',1)->plaintext;

	// 		$result = substr($data, 4, -16);
	// 		$newDate= date("Y-m-d", strtotime($result));

	// 		if($newDate > $link->last_update){
	// 			$UpdateLink=Model_Link::UpdateLink($link->Id_link, $newDate);
	// 		}
	// 	}
	// }

	// public static function request($url, $post=0)
	// {
	//   $ch = curl_init();
	//   curl_setopt($ch, CURLOPT_URL, $url ); // отправляем на
	//   curl_setopt($ch, CURLOPT_HEADER, 0); // пустые заголовки
	//   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // возвратить то что вернул сервер
	//   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // следовать за редиректами
	//   curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);// таймаут4
	//   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	//   curl_setopt($ch, CURLOPT_COOKIEJAR, dirname(__FILE__).'/cookie.txt'); // сохранять куки в файл
	//   curl_setopt($ch, CURLOPT_COOKIEFILE,  dirname(__FILE__).'/cookie.txt');
	//   curl_setopt($ch, CURLOPT_POST, $post!==0 ); // использовать данные в post
	//   if($post)
	//     curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	//   $data = curl_exec($ch);
	//   curl_close($ch);
	//   return $data;
	// }

public static function Read($url, $cookie, $post=0){

   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_HEADER, 0); 
   curl_setopt($ch, CURLOPT_REFERER, $url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_POST, $post!==0);
   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
   curl_setopt($ch, CURLOPT_COOKIE, $cookie);
   curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (Windows; U; Windows NT 5.0; En; rv:1.8.0.2) Gecko/20070306 Firefox/1.0.0.4");
	// curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
   $result = curl_exec($ch);
   curl_close($ch);

   return $result;
}

	public static function get_link_date( $data ) {
			$html=str_get_html($data);
			$data = $html->find('td.delta',1)->plaintext;
			$result = substr($data, 4, -16);
			$newDate= date("Y-m-d", strtotime($result));
			// $res = $html->find('td.alpha',0)->plaintext;
			// $res = $html->find('a.forgot-password',0)->plaintext;
			return $newDate;
	}

	public static function get_link_episode( $data, $url ) {
			$html=str_get_html($data);
			$link = $html->find('td.delta',1)->onclick;
			// $routes = explode('/', $link);
			preg_match("/goTo\(\'\/(.*)\'/", $link, $routes);
			// $res = $html->find('td.alpha',0)->plaintext;
			// $res = $html->find('a.forgot-password',0)->plaintext;
			return $result = $url.$routes[1];
	}

	public static function get_link_code_episode( $data) {
			$html=str_get_html($data);
			$link = $html->find('.external-btn',0)->onclick;
			preg_match("/PlayEpisode\(\'(.*)\'/", $link, $routes);

			return $routes[1];
	}

	public static function get_link_torrent_1( $data) {
			$html=str_get_html($data);
			$link = $html->find('a',0)->href;
			return $link;
	}

	public static function get_link_torrent_2( $data) {
			$html=str_get_html($data);
			$link = $html->find('a',3)->href;
			return $link;
	}
}