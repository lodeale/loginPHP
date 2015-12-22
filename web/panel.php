<?php 
	if (empty($_COOKIE['loginTrue']) or !$_COOKIE['loginTrue']){
		die ('Usted no es un usuario validado');
	}

	if ( empty($_COOKIE["username"]) ){
		$_COOKIE["username"] = 'Desconocido';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/signin.css">
</head>
<body>
	<!-- message -->
	<div class="alert" role="alert"></div>
	<!-- /.message -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only"> Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Colbiocor</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="#"> Inicio </a>
					</li>
					<li>
						<a href="#about">Salir</a>
					</li>					
				</ul>
				<ul class="nav navbar-right">
					<li><p class="navbar-text">
					Bienvenido
					<?= $_COOKIE['username']; ?></p>
					</li>
				</ul>
			</div><!-- nav-collapse -->
		</div>
	</nav><!-- /.navbar -->
	<div class="page-header">
		<h1>Colegio De Bioquimicos</h1>
	</div>
	<div class="container">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">Panel Usuarios</div>
			<div class="panel-body">
				<p>En este panel se muestran todos los usuarios del sistema.</p>
				<button class="btn btn-default">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				Usuario
				</button>
			</div>

			<!-- Table -->
			<table class="table">
				<tr>
					<th>Usuario</th>
					<th>Correo</th>
					<th>Permisos</th>
					<th>Activo</th>
					<th>Opciones</th>
				</tr>
				<tr>
					<td>lodeale</td>
					<td>lodeale@gmail.com</td>
					<td>Admin</td>
					<td>Activo</td>
					<td>
						<button type="button" class="btn btn-default" aria-label="Left Align">
						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default" aria-label="Left Align">
						<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						</button>
					</td>
				</tr>
				<tr>
					<td>nacamura</td>
					<td>nacamura@gmail.com</td>
					<td>Admin</td>
					<td>Activo</td>
					<td>
						<button type="button" class="btn btn-default" aria-label="Left Align">
						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default" aria-label="Left Align">
						<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						</button>
					</td>
				</tr>
				<tr>
					<td>tito</td>
					<td>tito@gmail.com</td>
					<td>Admin</td>
					<td>Activo</td>
					<td>
						<button type="button" class="btn btn-default" aria-label="Left Align">
						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default" aria-label="Left Align">
						<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						</button>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<!-- script bootstrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<!-- alerts -->
	<script src="../assets/js/login.js"></script>
</body>
</html>