<?php include 'layout.php' ?>


<?php startblock('contenido') ?>
<!--*** CONTENDO ***-->

<!--listado-productos-->
<div class="productos col-xs-12 col-sm-3 col-md-3 ol-lg-3">

	<!--*** SUBMENU CATEGORIAS ***-->
	<?php include 'submenu-categorias.php' ?>
	<!--*** SUBMENU CATEGORIAS ***-->

	<!--titulo-->
	<div class="titulo-prod">
		<h2 class='text-uppercase'>Amortigudores cofap</h2>
	</div>
	<!--//titulo-->
	
	<!--descargar-->
	<div class="botones-descargar">
		<button type="button" class="btn">
			DESCARGAR LISTADO EN EXCEL
			<img src="assets/images/excel-icon.png">
		</button>
		<button type="button" class="btn">
			DESCARGAR SOLICITUD DE EXCEL
			<img src="assets/images/excel-icon.png">
		</button>
	</div>
	<!--descargar-->

	<!--Bloque-productos-->
	<div class="bloque-productos">
		<div class="items-productos">


			<!--titulos-columnas-->
			<div class="titulos-columnas">
				<li class="columna-productos columna-codigo">
					<div class="buscar-codigo">
						<input class="buscar-codigo-input" type="text" name="buscar" placeholder="CODIGO">
						<icon class="buscar-codigo-glyphicon glyphicon glyphicon-search"></icon>
					</div>
				</li>
				<li class="columna-productos columna-categoria">
					<h4>categoria</h4>
				</li>
				<li class="columna-productos columna-descripcion">
					<h4>descripcion</h4>
				</li>
				<li class="columna-productos columna-lote">
					<h4>lote</h4>
				</li>
				<li class="columna-productos columna-cantidad">
					<h4>cantidad</h4>
				</li>
				<li class="columna-productos columna-agregar">
					<h4>agregar</h4>
				</li>
			</div>
			<!--titulos-columnas-->


			<!--item-lista-->
			<ul class="item-lista">
				<li class="columna-productos columna-codigo">
					<span class="text-uppercase"><p>5423589</p></span>
				</li>
				<li class="columna-productos columna-categoria">
					<span class="text-uppercase"><p>Bombas depresoras</p></span>
				</li>
				<li class="columna-productos columna-descripcion">
					<span class="text-uppercase"><p>BOMBA AGUA DUCATO/NEW DAILY</p></span>
				</li>
				<li class="columna-productos columna-lote">
					<span class="text-uppercase"><p>x1</p></span>
				</li>
				<li class="columna-productos columna-cantidad">
					<span class="input-cantidad">
						<input id="ok-1" class="cantidad" type="number">
					</span>
				</li>
				<li class="columna-productos columna-agregar">
					<span class="text-uppercase">
						<div id="boton-ok-1" class="ok-1 ok ok-inactivo"></div>
					</span>
				</li>
			</ul>
			<!--//item-lista-->


			<!--item-lista-->
			<ul class="item-lista">
				<li class="columna-productos columna-codigo">
					<span class="text-uppercase"><p>5423589</p></span>
				</li>
				<li class="columna-productos columna-categoria">
					<span class="text-uppercase"><p>Bombas depresoras</p></span>
				</li>
				<li class="columna-productos columna-descripcion">
					<span class="text-uppercase"><p>BOMBA AGUA DUCATO/NEW DAILY</p></span>
				</li>
				<li class="columna-productos columna-lote">
					<span class="text-uppercase"><p>x1</p></span>
				</li>
				<li class="columna-productos columna-cantidad">
					<span class="input-cantidad">
						<input id="ok-1" class="cantidad" type="number">
					</span>
				</li>
				<li class="columna-productos columna-agregar">
					<span class="text-uppercase">
						<div id="boton-ok-1" class="ok-1 ok ok-inactivo"></div>
					</span>
				</li>
			</ul>
			<!--//item-lista-->

		</div>
	</div>
	<!--//Bloque-productos-->



</div>
<!--//listado-productos-->


<!--*** CONTENDO ***-->
<?php endblock() ?>

