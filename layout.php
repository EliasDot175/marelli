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

		<!-- MENU************************************************************************-->
		<nav class="menu navbar col-xs-12 col-sm-12 col-md-12 ol-lg-12">
			<div class="contenedor">

				<!-- boton menu mobile -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!--// boton menu mobile -->

				<div class="logo">
					<a href="index.php">
						<img src="assets/images/magneti-marelli-logo.png">
					</a>
				</div>

				<!-- Contenido menu-->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="text-uppercase">
							<a href="listado-productos.php">
								pedidos
							</a>
						</li>
						<li class="naranja text-uppercase">
							<a href="historial.php">
								historial
							</a>
						</li>
						<li class="marron text-uppercase dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								garantias
							</a>
						</li>
						<li class="rosa text-uppercase">
							<a href="login.php">
								usuario
							</a>
						</li>
					</ul>
				</div>
				<!-- //Contenido menu-->

			</div>
		</nav>
		<!-- //MENU************************************************************************-->




		<!-- CONTENEDOR GENERAL***********************************************************-->
		<div class="contenedor col-xs-12 col-sm-12 col-md-12 ol-lg-12">

			<div class="buscar">
				<div class="input"> 
					<input type="text" name="buscar">
					<span class="glyphicon glyphicon-search"></span>
				</div>
				<div class="resultado" style="display:none">
					<p>Resultado 1</p>
					<p>Resultado 2</p>
					<p>Resultado 3</p>
				</div>
			</div>

			<div class="titulo">
				<h1 class="text-uppercase">Pedidos</h1>
				<h3 class="text-uppercase">SELECCIONE O CARGUE ARTÍCULOS PARA AGREGAR AL PEDIDO</h3>
			</div>

			<p id="mover-sidebar" posicion="left">mover sidebar</p>

			<div class="bloque-general">

				<!--CONTENIDO************-->
				<div class="contenido col-xs-12 col-sm-9 col-md-9 ol-lg-9">

					<?php startblock('contenido') ?> <?php endblock() ?> 

				</div>
				<!-- // CONTENIDO********-->

				<!-- SIDEBAR ************-->
				<div class="sidebar col-xs-12 col-sm-3 col-md-3 ol-lg-3">
					<div class="perfil">
						<div class="imagen-perfil background-cover" style="background-image: url('assets/images/imagen-perfil.jpg')">
						</div>
						<p class='text-uppercase nombre-perfil'>ROBERTO ARIEL RASER</p>
						<p>Gerente general</p>
						<p>rraser@agricolarodrigez.com.ar</p>
						<button type="button" class="btn boton-perfil">MODIFICAR CLAVE</button>
					</div>

					<!-- carrito sidebar -->
					<div class="carrito-sidebar">
						<div class="titulo-agregados">
							<img class='carrito-sidebar-icon' src="assets/images/carrito-icon.png">
							<h3 class='text-uppercase carrito-sidebar-text'>ARTICULOS AGREGADOS</h3>
						</div>

						<!-- item-categoria -->
						<div class="subtitulo carrito-sidebar-subtitulo">
							<h4 class='text-uppercase'>bombas depresoras</h4>
						</div>
						<!-- //item-categoria -->

						<!-- item-carrito -->
						<div class="item-carrito">
							<div class="head-item-carrito">
								<p class="codigo-item-carrito"class='text-uppercase '>5623339898</p>
								<div class="cerrar-item-carrito cerrar-item"></div>
							</div>
							<div class="body-item-carrito">
								<div class="cantidad-elementos">
									<p class='text-uppercase'>3</p>
								</div>

								<div class="descripcion-elementos">
									<p class='text-uppercase producto'>bomba de agua</p>
									<p class='text-uppercase id'>123102</p>
								</div>
							</div>
						</div>
						<!-- //item-carrito -->

						<!-- item-categoria -->
						<div class="subtitulo carrito-sidebar-subtitulo">
							<h4 class='text-uppercase'>bombas depresoras</h4>
						</div>
						<!-- //item-categoria -->

						<!-- item-carrito -->
						<div class="item-carrito">
							<div class="head-item-carrito">
								<p class="codigo-item-carrito"class='text-uppercase '>5623339898</p>
								<div class="cerrar-item-carrito cerrar-item"></div>
							</div>
							<div class="body-item-carrito">
								<div class="cantidad-elementos">
									<p class='text-uppercase'>3</p>
								</div>

								<div class="descripcion-elementos">
									<p class='text-uppercase producto'>bomba de agua</p>
									<p class='text-uppercase id'>123102</p>
								</div>
							</div>
						</div>
						<!-- //item-carrito -->

						<!-- item-carrito -->
						<div class="item-carrito">
							<div class="head-item-carrito">
								<p class="codigo-item-carrito"class='text-uppercase '>5623339898</p>
								<div class="cerrar-item-carrito cerrar-item"></div>
							</div>
							<div class="body-item-carrito">
								<div class="cantidad-elementos">
									<p class='text-uppercase'>3</p>
								</div>

								<div class="descripcion-elementos">
									<p class='text-uppercase producto'>bomba de agua / bomba de agua </p>
									<p class='text-uppercase id'>123102</p>
								</div>
							</div>
						</div>
						<!-- //item-carrito -->

						<a href="articulos-agregados.php">	
							<button type="button" class="btn boton-continuar">CONTINUAR</button>
						</a>

					</div>
					<!-- //carrito sidebar -->

				</div>
				<!-- //SIDEBAR ************-->

			</div>
		</div>
		<!-- // CONTENEDOR GENERAL*********************************************-->

		<!-- Librería jQuery requerida por los plugins de JavaScript Bootstrap -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="assets/bootstrap-3.3.4/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script src="assets/js/eventos.js"></script>

	</body>
</html>