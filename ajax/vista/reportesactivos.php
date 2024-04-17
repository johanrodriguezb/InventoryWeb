<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pagina Principial</title>
	<?php include 'assets/includes/scripts.php'; ?>

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
		<?php include 'config/sesiones.php';  ?>
	</section>
	<!-- Contenido -->
	<section class="full-width pageContent">
		<section class="full-width text-center" style="padding: 80px 0;">
			<h3 class="text-center tittles">REPORTES ACTIVOS</h3>
			<!-- Tiles -->
			<article class="full-width tile">
				<a href="ejecutar.php?c=Reportes&a=indexReporteCategorias">
					<div class="tile-text">
						<span class="text-condensedLight">
							<br>
							<small> Por Categoria</small>
						</span>
					</div>
					<i class="zmdi zmdi-filter-list tile-icon"></i>
				</a>
			</article>
			<article class="full-width tile">
				<a href="ejecutar.php?c=Reportes&a=indexReporteEstado">
					<div class="tile-text">
						<span class="text-condensedLight">
							<br>
							<small> Por Estado</small>
						</span>
					</div>
					<i class="zmdi zmdi-traffic tile-icon"></i>
				</a>
			</article>
			<article class="full-width tile">
				<a href="ejecutar.php?c=Reportes&a=indexReporteFechas">
					<div class="tile-text">
						<span class="text-condensedLight">
							<br>
							<small>Por Fechas</small>
						</span>
					</div>
					<i class="zmdi zmdi-calendar tile-icon"></i>
				</a>
			</article>
			</article>
			<article class="full-width tile">
				<a href="ejecutar.php?c=Reportes&a=indexReporteAmbiente">
					<div class="tile-text">
						<span class="text-condensedLight">
							<br>
							<small>Por Ambiente</small>
						</span>
					</div>
					<i class="zmdi zmdi-my-location tile-icon"></i>
				</a>
			</article>
		</section>
	</section>
</body>

</html>