<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listado de Prestamos</title>
	<link rel="stylesheet" type="text/css" href="estilodelistas.css">
	<?php include 'assets/includes/scripts.php'; ?>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script src="assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/estilo.css">
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
					sencilla con la lista de prestamos registrados en el sistema.
				</p>
			</div>
		</section>
		<?php
		if (isset($_GET['aviso'])) {
		?>
			<script>
				swal({
					type: 'success',
					title: "<?php echo $_GET['aviso'] ?> correctamente",
					text: "<?php echo $_GET['aviso'] ?>",
					icon: "success"
				});
			</script>
		<?php
		}
		?>
		<section class="full-width text-center" style="padding: 5px;">
			<div class="full-width panel mdl-shadow--2dp">
				<div class="full-width panel-tittle bg-primary text-center tittles">
					Prestamos Registrados
				</div>
			</div>
			<p class="text-left">
				<a href="ejecutar.php?c=Prestamos&a=nuevoP" class="btn-agregar">
					<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-adAdmin">
						<i class="zmdi zmdi-plus"></i>
					</button>
				</a>
			<div class="mdl-tooltip" for="btn-adAdmin">Agregar Prestamo</div>
			</p>

			<div class="table-responsive">
				<table class="tabla_datos col-md-12" style="padding-left:10px">
					<thead>
						<tr id='titulo'>
							<td>ID</td>
							<td>Serial del Activo</td>
							<td>Nombre de Solicitante</td>
							<td>Fecha Entrega</td>
							<td>Fecha Devolucion</td>
							<td>Estado</td>
							<td colspan="2">Acciones</td>
						</tr>
					</thead>

					<tbody>
						<?php foreach ($data["prestamos"] as $dato) {
							if ($dato["Estado"] == 1) {
								$txt_estado = 'Activo';
							}
							if ($dato["Estado"] == 0) {
								$txt_estado = 'Entregado';
							}
							echo "<tr>";
							echo "<td>" . $dato["idPrestamo"] . "</td>";
							echo "<td>" . $dato["Nserial"] . "</td>";
							echo "<td>" . $dato["Nombres"] . "</td>";
							echo "<td>" . $dato["Fecha_Entrega"] . "</td>";
							echo "<td>" . $dato["Fecha_Devolucion"] . "</td>";
							echo "<td>" . $txt_estado . "</td>";
							echo "<td><a href='ejecutar.php?c=Prestamos&a=modificarP&id=" . $dato["idPrestamo"] . "' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='ejecutar.php?c=Prestamos&a=eliminarP&id=" . $dato["idPrestamo"] . "' class='btn btn-success'>Entregado</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>

				</table>
			</div>
		</section>
	</section>
</body>

</html>