<?php

class Usuarios_model
{

	private $db;
	private $usuarios;

	public function __construct()
	{
		$this->db = Conectar::conexion();
		$this->usuarios = array();
	}

	public function redireccion_admin($alerta, $mensaje)
	{
		header("Location:ejecutar.php?c=Usuarios&a=index&aviso=$mensaje&ca=$alerta");
	}

	public function redireccion_adminin($alerta, $mensaje)
	{
		header("Location:ejecutar.php?c=Usuarios&a=indexin&aviso=$mensaje&ca=$alerta");
	}

	public function get_usuarios()
	{
		$sql = "SELECT idUsuario, NombreSede,NombreRol,NombreIdentificacion,Identificacion ,Nombres,Apellidos,Direccion,Telefono,Correo,Usuario,Ambiente,Fecha_Registro From usuarios INNER JOIN rol ON Rol_idRol = idRol INNER JOIN tipoidentificacion ON TipoIdentificacion_idTipoIdentificacion = idTipoidentificacion INNER JOIN sede ON Sede_idSede = idSede WHERE Estado = 1 ORDER BY idUsuario ASC";
		$resultado = $this->db->query($sql);
		$sql = null;
		while ($row = $resultado->fetch_assoc()) {
			$this->usuarios[] = $row;
		}
		return $this->usuarios;
	}

	public function get_usuariosin()
	{
		$sql = "SELECT idUsuario, NombreSede,NombreRol,NombreIdentificacion,Identificacion ,Nombres,Apellidos,Direccion,Telefono,Correo,Usuario,Ambiente,Fecha_Registro From usuarios INNER JOIN rol ON Rol_idRol = idRol INNER JOIN tipoidentificacion ON TipoIdentificacion_idTipoIdentificacion = idTipoidentificacion INNER JOIN sede ON Sede_idSede = idSede WHERE Estado = 0 ORDER BY idUsuario ";
		$resultado = $this->db->query($sql);
		$sql = null;
		while ($row = $resultado->fetch_assoc()) {
			$this->usuarios[] = $row;
		}
		return $this->usuarios;
	}


	public function get_sede()
	{
		$sql = "SELECT * FROM sede";
		$resultado = $this->db->query($sql);
		while ($row = $resultado->fetch_assoc()) {
			$this->usuarios[] = $row;
		}
		return $this->usuarios;
	}

	public function get_rol()
	{
		$sql = "SELECT * FROM rol";
		$resultado = $this->db->query($sql);
		while ($row = $resultado->fetch_assoc()) {
			$this->usuarios[] = $row;
		}
		return $this->usuarios;
	}


	public function get_tipo()
	{
		$sql = "SELECT * FROM tipoidentificacion";
		$resultado = $this->db->query($sql);
		while ($row = $resultado->fetch_assoc()) {
			$this->usuarios[] = $row;
		}
		return $this->usuarios;
	}


