<?php
namespace app\controllers;
use app\models\link as Mylink;

class Main extends Controller {


	public function action_index()
	{

		$data = Mylink::getAllLinks();
		$this->view->generate('main_view.php', 'template_view.php', $data);
	}
	public function action_create()
	{

		$data =new Mylink($_POST);
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