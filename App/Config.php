<?php 

namespace Hado\App;

Class Config{

	private $settings = [];

	public function __construct(){

		//	---------- MySQL DATABASE ----------
		
		//	Database host
		define('DB_HOST', '127.0.0.1');
		//	Database name
		define('DB_NAME', 'hado');
		//	Database user
		define('DB_USER', 'root');
		//	Database password
		define('DB_PASSWORD', '');
		//	Database charset
		define('DB_CHARSET', 'utf8');

		
		//	---------- Twig ----------
		
		//	Cache directory (Easier maintenance if at root project)
		define('TWIG_CACHE_DIR', 'Cache');
		//	Debug mode (set false when app go to production)
		define('TWIG_DEBUG', 'true');

		//Session::init(); 
	}

}