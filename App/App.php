<?php 
namespace App;
use App\Controllers\HomeController;
use Exception;
class App
{
	private $controller;
	private $controllerFile;
	private $action;
	private $params;
	public  $controllerName;

	public function __construct()
	{
       /*
        * Constantes do sistema
        */
       define('APP_HOST'       , $_SERVER['HTTP_HOST'] . "/mvc-php-basico-1");
       define('PATH'           , realpath('./'));
       define('TITLE'          , "Primeira aplicação MVC em PHP - DevMedia");
       define('DB_HOST'        , "localhost");
       define('DB_USER'        , "root");
       define('DB_PASSWORD'    , "");
       define('DB_NAME'        , "devmedia");
       define('DB_DRIVER'      , "mysql");

       $this->url();
   }
}
?>