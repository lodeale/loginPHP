<?php

$app->post('/login/',function() use ($app,$db) {
	$app->response->headers->set('Content-Type','application/json');

	$username = $app->request()->post('username');
	$password = $app->request()->post('password');

	$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
	
    $prod = $db->getInstance()->consultar($sql, array($username,sha1($password)) );
    $result = $prod->results();

    if ( !empty($result) ){
    	$app->setCookie('loginTrue',TRUE,'1 days');
    	$app->setCookie('username',$result[0]->name, '1 days');
    	echo json_encode(array('loginTrue' => TRUE));
    }else{
    	echo json_encode(array('loginTrue'=>FALSE));
    }
});

$app->get('/showData/', function() use ($app,$db) {
	$app->response->headers->set('Content-Type','application/json');
	var_dump($_COOKIE);
});

$app->get('/inLogin/',function() use ($app,$rootPath){
	$app->deleteCookie('loginTrue');
	$app->deleteCookie('username');
	$app->response->redirect($rootPath . 'web/index.php');
});

?>