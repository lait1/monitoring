<?php
class Model_Link {
    public $Id_link;
    public $Name_link;
    public $Distrib_link;
    public $Tracker;
    public $last_update;

    public static function getLinks() {
        $Link = [];
        $LinkArray = Database::getAll("SELECT Id_link, Name_link, Distrib_link, Name_track, last_update FROM links inner join trackers where Tracker=id_track");
        foreach ($LinkArray as $LinkData) {
            $Link[] = new Model_Link($LinkData);
        }
        return $Link;
    }

    public function addLink() {
        $addLink = Database::add("INSERT INTO links SET Name_link='$this->Name_link',Distrib_link='$this->Distrib_link', last_update='$this->last_update', Tracker='$this->Tracker', Path_file=''");
        return $addLink;

    }

    public function __construct($data) {
        $this->Id_link=$data['Id_link'];;
        $this->Name_link = $data['Name_link'];
        $this->Distrib_link = $data['Distrib_link'];
        $this->Tracker = $data['Name_track']; // 
        $this->last_update = $data['last_update'];
    }

}
 
 

