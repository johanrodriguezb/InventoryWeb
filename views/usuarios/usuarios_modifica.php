<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actualizar Usuario</title>
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
					sencilla para la edición de usuarios en el sistema.
				</p>
			</div>
		</section>
		<div class="container">
			<a href="ejecutar.php?c=Usuarios&a=index"><i class="fas fa-arrow-left"><button id="guardar" name="guardar" type="submit" class="btn-cancelar"></button></i></a>
			<form id="nuevo" name="nuevo" method="POST" action="ejecutar.php?c=Usuarios&a=actualizar" autocomplete="off">
				<div class="mdl-tabs__panel is-active" id="tabNewAdmin">
					<div class="mdl-grid">
						<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
							<div class="full-width panel mdl-shadow--2dp">
								<div class="full-width panel-tittle bg-primary text-center tittles">
									Editar Usuario
								</div>
								<div class="full-width panel-content">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
											<h5 class="text-condensedLight">Datos Generales</h5>
											<input type="hidden" id="idUsuario" name="idUsuario" value="<?php echo $data["usuarios"]["idUsuario"]; ?>" />
											<div class="form-group">
												<label for="serial">Ubicación: </label>
												<select class="form-control" name="Sede_idSede" id="Sede_idSede">
													<option value="<?php echo $data["usuarios"]["Sede_idSede"]; ?>" selected><?php echo $data["usuarios"]["NombreSede"]; ?></option>
													<?php
													foreach ($data['sede'] as $sede) {
													?>
														<option value="<?php echo $sede["idSede"]; ?>"><?php echo $sede["NombreSede"] ?></option>
													<?php

													}
													?>
												</select>
											</div>
											<div class="form-group">
												<label for="serial">Rol: </label>
												<select class="form-control" name="Rol_idRol" id="Rol_idRol">
													<option value="<?php echo $data["usuarios"]["Rol_idRol"]; ?>" selected><?php echo $data["usuarios"]["NombreRol"]; ?></option>
													<?php
													foreach ($data['rol'] as $rol) {

													?>
														<option value="<?php echo $rol["idRol"]; ?>"><?php echo $rol["NombreRol"] ?></option>
													<?php

													}
													?>
												</select>
											</div>
											<div class="form-group">
												<label for="serial">Tipo de Identificación: </label>
												<select class="form-control" name="TipoIdentificacion_idTipoIdentificacion" id="TipoIdentificacion_idTipoIdentificacion">
													<option value="<?php echo $data["usuarios"]["TipoIdentificacion_idTipoIdentificacion"]; ?>" selected><?php echo $data["usuarios"]["NombreIdentificacion"]; ?></option>
													<?php
													foreach ($data['tipo'] as $ti) {

													?>
														<option value="<?php echo $ti["idTipoIdentificacion"]; ?>"><?php echo $ti["NombreIdentificacion"] ?></option>
													<?php

													}
													?>
												</select>
											</div>

											<div class="form-group">
												<label for="nidentificacion">Numero Identificacion</label>
												<input type="text" class="form-control" id="Identificacion" name="Identificacion" value="<?php echo $data["usuarios"]["Identificacion"] ?>" />
											</div>

											<div class="form-group">
												<label for="Nombres">Nombres</label>
												<input type="text" class="form-control" id="Nombres" name="Nombres" value="<?php echo $data["usuarios"]["Nombres"] ?>" />
											</div>

											<div class="form-group">
												<label for="Apellidos">Apellidos</label>
												<input type="text" class="form-control" id="Apellidos" name="Apellidos" value="<?php echo $data["usuarios"]["Apellidos"] ?>" />
											</div>


											<div class="form-group">
												<label for="Direccion">Direccion</label>
												<input type="text" class="form-control" id="Direccion" name="Direccion" value="<?php echo $data["usuarios"]["Direccion"] ?>" />
											</div>

											<div class="form-group">
												<label for="telefono">Telefono</label>
												<input type="text" class="form-control" id="Telefono" name="Telefono" value="<?php echo $data["usuarios"]["Telefono"] ?>" />
											</div>
										</div>
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
											<h5 class="text-condensedLight">Datos de Cuenta</h5>
											<div class="form-group">
												<label for="correo">Correo</label>
												<input type="text" class="form-control" id="Correo" name="Correo" value="<?php echo $data["usuarios"]["Correo"] ?>" />
											</div>

											<div class="form-group">
												<label for="usuario">Usuario</label>
												<input type="text" class="form-control" id="Usuario" name="Usuario" value="<?php echo $data["usuarios"]["Usuario"] ?>" />
											</div>

											<div class="form-group">
												<label for="tusuario">Ambiente</label>
												<input type="text" class="form-control" id="Ambiente" name="Ambiente" value="<?php echo $data["usuarios"]["Ambiente"] ?>" />
											</div>

											<button id="guardar" name="guardar" type="submit" class="btn btn-success">Guardar Cambios</button>
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