<?php
class Link {
    public $id;
    public $Name_link;
    public $Distrib_link;
    public $Tracker;
    public $Path_file;
    public $last_update;

    public function __construct($data) {
        $this->id = $data['id'];
        $this->Name_link = $data['Name_link'];
        $this->Distrib_link = $data['Distrib_link'];
        $this->Tracker = $data['Tracker']; // 
        $this->Path_file = $data['Path_file'];
        $this->last_update = $data['last_update'];


    }

    public static function getLinks() {
        $Link = [];
        $LinkArray = Database::query("select * from links");
        foreach ($LinkArray as $LinkData) {
            $Link[] = new Book($LinkData);
        }
        return $Link;
    }

    public static function setLinks() {
        $add_row = Database::query("INSERT INTO links SET Name_link='$this->Name_link', 
                                                            Distrib_link='$this->Distrib_link', 
                                                            last_update='$this->last_update',
                                                            Tracker='$this->Tracker',
                                                            Path_file='$this->Path_file'");
       if($add_row){
            return $err[];
            }
        else {
            return $err[] ="Ошибка,добавление не удалось"; 
        }
        
    }


}
 
 

?>