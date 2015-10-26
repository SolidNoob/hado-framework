<?php
//$start = microtime(true);

//	Loading needed classes
require "vendor/autoload.php";

use Hado\App\Config;
use Hado\Core\App;
use Hado\Core\Controller;
use Hado\Core\CoreException;
use Hado\Core\Router;

//	Initializing session
Hado\Helpers\Session::init();

// 	Add routes in the Router
require 'App/routes.php';


//	Defining configuration constants 
$config = new Config();

//	Getting url and check if it match a route
$url = App::getUrl();

try{
	$routeInfo = Router::matcheRoute($url);
	
	$controllerName = App::checkController($routeInfo['controller']);
	App::$controller = new $controllerName();
	
	App::$action =App::checkAction($routeInfo['action']);
}
catch (CoreException $e) { 
	//	An exception is thrown if the url doesn't match or if controller or action doesn't exist 
	$e->getErrorReport();
}


//	Call the action in the appropriate controller, with parameters given in the url
$controller = App::$controller;
$action = App::$action;

$result = call_user_func_array(array(App::$controller, App::$action), $routeInfo['params']);
echo $result;

/*
$time_elapsed_secs = microtime(true) - $start;
echo "Page generated in $time_elapsed_secs seconds";
*/