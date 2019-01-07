<?php
class Model_Parser{



	public static function get_web_page( $data ) {
		foreach($data as $link){
			$html=file_get_html($link->Distrib_link);
			$data = $html->find('td.delta',1)->plaintext;

			$result = substr($data, 4, -16);
			$newDate= date("Y-m-d", strtotime($result));

			if($newDate > $link->last_update){
				$UpdateLink=Model_Link::UpdateLink($link->Id_link, $newDate);

			}

		}

	}
	public static function request($url, $post=0)
	{
	  $ch = curl_init();
	  curl_setopt($ch, CURLOPT_URL, $url ); // отправляем на
	  curl_setopt($ch, CURLOPT_HEADER, 0); // пустые заголовки
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // возвратить то что вернул сервер
	  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // следовать за редиректами
	  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);// таймаут4
	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	  curl_setopt($ch, CURLOPT_COOKIEJAR, dirname(__FILE__).'/cookie.txt'); // сохранять куки в файл
	  curl_setopt($ch, CURLOPT_COOKIEFILE,  dirname(__FILE__).'/cookie.txt');
	  curl_setopt($ch, CURLOPT_POST, $post!==0 ); // использовать данные в post
	  if($post)
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	  $data = curl_exec($ch);
	  curl_close($ch);
	  return $data;
	}

	public static function get_web_page2( $data ) {
			$html=str_get_html($data);
			$res = $html->find('a[href="/archive"]',0)->plaintext;
			return $res;
	}

}