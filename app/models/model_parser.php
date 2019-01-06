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


}