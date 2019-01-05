<?php
class Controller_parser extends Controller {


	public function action_index()
	{
		$link = Model_Link::getLink('2');
		echo var_dump($link);
		$data = Model_Parser::get_web_page($link['Distrib_link']);
		$res=$data['content'];
		$dom = new domDocument();
		$dom->loadHTML($res);
		$doc->validateOnParse = true;
		$tables = $dom->getElementsByTagName('tr');
		$doc->validateOnParse = true;
		echo var_dump($tables);
	}

  
}