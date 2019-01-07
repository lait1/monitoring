<?php
class Controller_parser extends Controller {


	public function action_index()
	{
		// $link = Model_Link::getAllLinks();
		// $data = Model_Parser::get_web_page($link);

	$auth = array(
    '_csrf_token'=>'xJEP_azPsBMZM65mKtcfQdmYOuT-teYH5Ue4CUwAUUg',
    '_username'=>'lait123',
    '_password'=>'uii80byu',
    '_submit'=>'Войти',
	);
	$link = 'https://manga-online.biz/';

	$data = Model_Parser::request($link,$auth);
	$res= Model_Parser::get_web_page2($data);
	echo var_dump($res);
  //       $host = 'http://'.$_SERVER['HTTP_HOST'].'/'.'monitoring/';
		// header('Location:'.$host);
		
	
	}

  
}
