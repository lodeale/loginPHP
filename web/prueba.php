<?php 
	if (empty($_COOKIE['loginTrue']) or !$_COOKIE['loginTrue']){
		die ('Usted no es un usuario validado');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejempllo</title>
</head>
<body>
	<h1>Bienvenido a mi sitio <?= $_COOKIE["username"]; ?></h1>
</body>
</html>