	public function insertar($sede, $rol, $ti, $nidentificacion, $nombre, $apellido, $direccion, $telefono, $correo, $usuario, $contrasena, $con_contra, $ambiente, $fecha_registro)
	{

		$consulta = $this->db->query("SELECT * FROM usuarios Where Identificacion = '$nidentificacion' ");
		$resultado = mysqli_fetch_array($consulta);
		$consulta = null;

		if (
			empty($sede) || empty($rol) || empty($ti) || empty($nidentificacion) || empty($nombre) || empty($apellido)
			|| empty($direccion) || empty($telefono) || empty($correo) || empty($usuario) || empty($contrasena) || empty($con_contra) || empty($ambiente)
		) {
			echo '<script>
                alert("Todos los campos son obligatorios"); 
                window.history.go(-1);
                </script>';
		} else {
			function validaPassword($var1, $var2)
			{
				if (strcmp($var1, $var2) !== 0) {
					return false;
				} else {
					return true;
				}
			}
			if (validaPassword($contrasena, $con_contra)) {
				if ($resultado > 0) {
					echo '<script>
						alert("Usuario Ya Registrado");
						window.history.go(-1);
						</script>';
				} else {
					$contrasena = $_POST['Contrasena'];
					date_default_timezone_set("america/bogota");
					$fecha_registro  = date('Y-m-d H:i:s');
					$pass_cifrada = password_hash($contrasena, PASSWORD_DEFAULT);
					$resultado = $this->db->query("INSERT INTO usuarios(Sede_idSede,Rol_idRol,TipoIdentificacion_idTipoIdentificacion,Identificacion,Nombres,Apellidos,Direccion,Telefono,Correo,Usuario,Contrasena,Ambiente,Fecha_registro) VALUES ($sede,$rol,$ti,$nidentificacion,'$nombre','$apellido','$direccion',$telefono,'$correo','$usuario','$pass_cifrada',$ambiente,'$fecha_registro')");
					//echo "INSERT INTO usuarios(Sede_idSede,Rol_idRol,TipoIdentificacion_idTipoIdentificacion,Identificacion,Nombres,Apellidos,Direccion,Telefono,Correo,Usuario,Contrasena,Ambiente,Fecha_registro) VALUES ($sede,$rol,$ti,$nidentificacion,'$nombre','$apellido','$direccion',$telefono,'$correo','$usuario','$pass_cifrada',$ambiente,'$fecha_registro')";
					$alerta = 'success';
					$mensaje = 'Usuario Registrado';
					$this->redireccion_admin($alerta, $mensaje);
				}
			} else {
				echo '<script>
					alert("Las Contraseñas No Coinciden");
					window.history.go(-1);
					</script>';
			}
		}
	}

	public function insertarAprendiz($sede, $ti, $nidentificacion, $nombre, $apellido, $direccion, $telefono, $correo, $usuario, $contrasena, $con_contra, $ambiente, $fecha_registro)
	{

		$consulta = $this->db->query("SELECT * FROM usuarios Where Identificacion = '$nidentificacion' ");
		$resultado = mysqli_fetch_array($consulta);
		$consulta = null;

		if (
			empty($sede) || empty($rol) || empty($ti) || empty($nidentificacion) || empty($nombre) || empty($apellido)
			|| empty($direccion) || empty($telefono) || empty($correo) || empty($usuario) || empty($contrasena) || empty($con_contra) || empty($ambiente)
		) {
			echo '<script>
                alert("Todos los campos son obligatorios"); 
                window.history.go(-1);
                </script>';
		} else {
			include 'funcs.php';
			if (validaPassword($contrasena, $con_contra)) {
				if ($resultado > 0) {
					echo '<script>
						alert("Usuario Ya Registrado");
						window.history.go(-1);
						</script>';
				} else {
					$contrasena = $_POST['Contrasena'];
					date_default_timezone_set("america/bogota");
					$fecha_registro  = date('Y-m-d H:i:s');
					$pass_cifrada = password_hash($contrasena, PASSWORD_DEFAULT);
					$resultado = $this->db->query("INSERT INTO usuarios(Sede_idSede,Rol_idRol,TipoIdentificacion_idTipoIdentificacion,Identificacion,Nombres,Apellidos,Direccion,Telefono,Correo,Usuario,Contrasena,Ambiente,Fecha_registro) VALUES ($sede,4,$ti,$nidentificacion,'$nombre','$apellido','$direccion',$telefono,'$correo','$usuario','$pass_cifrada',$ambiente,'$fecha_registro')");
					//echo "INSERT INTO usuarios(Sede_idSede,Rol_idRol,TipoIdentificacion_idTipoIdentificacion,Identificacion,Nombres,Apellidos,Direccion,Telefono,Correo,Usuario,Contrasena,Ambiente,Fecha_registro) VALUES ($sede,4,$ti,$nidentificacion,'$nombre','$apellido','$direccion',$telefono,'$correo','$usuario','$pass_cifrada',$ambiente,'$fecha_registro')";
				}
			} else {
				echo '<script>
						alert("Las Contraseñas No Coinciden");
						window.history.go(-1);
						</script>';
			}
		}
	}

