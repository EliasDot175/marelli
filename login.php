<?php require_once 'assets/ti.php' ?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title> marelli</title>

		<!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- CSS de Bootstrap -->
		<link href="assets/bootstrap-3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="assets/bootstrap-3.3.4/css/bootstrap-social.css" rel="stylesheet" media="screen">

		<!-- CSS de font-awesome-4.3.0 para iconos sociales-->
		<link href="assets/fonts/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" media="screen">

		<!-- CSS -->
		<link href="assets/css/estilos.css?v=04" rel="stylesheet" media="screen">

	</head>


	<body>


		<!-- CONTENEDOR GENERAL***********************************************************-->

		<div class="contenedor col-xs-12 col-sm-12 col-md-12 ol-lg-12">
			
				<div class="login">
					<div class="logo-login">
						<img src="assets/images/magneti-marelli-logo.png">
					</div>
					<form role="form" class="form">
						

					  	<div class="form-group">
					    	<label>USUARIO</label>
					    	<input type="email" class="form-control" id="nombre" >
					  	</div>
					  	<div class="form-group">
					    	<label>CONTRASEÑA</label>
					   		<input type="password" class="form-control" id="email" >
					 	</div>
					 	<button type="submit" class="btn enviar btn-primary">Ingresar</button>
					</form>

				</div>
				<div class="error-login" style="display:none">
					<p class="text-uppercase">usuario o contraseña inválidos</p>
				</div>
		</div>
		<!-- // CONTENEDOR GENERAL*********************************************-->

		<!-- Librería jQuery requerida por los plugins de JavaScript Bootstrap -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="assets/bootstrap-3.3.4/js/bootstrap.min.js"></script>

	</body>
</html>