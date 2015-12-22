<?php 
$app->get('/panel/', function() use ($app,$rootPath) {
	$req = $app->request;
	$data = array();
	$data["username"] = $app->getCookie('username');
	$data["loginTrue"] = $app->getCookie('loginTrue');
	$data["rootPath"] = $rootPath;
	$app->render('panel.php',$data);
});
?>