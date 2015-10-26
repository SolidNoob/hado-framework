<?php

namespace Hado\Core;

use Hado\Core\CoreException;

Class App{

	public static $controller;
	public static $controllerName;
	public static $action;

	private static $dbInstance;

	public static function getUrl(){
		//return trim($_SERVER['REQUEST_URI'], '/');
		return $_SERVER['REQUEST_URI'];
	}

	public static function checkController($controllerName){
		if (file_exists( dirname(__DIR__).'/App/Controllers/'.$controllerName.'.php'))
		{
			self::$controllerName = $controllerName;
			return 'Hado\\App\\Controllers\\'.$controllerName;
		}
		else
			throw new CoreException('The controller '.$controllerName.' doesn\'t exist');
	}

	public static function checkAction($actionName){
		if (method_exists(self::$controller, $actionName)){
			return $actionName;
		}
		else
			throw new CoreException('The action '.$actionName.' doesn\'t exist in the controller '. self::$controllerName);
	}
/*
	public static function getDb(){
		if(is_null($this->dbInstance)){
			$this->dbInstance = new Database($config->get('db_user'), $config->get('db_pass'), $config->get('db_host'), $config->get('db_name'));
		}
		return $this->dbInstance;
	}*/
}