<?php
class Model_Link {
    public $id;
    public $Name_link;
    public $Distrib_link;
    public $Tracker;
    public $Path_file;
    public $last_update;

    public static function getLinks() {
        $Link = [];
        $LinkArray = Database::query("SELECT Id_link, Name_link, Distrib_link, Name_track, last_update FROM links inner join trackers where Tracker=id_track");
        foreach ($LinkArray as $LinkData) {
            $Link[] = new Book($LinkData);
        }
        return $Link;
    }
    
    // public function __construct($data) {
    //     $this->id = $data['id'];
    //     $this->Name_link = $data['Name_link'];
    //     $this->Distrib_link = $data['Distrib_link'];
    //     $this->Tracker = $data['Tracker']; // 
    //     $this->Path_file = $data['Path_file'];
    //     $this->last_update = $data['last_update'];
    // }

}
 
 

?>