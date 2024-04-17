<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nuevo Activo</title>
	<link rel="stylesheet" type="text/css" href="estilodelistas.css">
	<?php include 'assets/includes/scripts.php'; ?>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/funciones.js"></script>
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
					sencilla para la edición de Activos
				</p>
			</div>
		</section>
		<div class="container">
			<form id="nuevo" name="nuevo" method="POST" action="ejecutar.php?c=Activos&a=actualizarA" autocomplete="off" enctype="multipart/form-data">
				<a href="ejecutar.php?c=Activos&a=indexA"><i class="fas fa-arrow-left"><button id="guardar" name="guardar" type="submit" class="btn-cancelar"></button></i></a>
				<div class="mdl-tabs__panel is-active" id="tabNewAdmin">
					<div class="mdl-grid">
						<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
							<div class="full-width panel mdl-shadow--2dp">
								<div class="full-width panel-tittle bg-primary text-center tittles">
									Editar Activo
								</div>
								<div class="full-width panel-content">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
											<h5 class="text-condensedLight">Datos Generales</h5>
											<input type="hidden" id="idActivo" name="idActivo" value="<?php echo $data["activos"]["idActivo"]; ?>" />
											<div class="form-group">
												<label for="serial">Ubicación: </label>
												<select class="form-control" name="Sede_idSede" id="sede">
													<option value="<?php echo $data["activos"]["Sede_idSede"]; ?>" selected><?php echo $data["activos"]["NombreSede"]; ?></option>
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
												<label for="">Seleccione un Proveedor</label>
												<label for="serial">Proveedor: </label>
												<select class="form-control" name="Proveedor_idProveedor" id="Proveedor_idProveedor">
													<option value="<?php echo $data["activos"]["Proveedor_idProveedor"]; ?>" selected><?php echo $data["activos"]["NombreProveedor"]; ?></option>
													<?php
													foreach ($data['proveedor'] as $proveedor) {
													?>
														<option value="<?php echo $proveedor["idProveedor"]; ?>"><?php echo $proveedor["NombreProveedor"] ?></option>
													<?php

													}
													?>
												</select>
											</div>
											<div class="form-group">
												<label for="">Seleccione una categoria</label>
												<label for="serial">Categoria: </label>
												<select class="form-control" name="Categoria_idcategoria" id="Categoria_idcategoria">
													<option value="<?php echo $data["activos"]["Categoria_idcategoria"]; ?>" selected><?php echo $data["activos"]["NombreCategoria"]; ?></option>
													<?php
													foreach ($data['categorias'] as $categorias) {
													?>
														<option value="<?php echo $categorias["idcategoria"]; ?>"><?php echo $categorias["Nombrecategoria"] ?></option>
													<?php

													}
													?>
												</select>
											</div>
											<div class="form-group">
												<label for="">Seleccione un Estado</label>
												<label for="serial">Estado: </label>
												<select class="form-control" name="Estado_idEstado" id="Estado_idEstado">
													<option value="<?php echo $data["activos"]["Estado_idEstado"]; ?>" selected><?php echo $data["activos"]["NombreEstado"]; ?></option>
													<?php
													foreach ($data['estados'] as $estados) {
													?>
														<option value="<?php echo $estados["idEstado"]; ?>"><?php echo $estados["NombreEstado"] ?></option>
													<?php

													}
													?>
												</select>
											</div>

											<div class="form-group">
												<label for="serial">Serial</label>
												<input type="text" class="form-control" id="Nserial" name="Nserial" value="<?php echo $data["activos"]["Nserial"] ?>" />
											</div>
										</div>
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
											<h5 class="text-condensedLight">Descripción</h5>
											<div class="form-group">
												<label for="nombre">Nombre Activo</label>
												<input type="text" class="form-control" id="NombreActivo" name="NombreActivo" value="<?php echo $data["activos"]["NombreActivo"] ?>" />
											</div>

											<div class="form-group">
												<label for="precio">Precio</label>
												<input type="text" class="form-control" id="Precio" name="Precio" value="<?php echo $data["activos"]["Precio"] ?>" />
											</div>

											<div class="form-group">
												<label for="cantidad">Cantidad</label>
												<input type="text" class="form-control" id="Cantidad" name="Cantidad" value="<?php echo $data["activos"]["Cantidad"] ?>" />
											</div>

											<div class="form-group">
												<label for="cantidad">Ambiente</label>
												<input type="text" class="form-control" id="Ambiente" name="Ambiente" value="<?php echo $data["activos"]["Ambiente"] ?>" />
											</div>

											<input type="hidden" name="id" value="<?php echo $data["activos"]["idActivo"] ?>" />
											<input type="hidden" id="foto_actual" name="foto_actual" value="<?php echo $data["activos"]["Imagen"]; ?>" />
											<input type="hidden" id="foto_remove" name="foto_remove" value="<?php echo $data["activos"]["Imagen"]; ?>" />

											<?php
											$foto = '';
											$classRemove = 'notBlock';
											if ($data["activos"]["Imagen"] != '') {
												$classRemove = '';
												$foto = '<img id="img" src="imagenes/' . $data["activos"]["Imagen"] . '"/>';
											}
											?>
											<div class="photo">
												<label for="foto">Foto</label>
												<div class="prevPhoto">
													<span class="delPhoto <?php echo $classRemove; ?>">X</span>
													<label for="foto"></label>
													<?php echo $foto; ?>
												</div>
												<div class="upimg">
													<input type="file" name="foto" id="foto">
												</div>
												<div id="form_alert"></div>
											</div>


											<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
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