<?php

namespace Hado\Core;

Class View{

	protected $twig;
	protected $view;

	public function __construct()
	{
		$loader = new \Twig_Loader_Filesystem('App/Views/');
		$this->twig = new \Twig_Environment($loader, array(
		    'cache' => TWIG_CACHE_DIR,	
		    'debug' => TWIG_DEBUG
		));

		//	adding the url function in template 
		$function = new \Twig_SimpleFunction('url', array('\Hado\Core\Router', 'url'));
		$this->twig->addFunction($function);
/*
		//	adding the renderController function in template
		$function = new \Twig_SimpleFunction('renderController', function ($controller, $action, $params) use ($config, $router) {
			$controllerName = '\\Hado\\App\\Controllers\\'.$controller;
			$controller = new $controllerName($config, $router);
		    $view = call_user_func_array(array($controller, $action), $params);
		    echo $view;
		});
		$this->twig->addFunction($function); */
		
		//$this->router = $router;
	}

	public function renderView($view, $params = null){
		$template = $this->twig->loadTemplate($view.'.html');
		$this->view = $view;

		if( !is_array($params)){
			$params = array($params);
		}

		return $template->render($params);
	}
}

