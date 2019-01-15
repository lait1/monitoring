<?php
class Model_Parser{

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
			return $newDate;
	}

	public static function get_link_episode( $data, $url ) {
			$html=str_get_html($data);
			$link = $html->find('td.delta',1)->onclick;
			preg_match("/goTo\(\'\/(.*)\'/", $link, $routes);
			return $result = $url.$routes[1];
	}

	public static function get_link_code_episode( $data) {
			$html=str_get_html($data);
			$link = $html->find('.external-btn',0)->onclick;
			preg_match("/PlayEpisode\(\'(.*)\'/", $link, $routes);
			return $routes[1];
	}

	public static function get_link_torrent( $data, $numb) {
			$html=str_get_html($data);
			$link = $html->find('a', $numb)->href;
			return $link;
	}

}