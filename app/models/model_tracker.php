<?php

class Model_Tracker {
	
    public $Id_track;
    public $Name_track;
    public $Link_track;
    public $login_track;
    public $pass_track;

    public static function getTrackers() {
        $track = [];
        $trackArray = Database::getAll("SELECT * FROM trackers");
        foreach ($trackArray as $trackData) {
            $track[] = new Model_Link($trackData);
        }
        return $track;
    }

    public static function addTracker() {
        $AddTracker = Database::add("INSERT INTO trackers SET Name_track='$inputNameTracker', Link_track='$inputUrlTracker',login_track='$inputLogin', pass_track='$inputPassword'");

    }

    public function __construct($data) {
        $this->Id_track = $data['Id_track'];
        $this->Name_track = $data['Name_track'];
        $this->Link_track = $data['Link_track'];
        $this->login_track = $data['login_track']; // 
        $this->pass_track = $data['pass_track'];
    }

}
