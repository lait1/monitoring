<?php
class Controller_main extends Controller {

	function __construct()
	{
		$this->model = new Model_Link();
	}

	public function action_index()
	{


		$data = $this->model->getLinks();
		$this->view->generate('main_view.php', 'template_view.php', $data);
	}
}