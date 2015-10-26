<?php

namespace Hado\Core;

use \PDO;

Class Database extends PDO{

	protected static $instance;

	public static function get(){
		if(self::$instance === null)
		{
			try {
	            self::$instance = new Database('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET, DB_USER, DB_PASSWORD);
            	self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        } catch (\PDOException $e) {
	            die('Erreur de connexion à la BDD: ' . $e->getMessage());
	        }
    	}
    	return self::$instance;
	}
}