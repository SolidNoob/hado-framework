<?php

/******************************
*
* Routes used in the application:
* to add a route, simply use the Router addRoute() method:
*
* Router::addRoute($name, $pattern, $controller, $action);
*
* Note that if a pattern need parameters, use {any} tag each time it is needed
* 
*******************************/

use Hado\Core\Router;

Router::addRoute('homepage', '/', 'StaticController', 'homeAction');
Router::addRoute('article-read', '/{any}/article-{any}', 'TestController', 'myTestAction');
Router::addRoute('contactpage','/contact-{any}', 'StaticController', 'contactAction');
Router::addRoute('loadArticlesAjax', '/loadArticles', 'StaticController', 'getArticlesTheAjaxWayAction');

//$router->printRouteCollection();