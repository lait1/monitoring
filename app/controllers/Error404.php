<?php
namespace app\controllers;

class Error404 extends Controller
{
	
	function action_index()
	{
		$this->view->generate('404_view.php', 'template_view.php');
	}

}
