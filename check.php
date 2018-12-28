<?php
// Скрипт проверки

// Соединямся с БД
include "options.php";

if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])){
    $id_user=intval($_COOKIE['id']);
    $query = $connection->query("SELECT * FROM user WHERE user_id=$id_user");
    //$query = mysqli_query($link, "SELECT *,INET_NTOA(user_ip) AS user_ip FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
    while($userdata = $query->fetch(PDO::FETCH_ASSOC)){ 
            //echo "Это из базы ".$userdata['user_hash']." это юсер ид ".$userdata['user_id'];
        if(($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['user_id'] !== $_COOKIE['id'])){
            //setcookie("id", "", time() - 3600*24*30*12, "/");
            //setcookie("hash", "", time() - 3600*24*30*12, "/");
            print "Хм, что-то не получилось";
        }
        else{
            print "Привет, ".$userdata['user_login'].". Всё работает!";
        }
    }
}
else
{
    print "Включите куки";
}
?>