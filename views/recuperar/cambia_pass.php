<html>

<head>
	<title>Cambiar Contraseña</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include('assets/includes/scripts.php') ?>

</head>

<body class="cover" background="assets/img/fontLogin.jpg">
	<div class="container-login">
		<p class="text-center" style="font-size: 80px;">
			<i class="zmdi zmdi-account-circle"></i>
		</p>
		<p class="text-center text-condensedLight">Cambia Contraseña</p>
		<form id="loginform" class="form-horizontal" role="form" action="ejecutar.php?c=Solicitud&a=cambiarPass" method="POST" autocomplete="off">

			<input type="hidden" id="user_id" name="user_id" value="<?php echo $_GET['user_id']; ?>" />

			<input type="hidden" id="token" name="token" value="<?php echo $_GET['token']; ?>" />
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="password" name="password">
				<label class="mdl-textfield__label" for="userName">Nueva Contraseña</label>
			</div>

			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="con_password" name="con_password">
				<label class="mdl-textfield__label" for="userName">Confirmar Contraseña</label>
			</div>

			<div style="margin-top:10px" class="form-group">
				<div class="col-sm-12 controls">
					<button id="btn-login" type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect" style="color: #3F51B5; float:right;">Actualizar</a>
				</div>
			</div>
		</form>
	</div>
</body>

</html>