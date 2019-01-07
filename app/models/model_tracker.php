<?php

class Model_Tracker {
    public $Id_track;
    public $Name_track;
    public $Link_track;
    public $login_track;
    public $pass_track;
    public $cookies;

    public static function getAllTrackers() {
        $track = [];
        $trackArray = Database::getAll("SELECT * FROM trackers");
        foreach ($trackArray as $trackData) {
            $track[] = new Model_Tracker($trackData);
        }
        return $track;
    }

    public static function getTracker($id) {
        // $track = [];
        $trackArray = Database::getRow("SELECT Id_track, Name_track, Link_track, login_track, pass_track, cookies  FROM links inner join trackers where Tracker=id_track and ID_link=$id");
            $track = new Model_Tracker($trackArray);

        return $track;
    }

    public function addTracker() {
        $AddTracker = Database::add("INSERT INTO trackers SET Name_track='$this->Name_track', Link_track='$this->Link_track',login_track='$this->login_track', pass_track='$this->pass_track'");
        return $AddTracker;

    }

    public function __construct($data) {
        $this->Id_track = $data['Id_track'];
        $this->Name_track = $data['Name_track'];
        $this->Link_track = $data['Link_track'];
        $this->login_track = $data['login_track']; // 
        $this->pass_track = $data['pass_track'];
        $this->cookies = $data['cookies'];
    }

}
