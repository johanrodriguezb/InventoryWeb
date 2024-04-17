<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nuevo Prestamo</title>
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
					sencilla para el registro de Prestamos en el sistema.
				</p>
			</div>
		</section>
		<div class="container">
			<a href="ejecutar.php?c=Prestamos&a=indexP"><i class="fas fa-arrow-left"><button id="guardar" name="guardar" type="submit" class="btn-cancelar"></button></i></a>
			<form id="nuevo" name="nuevo" method="POST" action="ejecutar.php?c=Prestamos&a=guardaP" autocomplete="off">
				<div class="mdl-tabs__panel is-active" id="tabNewAdmin">
					<div class="mdl-grid">
						<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
							<div class="full-width panel mdl-shadow--2dp">
								<div class="full-width panel-tittle bg-primary text-center tittles">
									Nuevo Prestamo
								</div>
								<div class="full-width panel-content">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
											<h5 class="text-condensedLight">Datos Generales</h5>

											<div class="form-group">
												<label for="inicial">Ingrese el serial del equipo</label>
												<input type="text" class="form-control" id="Activos_idActivo" name="Activos_idActivo" />
											</div>

											<div class="form-group">
												<label for="inicial">Ingrese la cedula del solicitante</label>
												<input type="text" class="form-control" id="Usuarios_idUsuario" name="Usuarios_idUsuario" />
											</div>

											<div class="form-group">
												<label for="inicial">Fecha Entrega</label>
												<input type="date" class="form-control" id="inicial" name="inicial" />
											</div>

											<div class="form-group">
												<label for="final">Fecha Devolucion</label>
												<input type="date" class="form-control" id="final" name="final" />
											</div>

											<button id="guardar" name="guardar" type="submit" class="btn btn-success">Guardar</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
</body>

</html>