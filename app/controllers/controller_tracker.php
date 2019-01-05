<?php
class Controller_tracker extends Controller {


	public function action_index()
	{

		$data = Model_Tracker::getTrackers();
		echo json_encode($data);
	}
}