<?php

class Database
{
	private $connection;

	public function __construct()
	{
		$this->openConnection();
	}

	public static function openConnection() { 

      $this->connection = new PDO("mysql:host=localhost; dbname=fx_monitor;charset=UTF8", "root", "", array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'" ));
	}

	public static function query($sql, $params= NULL) { 
     $stmt = $this->connection->prepare($sql); 
     $stmt->execute($params); 

     return $stmt->fetch(PDO::FETCH_ASSOC); 
    } 

}