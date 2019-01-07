<?php
require_once 'app/models/model_tracker.php';

class Controller_parser extends Controller {


	public function action_index()
	{
		$link = Model_Link::getAllLinks();

		$tracker = Model_Tracker::getAllTrackers();
		foreach ($link as $data) {
			$url = $data->Distrib_link;
			$tracker = Model_Tracker::getTracker($data->Id_link);
			$html = Model_Parser::Read($url, $tracker->cookies);

		// Получение новой даты
			$newDate= Model_Parser::get_link_date($html);
			if($newDate > $data->last_update){
				$UpdateLinks=Model_Link::UpdateLink($data->Id_link, $newDate);
					if (!$UpdateLinks) {
						$error=true;
					}
				$episode= Model_Parser::get_link_episode($html, $tracker->Link_track);

				$html = Model_Parser::Read($episode, $tracker->cookies);
				$link_code = Model_Parser::get_link_code_episode($html);

				$link_torrent_1 ='http://www.lostfilm.tv/v_search.php?a='.$link_code;
				$html = Model_Parser::Read($link_torrent_1, $tracker->cookies);
				$link_torrent_2 = Model_Parser::get_link_torrent_1($html);

				$html = Model_Parser::Read($link_torrent_2, $tracker->cookies);
				$link_torrent_real = Model_Parser::get_link_torrent_2($html);

				$UpdateLinkTorrent=Model_Link::UpdateLinkTorrent($data->Id_link, $link_torrent_real);

				if (!$UpdateLinkTorrent) {
						$error=true;
					}
			}

			
		// 	// echo var_dump($link_torrent_real);
		}
		if (!$error) {
			$host = 'http://'.$_SERVER['HTTP_HOST'].'/'.'monitoring/';
			header('Location:'.$host);
		}
		// $data = Model_Parser::get_web_page($link);

	// $auth = array(
 //    'mail'=>'ale88371027%40yandex.ru',
 //    'pass'=>'uii80byu',
	// );
	// $link = 'http://www.lostfilm.tv';
	// $cookie ='PHPSESSID=nhmkorlsvgjtnui7ksonn67j03; lf_udv=8d48281f91c58bf5def64428d9217a8a; lf_loyal_person=0; lnk_uid=2223ac40a3a10cef696aa681df266335; lf_new=1; lf_session=114a05eb1c421e657469bbf376af54e1.3199372; _gat=1';

// 	$routesr = explode('/',$link);
// echo $routesr[2];
	// $data = Model_Parser::Read($link,$cookie);
	// $data = Model_Parser::request($link,$auth);
	// $res= Model_Parser::get_web_page2($data);
	// echo var_dump($res);
  //       $host = 'http://'.$_SERVER['HTTP_HOST'].'/'.'monitoring/';
		// header('Location:'.$host);
		
	
	}

  
}
