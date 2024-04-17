<?php

class ActivosController
{

    public function __construct()
    {
        require_once "models/ActivosModel.php";
    }

    public function indexA()
    {


        $activos = new Activos_model();
        $data["titulo"] = "Activos";
        $data["activos"] = $activos->get_activos();

        require_once "views/activos/activos.php";
    }


    public function nuevoA()
    {

        $sede = new Activos_model();
        $proveedor = new Activos_model();
        $categoria = new Activos_model();
        $estado = new Activos_model();


        $data["sede"] = $sede->get_sede();
        $data["proveedor"] = $proveedor->get_proveedor();
        $data["categorias"] = $categoria->get_categorias();
        $data["estados"] = $estado->get_estados();

        $data["titulo"] = "Activos";
        require_once "views/activos/activos_nuevo.php";
    }

    public function guardaA()
    {
        $serial = $_POST["Nserial"];
        $sede = $_POST["Sede_idSede"];
        $proveedor = $_POST["Proveedor_idProveedor"];
        $categoria = $_POST["Categoria_idcategoria"];
        $estado = $_POST["Estado_idEstado"];
        $nombrea = $_POST["NombreActivo"];
        $precio = $_POST["Precio"];
        $cantidad = $_POST["Cantidad"];
        $ambiente = $_POST["Ambiente"];

        date_default_timezone_set("america/bogota");
        $fecha_registro = date('Y-m-d H:i:s');

        $nombre = $_FILES['foto']['name'];


        $activos = new Activos_model();
        $activos->insertar($serial, $sede, $proveedor, $categoria, $estado, $nombrea, $precio, $cantidad, $ambiente, $nombre);
        $data["titulo"] = "Activos";
        //$this->indexA();
    }

    public function modificarA($id)
    {

        $activos = new Activos_model();
        $sede = new Activos_model();
        $proveedor = new Activos_model();
        $categoria = new Activos_model();
        $estado = new Activos_model();


        $data["sede"] = $sede->get_sede();
        $data["proveedor"] = $proveedor->get_proveedor();
        $data["categorias"] = $categoria->get_categorias();
        $data["estados"] = $estado->get_estados();

        $data["idActivo"] = $id;
        $data["activos"] = $activos->get_activo($id);
        $data["titulo"] = "Activos";
        require_once "views/activos/activos_modifica.php";
    }

    public function actualizarA()
    {
        $id = $_POST["idActivo"];
        $serial = $_POST["Nserial"];
        $sede = $_POST["Sede_idSede"];
        $proveedor = $_POST["Proveedor_idProveedor"];
        $categoria = $_POST["Categoria_idcategoria"];
        $estado = $_POST["Estado_idEstado"];
        $nombrea = $_POST["NombreActivo"];
        $precio = $_POST["Precio"];
        $cantidad = $_POST["Cantidad"];
        $ambiente = $_POST["Ambiente"];

        $nombre = $_FILES['foto']['name'];

        $activos = new Activos_model();
        $activos->modificar($id, $serial, $sede, $proveedor, $categoria, $estado, $nombrea, $precio, $cantidad, $ambiente, $nombre);
        $data["titulo"] = "Activos";
        $this->indexA();
    }

    public function eliminarA($id)
    {

        $activos = new Activos_model();
        $activos->eliminar($id);
        $data["titulo"] = "Activos";
        $this->indexA();
    }
}
