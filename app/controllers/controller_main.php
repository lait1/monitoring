<?php
class Controller_main extends Controller {


	public function action_index()
	{

		$data = Model_Link::getLinks();
		$this->view->generate('main_view.php', 'template_view.php', $data);
	}
}