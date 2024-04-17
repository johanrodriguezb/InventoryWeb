<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reporte Categorias</title>
	<link rel="stylesheet" type="text/css" href="estilodelistas.css">
	<?php include 'assets/includes/scripts.php'; ?>
	<script type="text/javascript" src="js/main2.js"></script>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
	<script src="assets/js/bootstrap.min.js"></script>
</head>

<body>
	<!-- barra principal -->
	<div class="full-width navBar">
		<?php include 'assets/includes/barraprincipal.php';  ?>
	</div>
	<!-- barraLateral -->
	<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<?php include 'assets/includes/barralateral.php';  ?>
	</section>
	<!-- Contenido -->
	<section class="full-width pageContent">
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-account"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					Bienvenido <?php echo $_SESSION['usuari']; ?> a continuación encontrará una interfaz <br>
					sencilla para la busqueda de la categoria que desea y allí podrá observar <br>
					los activos disponibles en dicha categoria
				</p>
			</div>
		</section>
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<form method="POST" role="form" class="col-md-12 go-right" action="ajax/pdfs/pdfcate.php">
				<div class="mdl-tabs__panel is-active" id="tabNewAdmin">
					<div class="mdl-grid">
						<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
							<div class="full-width panel mdl-shadow--2dp">
								<div class="full-width panel-tittle bg-primary text-center tittles">
									Categoria De Activos
								</div>
							</div>
							<br>
							<section class="principal">
								<p>Ingrese la Categoria y Visualice la respuesta a su busqueda</p>
								<div class="formulario">
									<label for="caja_busqueda">Buscar</label>
									<input class="form-control" type="text" name="caja_busqueda" id="caja_busqueda"></input>
								</div>
								<br>
							</section>
							<br>
							<p>Seleccione la categoria anteriormente seleccionada</p>
							<select class="form-control" name="Categoria_idcategoria" id="Categoria_idcategoria">
								<?php
								foreach ($data['categorias'] as $categoria) {
								?>
									<option value="<?php echo $categoria["idcategoria"]; ?>"><?php echo $categoria["Nombrecategoria"] ?></option>
								<?php

								}
								?>
							</select>
							<br>
							<button class="btn btn-danger">
								Generar <i class="far fa-file-pdf"></i>
							</button>
							<br>
							<div class="col-md-12">
								<br>
								<div id="datos"></div>
							</div>

						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
</body>

</html>