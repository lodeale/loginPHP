<?php
require 'vendor/autoload.php';

use \Slim\Slim;
use myapp\Classes\DB\DB as DB;

$app = new Slim();
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
	'cipher_mode' => MCRYPT_MODE_CBC
)));

$db = new DB();

require_once 'routers/routerLogin.php';

$app->get('/',function(){
    echo "Bienvenido.";
});

$app->response->headers->set('Content-Type','application/json');
$app->run();
