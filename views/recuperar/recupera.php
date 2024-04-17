<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include('assets/includes/scripts.php') ?>
  <title>Recuperar Contraseña</title>
</head>

<body class="cover" background="assets/img/fontLogin.jpg">
  <div class="container-login">
    <p class="text-center" style="font-size: 80px;">
      <i class="zmdi zmdi-account-circle"></i>
    </p>
    <p class="text-center text-condensedLight">Ingresa tu correo registrado</p>
    <form action="ejecutar.php?c=Solicitud&a=enviarT" method="POST">
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="email" id="Correo" name="Correo">
        <label class="mdl-textfield__label" for="userName">Correo Electronico</label>
      </div>
      <button id="SingIn" class="mdl-button mdl-js-button mdl-js-ripple-effect" style="color: #3F51B5; float:right;">
        Enviar <i class="zmdi zmdi-mail-send"></i>
      </button>
    </form>
    <a href="index.php">
      <button id="SingIn" class="mdl-button mdl-js-button mdl-js-ripple-effect" style="color: #3F51B5; float:right;">
        inicio
      </button>
    </a>
  </div>
</body>

</html>