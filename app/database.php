<?php

class Database
{
	private static $connection;

	public static function openConnection() { 

      self::$connection = new PDO("mysql:host=localhost; dbname=fx_monitor;charset=UTF8", "root", "", array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'" ));
	}

	public static function query($sql, $params= NULL) { 
	Database::openConnection(); 

    $stmt = self::$connection->prepare($sql); 
    $stmt->execute($params); 

     return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    } 

}