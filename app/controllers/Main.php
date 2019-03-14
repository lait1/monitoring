<?php
namespace app\controllers;
use app\models\link;

class Main extends Controller {


	public function action_index()
	{

		$data = Link::getAllLinks();
		$this->view->generate('main_view.php', 'template_view.php', $data);
	}
	public function action_create()
	{

		$data =new Link($_POST);
		if($data->addLink())
		{
	        $host = 'http://'.$_SERVER['HTTP_HOST'].'/'.'monitoring/';
			header('Location:'.$host);
		}
		else 
		{	
			echo "Ошибка,добавление не удалось"; 
        }
	}
}