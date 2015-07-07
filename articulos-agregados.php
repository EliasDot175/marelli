<?php include 'layout.php' ?>


<?php startblock('contenido') ?>
<!--*** CONTENDO ***-->

<!--categorias-->
<div class="productos col-xs-12 col-sm-3 col-md-3 ol-lg-3">

	<!--submenu-->
	<div class='sub-menu'>
		<h5 class="text-uppercase sub-menu-text">cambiar de categoría</h5>
		<img class="sub-menu-icon"src="assets/images/magneti-marelli-item-1.png">
		<img class="sub-menu-icon"src="assets/images/magneti-marelli-item-2.png">
		<img class="sub-menu-icon"src="assets/images/magneti-marelli-item-1.png">
		<img class="sub-menu-icon" src="assets/images/magneti-marelli-item-2.png">
		<img class="sub-menu-flecha" src="assets/images/flecha-galerry-bottom.png">
	</div>
	<!--//submenu-->

	<div class='articulos-agregados'>
		<div class="titulo-agregados">
			<img class='carrito-sidebar-icon' src="assets/images/carrito-icon.png">
			<h3 class='text-uppercase carrito-sidebar-text'>ARTICULOS AGREGADOS</h3>
		</div>
	

		<!--Bloque-prodcotos-->
		<div class="bloque-agregados">

			<!--items-productos-->
			<div class="items-productos">

				<!--titulos-columnas-->
				<div class="titulos-columnas">

					<!--cantidad-->
					<ul class="columna-productos columna-cantidad">
						<h4>cantidad</h4>
					</ul>
					<!--cantidad-->

					<!--fecha-->
					<ul class="columna-productos columna-fecha">
						<h4>fecha</h4>
					</ul>
					<!--fecha-->

					<!--descripcion-->
					<ul class="columna-productos columna-descripcion">
						<h4>descripcion</h4>
					</ul>
					<!--descripcion-->

				</div>
				<!--titulos-columnas-->

				<!--cantidad-->
				<ul class="columna-productos columna-cantidad">
					<li><p>5</p></li>
					<li><p>3</p></li>
				</ul>
				<!--cantidad-->

				<!--fecha-->
				<ul class="columna-productos columna-fecha">
					<li class="text-uppercase">
						<div class="fecha">
							<p>22/03/15</p>
							<p>20.15</p>
						</div>
					</li>
					<li class="text-uppercase">
						<div class="fecha">
							<p>22/03/15</p>
							<p>20.15</p>
						</div>
					</li>
				</ul>
				<!--fecha-->

				<!--descripcion-->
				<ul class="columna-productos columna-descripcion">
					<li class="text-uppercase">
						<div class="descripcion">
							<p class="text-uppercase descripcion-fondo-gris">CODIGO: 151545</p>
							<p class="text-uppercase">BOMBA AGUA</p>
							<p class="text-uppercase">BOMBA AGUA DUCATO/NEW DAILY</p>
							<div class="cerrar-articulos-agregados cerrar-item"></div>
						</div>
					</li>
					<li class="text-uppercase">
						<div class="descripcion">
							<p class="text-uppercase descripcion-fondo-gris">CODIGO: 151545</p>
							<p class="text-uppercase descripcion-bold" >BOMBA AGUA</p>
							<p class="text-uppercase descripcion-bold">BOMBA AGUA DUCATO/NEW DAILY</p>
							<div class="cerrar-articulos-agregados cerrar-item"></div>
						</div>
					</li>
				</ul>
				<!--descripcion-->

			</div>
			<!--//items-productos-->

		</div>
		<!--//Bloque-prodcotos-->

		<button type="button" class="btn boton-confirmar">CONFIRMAR PEDIDO</button>

	</div>
	
</div>



<!--*** CONTENDO ***-->
<?php endblock() ?>

