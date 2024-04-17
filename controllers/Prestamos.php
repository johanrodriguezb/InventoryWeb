<?php

class PrestamosController
{

	public function __construct()
	{
		require_once "models/PrestamosModel.php";
	}

	public function indexP()
	{


		$prestamos = new Prestamos_model();
		$data["titulo"] = "Prestamos";
		$data["prestamos"] = $prestamos->get_prestamos();

		require_once "views/prestamos/prestamos.php";
	}


	public function nuevoP()
	{

		$data["titulo"] = "Prestamos";
		require_once "views/prestamos/prestamos_nuevo.php";
	}

	public function guardaP()
	{

		$activo = $_POST['Activos_idActivo'];
		$usuario = $_POST['Usuarios_idUsuario'];
		$fechae = $_POST['inicial'];
		$fechad = $_POST['final'];

		$prestamos = new Prestamos_model();
		$prestamos->insertar($activo, $usuario, $fechae, $fechad);
		$data["titulo"] = "Prestamos";
		//$this->indexP();
	}

	public function modificarP($id)
	{

		$prestamos = new Prestamos_model();

		$data["idPrestamo"] = $id;
		$data["prestamos"] = $prestamos->get_prestamo($id);
		$data["titulo"] = "Prestamos";
		require_once "views/prestamos/prestamos_modifica.php";
	}

	public function actualizarP()
	{
		$id = $_POST['idPrestamo'];
		$fechae = $_POST['inicial'];
		$fechad = $_POST['final'];

		$prestamos = new Prestamos_model();
		$prestamos->modificar($id, $fechae, $fechad);
		$data["titulo"] = "Prestamos";
		$this->indexP();
	}

	public function eliminarP($id)
	{

		$prestamos = new Prestamos_model();
		$prestamos->eliminar($id);
		$data["titulo"] = "Prestamos";
		$this->indexP();
	}
}
