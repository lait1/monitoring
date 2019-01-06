<?php
class Controller_parser extends Controller {


	public function action_index()
	{
		$link = Model_Link::getAllLinks();
		$data = Model_Parser::get_web_page($link);

        $host = 'http://'.$_SERVER['HTTP_HOST'].'/'.'monitoring/';
		header('Location:'.$host);
		
	
	}

  
}
