<?php
class Controller_tracker extends Controller {


	public function action_index()
	{

		$data = Model_Tracker::getTrackers();
		echo json_encode($data);
	}

	public function action_create()
	{

		$data = new Model_Tracker($_POST);
		if($data->addTracker())
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