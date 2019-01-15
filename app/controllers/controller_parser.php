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
			///////////////////////////////
			//На будущее, проверяем какой трекер и от этого выбирается вид парсера
			//////////////////////////////
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
				$link_torrent_2 = Model_Parser::get_link_torrent($html, '0');

				$html = Model_Parser::Read($link_torrent_2, $tracker->cookies);
				$link_torrent_real = Model_Parser::get_link_torrent($html, '3');

				$UpdateLinkTorrent=Model_Link::UpdateLinkTorrent($data->Id_link, $link_torrent_real);

				if (!$UpdateLinkTorrent) {
						$error=true;
					}
			}

			
		}
		if (!$error) {
			$host = 'http://'.$_SERVER['HTTP_HOST'].'/'.'monitoring/';
			header('Location:'.$host);
		}

	
	
	}

  
}
