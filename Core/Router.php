<?php

namespace Hado\Core;

use Hado\Core\CoreException;

Class Router{

	public static $routeCollection = array();

	/**
	 * Add a route to the collection
	 * @param $name: the name of the route 
	 * @param $pattern: the url pattern of the route 
	 * @param $controller: the name of the controller to use
	 * @param $action: the name of the action to call
	 */
	public static function addRoute($name, $pattern, $controller, $action){
		$routeParams = array(
			'pattern' => $pattern,
			'controller' => $controller, 
			'action' => $action
		);
		self::$routeCollection[$name] = $routeParams; 
	}

	/**
	 * Check in the routeCollection if the providen route matches
	 * @param  $url: the url pattern of the route 
	 * @return (array) An array filled with the name of the route, the controller used, the action used
	 *                 and array of parameters
	 */
	public static function matcheRoute($url){
		foreach(self::$routeCollection as $route)
		{	
			$route['pattern'] = self::replaceSpecialCharacter($route['pattern']);
			if(preg_match('#^'.$route['pattern'].'$#', $url, $argsValue))
			{
				//the url matches the pattern and
				//argsValue is now filled with the real values of (.*) in the url
				$argsValue = array_slice($argsValue, 1);
				
				return array(
					'name' => key($route),
					'controller' => $route['controller'],
					'action' => $route['action'],
					'params' => $argsValue
				);
			} 
		}	
		throw new CoreException("This url doesn't match any route pattern.");
	}

	public static function printRouteCollection(){
		var_dump(self::$routeCollection);
	}

	/**
	 * Replace the "any" character in the route pattern by is regex-equivalent "(.*)" 
	 * @param  [type] $routePattern [description]
	 * @return the actual route 
	 */
	public static function replaceSpecialCharacter($routePattern){
		return str_replace('{any}', '(.*)', $routePattern);
	}

	/**
	 * Search if the providen routeName exists. If so, returns it. 
	 * @param  [type] $routeName [description]
	 * @return [type]            [description]
	 */
	public static function url($routeName, array $params = null){
		try
		{
			if( !array_key_exists($routeName, self::$routeCollection))
				throw new CoreException("The route named '$routeName' doesn't exist.");

			$route = self::$routeCollection[$routeName];

			if(empty($params))
				return $route['pattern'];
			
			if(count($params) != substr_count($route['pattern'], '{any}'))
				throw new CoreException("Not enough (or too much) parameters given for the route $routeName");

			$urlWithParameters = self::replaceAnyByParameters($route['pattern'], $params);
			return $urlWithParameters;

		} catch(CoreException $e) {
			$e->getErrorReport();
		}
	}


	public static function replaceAnyByParameters($pattern, array $replaceValues){
		$str = preg_replace_callback('#{any}#', function($match) use( &$replaceValues){
		    return array_shift( $replaceValues);
		}, $pattern);

		return $str;
	}
}

