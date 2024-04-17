<?php

class Prestamos_model
{

	private $db;
	private $prestamos;

	public function __construct()
	{
		$this->db = Conectar::conexion();
		$this->prestamos = array();
	}


	public function redireccion_adminP($alerta, $mensaje)
	{
		header("Location:ejecutar.php?c=Prestamos&a=indexP&aviso=$mensaje&ca=$alerta");
	}

	public function get_prestamos()
	{
		$sql = "SELECT idPrestamo,Nombres,Nserial,NombreActivo,Fecha_Entrega,Fecha_Devolucion, a.Estado FROM prestamo a INNER JOIN activos b ON a.Activos_idActivo = b.idActivo INNER JOIN usuarios c ON a.Usuarios_idUsuario = c.idUsuario ORDER BY idPrestamo ASC";
		$resultado = $this->db->query($sql);
		$sql = null;
		while ($row = $resultado->fetch_assoc()) {
			$this->prestamos[] = $row;
		}
		return $this->prestamos;
	}

	public function insertar($activo, $usuario, $fechae, $fechad)
	{
		$sql = "SELECT * FROM activos Where Nserial = '$activo' ";
		$resultado = $this->db->query($sql);
		while ($row = $resultado->fetch_assoc()) {
			$id = $row['idActivo'];
		}

		$sql2 = "SELECT * FROM usuarios Where Identificacion = '$usuario' and estado = 1";
		$resultado2 = $this->db->query($sql2);
		while ($row2 = $resultado2->fetch_assoc()) {
			$id_usuario = $row2['idUsuario'];
		}

		if ($id_usuario == '') {
			echo '<script>
				alert("Usuario Solicitando No existente o invalido");
				window.history.go(-1);
				</script>';
		} else {
			$consulta = $this->db->query("SELECT * FROM prestamo Where Activos_idActivo = '$id' ");
			$resultado = mysqli_fetch_array($consulta);
			$consulta = null;

			if ($resultado > 0) {
				echo '<script>
					alert("El activo Solicitado se encuentra en prestamo");
					window.history.go(-1);
					</script>';
			} else {

				$resultado = $this->db->query("INSERT INTO prestamo(Activos_idActivo,Usuarios_idUsuario,Fecha_Entrega,Fecha_Devolucion) VALUES ($id,'$id_usuario','$fechae','$fechad')");
				$alerta = 'success';
				$mensaje = 'Prestamo Registrado';
				$this->redireccion_adminP($alerta, $mensaje);
			}
		}
	}


	public function modificar($id, $fechae, $fechad)
	{
		//echo "UPDATE prestamo SET Activos_idActivo='$activo', Fecha_Entrega='$fechae', Fecha_Devolucion='$fechad' WHERE idPrestamo = '$id'";
		$resultado = $this->db->query("UPDATE prestamo SET Fecha_Entrega='$fechae', Fecha_Devolucion='$fechad' WHERE idPrestamo = '$id'");
		$resultado = null;
		$alerta = 'success';
		$mensaje = 'Prestamo Actualizado';
		$this->redireccion_adminP($alerta, $mensaje);
		//echo "UPDATE usuarios SET Sede_idSede=$sede, Rol_idRol=$rol, TipoIdentificacion_idTipoIdentificacion=$ti, Identificacion=$nidentificacion, Nombres='$nombre', Apellidos='$apellido', Direccion='$direccion', Telefono=$telefono, Correo='$correo', Usuario='$usuario', Ambiente=$ambiente WHERE idUsuario = '$id'";
	}

	public function eliminar($id)
	{

		$resultado = $this->db->query("UPDATE prestamo SET Estado = 0 WHERE idPrestamo = '$id'");
		$resultado = null;
		$alerta = 'success';
		$mensaje = 'Prestamo Entregado';
		$this->redireccion_adminP($alerta, $mensaje);
	}

	public function get_prestamo($id)
	{
		$sql = "SELECT idPrestamo,Nombres,Nserial,Fecha_Entrega,Fecha_Devolucion FROM prestamo INNER JOIN activos ON Activos_idActivo = idActivo INNER JOIN usuarios ON Usuarios_idUsuario = idUsuario WHERE idPrestamo='$id' LIMIT 1 ";
		$resultado = $this->db->query($sql);
		$sql = null;
		$row = $resultado->fetch_assoc();
		$resultado = null;

		return $row;
	}
}
