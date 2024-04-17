<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ingreso</title>
	<link href="assets/img/inventory.jpeg" rel="icon" type="image/jpeg" />
	<?php include 'assets/includes/scripts.php'; ?>
</head>

<body class="cover">
	<div class="container-login">
		<p class="text-center" style="font-size: 80px;">
			<i class="zmdi zmdi-account-circle"></i>
		</p>
		<p class="text-center text-condensedLight">Ingresa con tu cuenta</p>
		<form action="ejecutar.php?c=Usuarios&a=verifica" method="POST">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="Usuario" name="Usuario">
				<label class="mdl-textfield__label" for="userName">Nombre de Usuario</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="password" id="Contrasena" name="Contrasena">
				<label class="mdl-textfield__label" for="pass">Contraseña</label>
			</div>
			<button id="SingIn" class="mdl-button mdl-js-button mdl-js-ripple-effect" style="color: #3F51B5; float:right;">
				Ingresar <i class="zmdi zmdi-mail-send"></i>
			</button>
			<br>
			<div class="d-flex justify-content-center links">
				<a href="ejecutar.php?c=Solicitud&a=indexRecupera" id="SingIn" class="mdl-button mdl-js-button mdl-js-ripple-effect" style="color: #3F51B5; float:left;">Olvidé contraseña</a>
			</div>
		</form>
	</div>
</body>

</html>