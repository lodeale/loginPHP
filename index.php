<?php
require 'vendor/autoload.php';

use \Slim\Slim;
use myapp\Classes\DB\DB as DB;

$app = new Slim();
/**
* Configuration Template
*/
$app->config(array('templates.path' => './web'));

/**
* Configuration of the Session and Cookies
*/
$app->add(new \Slim\Middleware\SessionCookie(array(
	'expires' => '20 minutes',
	'path' => '/',
	'domain' => null,
	'secure' => false,
	'httponly' => false,
	'name' => 'slim_session',
	'secret' => 'cryptqwerty',
	'cipher' => MCRYPT_RIJNDAEL_256,
	'cipher_mode' => MCRYPT_MODE_CBC,
)));

$db = new DB();
$rootPath = 'http://127.0.0.1/login/';

require_once 'routers/routerLogin.php';
require_once 'routers/routerPanel.php';

$app->get('/',function(){
    echo "Bienvenido.";
});

$app->run();
