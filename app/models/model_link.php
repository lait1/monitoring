<?php
class Model_Link {
    public $Id_link;
    public $Name_link;
    public $Distrib_link;
    public $Tracker;
    public $last_update;

    public static function getAllLinks() {
        $Link = [];
        $LinkArray = Database::getAll("SELECT Id_link, Name_link, Distrib_link, Name_track, last_update FROM links inner join trackers where Tracker=id_track");
        foreach ($LinkArray as $LinkData) {
            $Link[] = new Model_Link($LinkData);
        }
        return $Link;
    }

    public static function getLink($id) {
        $Link = [];
        $LinkArray = Database::getRow("SELECT Id_link, Name_link, Distrib_link, Name_track, last_update FROM links inner join trackers where Tracker=id_track and ID_link=$id");

        return $LinkArray;
    }

    public function addLink() {
        $addLink = Database::add("INSERT INTO links SET Name_link='$this->Name_link',Distrib_link='$this->Distrib_link', last_update='$this->last_update', Tracker='$this->Tracker', Path_file=''");
        return $addLink;

    }

    public static function UpdateLink($Id_link, $last_update) {
        $UpdateLink = Database::add("UPDATE links SET last_update = '$last_update' WHERE Id_link = $Id_link");
        return $UpdateLink;

    }

    public function DeleteLink($id) {
        $DeleteLink = Database::add("DELETE FROM links WHERE Id_link = $id");
        return $DeleteLink;

    }

    public function __construct($data) {
        $this->Id_link=$data['Id_link'];;
        $this->Name_link = $data['Name_link'];
        $this->Distrib_link = $data['Distrib_link'];
        $this->Tracker = $data['Name_track']; // 
        $this->last_update = $data['last_update'];
    }

}
 
 

