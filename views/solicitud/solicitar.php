<?php
$Id     = $_GET["Id"];
$serial    = $_GET["seri"];
$nompro   = $_GET["nompro"];
$nomesta    = $_GET["nomesta"];

?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Solicitar Activos</title>
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
					Bienvenido señ@r Usuario a continuación encontrará una interfaz<br>
					sencilla para la solicitud de activos y sus repectivos datos.
				</p>
			</div>
		</section>
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__panel is-active" id="tabNewAdmin">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Solicitud de Activos
							</div>
							<div class="full-width panel-content">
								<form action="ejecutar.php?c=Solicitud&a=envia" method="POST">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
											<h5 class="text-condensedLight">Datos del Activo</h5>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="hidden" id="id" name="id" value="<?php echo $Id ?>">
												<label class="mdl-textfield__label" for=""></label>
												<span class="mdl-textfield__error"></span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="Serial" name="Serial" value="<?php echo $serial ?>">
												<label class="mdl-textfield__label" for="NameAdmin">Serial</label>
												<span class="mdl-textfield__error"></span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="proveedor" name="proveedor" value="<?php echo $nompro ?>">
												<label class="mdl-textfield__label" for="NameAdmin">Proveedor</label>
												<span class="mdl-textfield__error"></span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="estado" name="estado" value="<?php echo $nomesta ?>">
												<label class="mdl-textfield__label" for="NameAdmin">Estado</label>
												<span class="mdl-textfield__error"></span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
											<h5 class="text-condensedLight">Datos del Usuario</h5>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="Identificacion" name="Identificacion" value="<?php echo $_SESSION['ide']; ?>">
												<label class="mdl-textfield__label" for="DNIAdmin">Numero de identificacion</label>
												<span class="mdl-textfield__error">Numero Invalido</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="Nombres" name="Nombres" value="<?php echo $_SESSION['usuari']; ?>">
												<label class="mdl-textfield__label" for="NameAdmin">Nombres</label>
												<span class="mdl-textfield__error">Nombre Invalido</span>
											</div>


											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="tel" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="Ambiente" name="Ambiente" value="<?php echo $_SESSION['ambiente']; ?>">
												<label class="mdl-textfield__label" for="telefono">Ambiente</label>
												<span class="mdl-textfield__error">Número Invalido</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="email" id="Correo" name="Correo" value="<?php echo $_SESSION['correo']; ?>">
												<label class="mdl-textfield__label" for="emailAdmin">Correo</label>
												<span class="mdl-textfield__error">Correo Invalido</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" cols="30" rows="10" id="mensaje" name="mensaje">
												<label class="mdl-textfield__label" for="">Mensaje</label>
												<span class="mdl-textfield__error">Mensaje</span>
											</div>
											<p class="text-center">
												<input class="btn btn-success" type="submit" name="registrar" value="Solicita Activo">
											</p>
										</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>