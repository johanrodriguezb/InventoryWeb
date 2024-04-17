<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reporte por fechas</title>
	<link rel="stylesheet" type="text/css" href="estilodelistas.css">
	<?php include 'assets/includes/scripts.php'; ?>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
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
					sencilla para la busqueda de ingreso de activos al sistema <br>
					en el mes que desea y allí podrá observar <br>
					los activos registrados en dicho mes
				</p>
			</div>
		</section>
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<form method="POST" role="form" class="col-md-12 go-right" action="ajax/pdfs/pdffecha.php">
				<div class="mdl-tabs__panel is-active" id="tabNewAdmin">
					<div class="mdl-grid">
						<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
							<div class="full-width panel mdl-shadow--2dp">
								<div class="full-width panel-tittle bg-primary text-center tittles">
									Fecha De Ingreso De Activos
								</div>
							</div>
							<p class="iniciale">Ingrese la fecha inicial</p>
							<input class="form-control" type="date" id="inicial" name="inicial" />

							<p class="finale">Ingrese la fecha final</p>
							<input class="form-control" type="date" id="final" name="final" />
							<br>
							<button class="btn btn-danger">
								Generar <i class="far fa-file-pdf"></i>
							</button>
							<div id="datos"></div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
</body>

</html>