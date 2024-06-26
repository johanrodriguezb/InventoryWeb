<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listado de Usuarios</title>
	<link rel="stylesheet" type="text/css" href="css/estilodelistas.css">
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
	<section class="full-width pageContent p-1">
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-account"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					Bienvenido <?php echo $_SESSION['usuari']; ?> a continuación encontrará una interfaz <br>
					sencilla con la lista de usuarios registrados en el sistema.
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

			<br>
			<div class="full-width panel mdl-shadow--2dp">
				<div class="full-width panel-tittle bg-primary text-center tittles">
					Usuarios Registrados
				</div>
			</div>
			<p class="text-left">
				<a href="ejecutar.php?c=Usuarios&a=nuevo" class="btn-agregar">
					<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-adAdmin">
						<i class="zmdi zmdi-plus"></i>
					</button>
				</a>
			<div class="mdl-tooltip" for="btn-adAdmin">Agregar Usuario</div>
			</p>

			<div class="table-responsive">
				<table class="tabla_datos">
					<thead>
						<tr id='titulo'>
							<td>ID</td>
							<td>Identificacion</td>
							<td>Sede</td>
							<td>Nombres</td>
							<td>Apellidos</td>
							<td>Rol</td>
							<td>Tipo Identificación</td>
							<td>Direccion</td>
							<td>Telefono</td>
							<td>Correo</td>
							<td>Usuario</td>
							<td>Ambiente</td>
							<td colspan="2">Acciones</td>
						</tr>
					</thead>

					<tbody>
						<?php foreach ($data["usuarios"] as $dato) {
							echo "<tr>";
							echo "<td>" . $dato["idUsuario"] . "</td>";
							echo "<td>" . $dato["Identificacion"] . "</td>";
							echo "<td>" . $dato["NombreSede"] . "</td>";
							echo "<td>" . $dato["Nombres"] . "</td>";
							echo "<td>" . $dato["Apellidos"] . "</td>";
							echo "<td>" . $dato["NombreRol"] . "</td>";
							echo "<td>" . $dato["NombreIdentificacion"] . "</td>";
							echo "<td>" . $dato["Direccion"] . "</td>";
							echo "<td>" . $dato["Telefono"] . "</td>";
							echo "<td>" . $dato["Correo"] . "</td>";
							echo "<td>" . $dato["Usuario"] . "</td>";
							echo "<td>" . $dato["Ambiente"] . "</td>";
							echo "<td><a href='ejecutar.php?c=Usuarios&a=modificar&id=" . $dato["idUsuario"] . "' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='ejecutar.php?c=Usuarios&a=eliminar&id=" . $dato["idUsuario"] . "' class='btn btn-danger'>Inhabilitar</a></td>";
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