	public function ingresa($usuario, $contrasena)
	{
		try {
			$contador = 0;

			$usuario = htmlentities(addslashes($_POST["Usuario"]));
			$contrasena = htmlentities(addslashes($_POST["Contrasena"]));

			$sql = "SELECT * FROM usuarios Where Usuario = '$usuario' ";
			$resultado = $this->db->query($sql);
			while ($row = $resultado->fetch_assoc()) {

				if (password_verify($contrasena, $row['Contrasena'])) {
					$contador++;
				}
			}

			if ($contador > 0) {
				session_start();
				$sql = "SELECT idUsuario, NombreSede,NombreRol,NombreIdentificacion,Identificacion ,Nombres,Apellidos,Direccion,Telefono,Correo,Usuario,Ambiente,Fecha_Registro From usuarios INNER JOIN rol ON Rol_idRol = idRol INNER JOIN tipoidentificacion ON TipoIdentificacion_idTipoIdentificacion = idTipoidentificacion INNER JOIN sede ON Sede_idSede = idSede WHERE Usuario= '$usuario'";
				$resultado = $this->db->query($sql);
				$fila = $resultado->fetch_assoc();
				$_SESSION['usuari'] = $fila['Nombres'];
				$_SESSION['rol'] = $fila['NombreRol'];
				$_SESSION['nom'] = $fila['Usuario'];
				$_SESSION['ide'] = $fila['Identificacion'];
				$_SESSION['ambiente'] = $fila['Ambiente'];
				$_SESSION['correo'] = $fila['Correo'];
				$_SESSION['verifica'] = true;
				header("Location:home.php");
			} else {
				echo '<script>
				      alert("La contraseña o correo de Usuario no son correctos");
				      window.history.go(-1);
				      </script>';
			}
		} catch (BadFunctionCallException  $e) {
			echo $e->getMessage();
		}
	}

	public function modificar($id, $sede, $rol, $ti, $nidentificacion, $nombre, $apellido, $direccion, $telefono, $correo, $usuario, $ambiente)
	{

		$resultado = $this->db->query("UPDATE usuarios SET Sede_idSede=$sede, Rol_idRol=$rol, TipoIdentificacion_idTipoIdentificacion=$ti, Identificacion=$nidentificacion, Nombres='$nombre', Apellidos='$apellido', Direccion='$direccion', Telefono=$telefono, Correo='$correo', Usuario='$usuario', Ambiente=$ambiente WHERE idUsuario = '$id'");
		$resultado = null;
		$alerta = 'alert-success';
		$mensaje = 'Usuario Modificado';
		$this->redireccion_admin($alerta, $mensaje);
	}

	public function eliminar($id)
	{
		$resultado = $this->db->query("UPDATE usuarios SET Estado = 0 WHERE idUsuario = '$id'");
		$resultado = null;
		$alerta = 'alert-success';
		$mensaje = 'Usuario Inhabilitado';
		$this->redireccion_admin($alerta, $mensaje);
	}

	public function get_usuario($id)
	{
		$sql = "SELECT idUsuario,Sede_idSede,TipoIdentificacion_idTipoIdentificacion,Rol_idRol, NombreSede,NombreRol,NombreIdentificacion,Identificacion ,Nombres,Apellidos,Direccion,Telefono,Correo,Usuario,Ambiente,Fecha_Registro From usuarios INNER JOIN rol ON Rol_idRol = idRol INNER JOIN tipoidentificacion ON TipoIdentificacion_idTipoIdentificacion = idTipoidentificacion INNER JOIN sede ON Sede_idSede = idSede WHERE idUsuario='$id' LIMIT 1";
		$resultado = $this->db->query($sql);
		$sql = null;
		$row = $resultado->fetch_assoc();
		$resultado = null;

		return $row;
	}

	public function habilitar($id)
	{
		$resultado = $this->db->query("UPDATE usuarios SET Estado = 1 WHERE idUsuario = '$id'");
		$resultado = null;
		$alerta = 'alert-success';
		$mensaje = 'Usuario Habilitado';
		$this->redireccion_adminin($alerta, $mensaje);
	}
}
