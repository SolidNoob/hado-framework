<?php

namespace Hado\Core;

use Hado\Core\View;

Class Controller{

	protected $view;

	public function __construct(){
		$this->view = new View();
	}

	/**
	 * Dump a variable and then die()
	 * @param  $var: the variable to dump
	 */
	public function dd($var){
		var_dump($var);
		die();
	}

	/**
	 * Redirect to the specified url
	 * @param  $url: the url to redirect to
	 */
	public function redirect($url){
		header('Location:'.$url);
	}


	public function render($view, $params = null){
		return $this->view->renderView($view, $params);
	}

	public function error404(){
		header("HTTP/1.0 404 Not Found");
	}

	public function isAjaxRequest() {
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
		  return true;
		return false;
	}
}