<?php
class Model_Link {
    public $id;
    public $Name_link;
    public $Distrib_link;
    public $Tracker;
    public $last_update;

    public static function getLinks() {
        $Link = [];
        $LinkArray = Database::query("SELECT Id_link, Name_link, Distrib_link, Name_track, last_update FROM links inner join trackers where Tracker=id_track");
        foreach ($LinkArray as $LinkData) {
            $Link[] = new Model_Link($LinkData);
        }
        return $Link;
    }

    public function Model_Link($data) {
        $this->id = $data['Id_link'];
        $this->Name_link = $data['Name_link'];
        $this->Distrib_link = $data['Distrib_link'];
        $this->Tracker = $data['Name_track']; // 
        $this->last_update = $data['last_update'];
    }

}
 
 

?>