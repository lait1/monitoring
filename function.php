<?php
include 'options.php';

if(isset($_POST['subTracker'])){

	$inputNameTracker=$_POST['inputNameTracker'];
	$inputUrlTracker=$_POST['inputUrlTracker'];
	$inputLogin=$_POST['inputLogin'];
	$inputPassword=$_POST['inputPassword'];

        $add_row = $connection->exec("INSERT INTO trackers SET Name_track='$inputNameTracker', 
        														Link_track='$inputUrlTracker', 
        														login_track='$inputLogin',
        														pass_track='$inputPassword'");
        if($add_row){
            echo "Трекер добавлен";
            header("Location: index.php"); exit();
            }
        else {echo "Ошибка,добавление не удалось"; 
        }
        // 
}
if(isset($_POST['subLink'])){

	$inputNameLinkTracker=$_POST['inputNameLinkTracker'];
	$inputNameLink=$_POST['inputNameLink'];
	$inputUrlLink=$_POST['inputUrlLink'];


        $add_row = $connection->exec("INSERT INTO links SET Name_link='$inputNameLink', 
        													Distrib_link='$inputUrlLink', 
        													New_flag='0',
        													Tracker='$inputNameLinkTracker',
        													Path_file=''");
        if($add_row){
            echo "Раздача добавлена";
            header("Location: index.php"); exit();
            }
        else {echo "Ошибка,добавление не удалось"; 
        }
        // 
}


?>
