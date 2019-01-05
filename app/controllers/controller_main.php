<?php
class Controller_main extends Controller {


	public function action_index()
	{

		$data = Model_Link::getAllLinks();
		$this->view->generate('main_view.php', 'template_view.php', $data);
	}
	public function action_create()
	{

		$data =new Model_Link($_POST);
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