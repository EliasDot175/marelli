<?php include 'layout.php' ?>


<?php startblock('contenido') ?>
<!--*** CONTENDO ***-->

<!--articulos agregados-->
<div class="productos col-xs-12 col-sm-3 col-md-3 ol-lg-3">

	<!--*** SUBMENU CATEGORIAS ***-->
	<?php include 'submenu-categorias.php' ?>
	<!--*** SUBMENU CATEGORIAS ***-->
	
	<!--Bloque-agregados-->
	<div class='articulos-agregados'>

		<!--titulo-->
		<div class="titulo-agregados">
			<img class='carrito-sidebar-icon' src="assets/images/carrito-icon.png">
			<h3 class='text-uppercase carrito-sidebar-text'>ARTICULOS AGREGADOS</h3>
		</div>
		<!--//titulo-->

		<!--Bloque-prodcotos-->
		<div class="bloque-agregados">
			<div class="items-productos">

				<!--titulos-columnas-->
				<ul class="titulos-columnas">
					<li class="columna-productos columna-cantidad">
						<h4>cantidad</h4>
					</li>
					<li class="columna-productos columna-fecha">
						<h4>fecha</h4>
					</li>
					<li class="columna-productos columna-descripcion">
						<h4>descripcion</h4>
					</li>
				</ul>
				<!--titulos-columnas-->

				<!--item-lista-->
				<ul class="item-lista">
					<li class="columna-productos columna-cantidad">
						<span><p>5</p></span>
					</li>
					<li class="columna-productos columna-fecha">
						<span class="text-uppercase">
							<div class="fecha">
								<p>22/03/15</p>
								<p>20.15</p>
							</div>
						</span>
					</li>
					<li class="columna-productos columna-descripcion">
						<span class="text-uppercase">
							<div class="descripcion">
								<p class="text-uppercase descripcion-fondo-gris">CODIGO: 151545</p>
								<p class="text-uppercase">BOMBA AGUA</p>
								<p class="text-uppercase">BOMBA AGUA DUCATO/NEW DAILY</p>
								<div class="cerrar-articulos-agregados cerrar-item"></div>
							</div>
						</span>
					</li>
				</ul>
				<!--//item-lista-->

				<!--item-lista-->
				<ul class="item-lista">
					<li class="columna-productos columna-cantidad">
						<span><p>5</p></span>
					</li>
					<li class="columna-productos columna-fecha">
						<span class="text-uppercase">
							<div class="fecha">
								<p>22/03/15</p>
								<p>20.15</p>
							</div>
						</span>
					</li>
					<li class="columna-productos columna-descripcion">
						<span class="text-uppercase">
							<div class="descripcion">
								<p class="text-uppercase descripcion-fondo-gris">CODIGO: 151545</p>
								<p class="text-uppercase">BOMBA AGUA</p>
								<p class="text-uppercase">BOMBA AGUA DUCATO/NEW DAILY</p>
								<div class="cerrar-articulos-agregados cerrar-item"></div>
							</div>
						</span>
					</li>
				</ul>
				<!--//item-lista-->

			</div>
		</div>
		<!--//Bloque-prodcotos-->

		<button type="button" class="btn boton-confirmar">CONFIRMAR PEDIDO</button>

	</div>
	<!--//Bloque-agregados-->


</div>
<!--//articulos agregados-->


<!--*** CONTENDO ***-->
<?php endblock() ?>

