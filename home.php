<?php
session_start();
if (!$_SESSION['verifica']) {
	header("Location:index.php");
}
include 'config/database.php';
?>
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
	</section>
	<!-- Contenido -->
	<section class="full-width pageContent">
		<section class="full-width text-center" style="padding: 40px 0;">
			<h3 class="text-center tittles">CATEGORIAS</h3>
			<!-- Tiles -->
			<?php
			$sql = mysqli_query($con, "SELECT COUNT(Categoria_idcategoria) as mtotal from activos where Categoria_idcategoria = 1 AND Estado_idEstado = 1 ");
			$resultado1 = mysqli_num_rows($sql);
			if ($resultado1 > 0) {
				while ($monitores = mysqli_fetch_array($sql)) {
					$t_monitores = $monitores['mtotal'];
				}
			}
			?>
			<article class="full-width tile">
				<a href="ejecutar.php?c=Categorias&a=indexMonitores">
					<div class="tile-text">
						<span class="text-condensedLight">
							<?php echo $t_monitores; ?><br>
							<small>Monitores</small>
						</span>
					</div>
					<i class="zmdi zmdi-desktop-windows tile-icon"></i>
				</a>
			</article>
			<?php
			$sql2 = mysqli_query($con, "SELECT COUNT(Categoria_idcategoria) as mostotal from activos where Categoria_idcategoria = 2 AND Estado_idEstado = 1 ");
			$resultado2 = mysqli_num_rows($sql2);
			if ($resultado2 > 0) {
				while ($torres = mysqli_fetch_array($sql2)) {
					$t_torres = $torres['mostotal'];
				}
			}
			?>
			<article class="full-width tile">
				<a href="ejecutar.php?c=Categorias&a=indexTorres">
					<div class="tile-text">
						<span class="text-condensedLight">
							<?php echo $t_torres; ?><br>
							<small>Torres</small>
						</span>
					</div>
					<i class="zmdi zmdi-speaker tile-icon"></i>
				</a>
			</article>
			<?php
			$sql3 = mysqli_query($con, "SELECT COUNT(Categoria_idcategoria) as moustotal from activos where Categoria_idcategoria = 3 AND Estado_idEstado = 1 ");
			$resultado3 = mysqli_num_rows($sql3);
			if ($resultado3 > 0) {
				while ($mouses = mysqli_fetch_array($sql3)) {
					$t_mouses = $mouses['moustotal'];
				}
			}
			?>
			<article class="full-width tile">
				<a href="ejecutar.php?c=Categorias&a=indexMouses">
					<div class="tile-text">
						<span class="text-condensedLight">
							<?php echo $t_mouses; ?><br>
							<small>Mouses</small>
						</span>
					</div>
					<i class="zmdi zmdi-mouse tile-icon"></i>
				</a>
			</article>
			<?php
			$sql4 = mysqli_query($con, "SELECT COUNT(Categoria_idcategoria) as moustotal from activos where Categoria_idcategoria = 4 AND Estado_idEstado = 1 ");
			$resultado4 = mysqli_num_rows($sql4);
			if ($resultado4 > 0) {
				while ($teclados = mysqli_fetch_array($sql4)) {
					$t_teclados = $teclados['moustotal'];
				}
			}
			?>
			<article class="full-width tile">
				<a href="ejecutar.php?c=Categorias&a=indexTeclados">
					<div class="tile-text">
						<span class="text-condensedLight">
							<?php echo $t_teclados; ?><br>
							<small>Teclados</small>
						</span>
					</div>
					<i class="zmdi zmdi-keyboard tile-icon"></i>
				</a>
			</article>
			<?php
			$sql5 = mysqli_query($con, "SELECT COUNT(Categoria_idcategoria) as moustotal from activos where Categoria_idcategoria = 5 AND Estado_idEstado = 1 ");
			$resultado5 = mysqli_num_rows($sql5);
			if ($resultado5 > 0) {
				while ($cableado = mysqli_fetch_array($sql5)) {
					$t_cableado = $cableado['moustotal'];
				}
			}
			?>
			<article class="full-width tile">
				<a href="ejecutar.php?c=Categorias&a=indexCableado">
					<div class="tile-text">
						<span class="text-condensedLight">
							<?php echo $t_cableado; ?><br>
							<small>Cableado</small>
						</span>
					</div>
					<i class="zmdi zmdi-router tile-icon"></i>
				</a>
			</article>
			<?php
			$sql6 = mysqli_query($con, "SELECT COUNT(Categoria_idcategoria) as moustotal from activos where Categoria_idcategoria = 6 AND Estado_idEstado = 1 ");
			$resultado6 = mysqli_num_rows($sql6);
			if ($resultado6 > 0) {
				while ($accesorios = mysqli_fetch_array($sql6)) {
					$t_accesorios = $accesorios['moustotal'];
				}
			}
			?>
			<article class="full-width tile">
				<a href="ejecutar.php?c=Categorias&a=indexAccesorios">
					<div class="tile-text">
						<span class="text-condensedLight">
							<?php echo $t_accesorios; ?><br>
							<small>Accesorios</small>
						</span>
					</div>
					<i class="zmdi zmdi-usb tile-icon"></i>
				</a>
			</article>
		</section>
	</section>
</body>

</html>