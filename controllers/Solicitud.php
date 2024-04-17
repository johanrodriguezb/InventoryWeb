<?php

class SolicitudController
{

    public function __construct()
    {
        require_once "models/SolicitudModel.php";
    }

    public function indexSolicitud()
    {
        require_once "views/solicitud/solicitar.php";
    }

    public function indexRecupera()
    {
        require_once "views/recuperar/recupera.php";
    }

    public function envia()
    {

        $id = $_POST["id"];
        $serial = $_POST["Serial"];
        $prove = $_POST["proveedor"];
        $esta = $_POST["estado"];
        $iden = $_POST["Identificacion"];
        $nombre = $_POST["Nombres"];
        $ambiente = $_POST["Ambiente"];
        $correo = $_POST["Correo"];
        $mensaje = $_POST["mensaje"];


        date_default_timezone_set("america/bogota");
        $fecha_registro = date('Y-m-d H:i:s');

        $envio = new Solicitud_model();
        $envio->enviar($id, $serial, $prove, $esta, $iden, $nombre, $ambiente, $correo, $mensaje);
        $this->indexSolicitud();
    }

    public function enviarT()
    {
        $correo = $_POST["Correo"];

        $token = new Solicitud_model();
        $token->enviarToken($correo);
        $this->indexSolicitud();
    }

    public function indexcambiaP()
    {
        require_once "views/recuperar/cambia_pass.php";
    }

    public function cambiarPass()
    {
        $id = $_POST["user_id"];
        $token = $_POST["token"];
        $contra1 = $_POST["password"];
        $contra2 = $_POST["con_password"];

        $cambio = new Solicitud_model();
        $cambio->cambiarContrasena($id, $token, $contra1, $contra2);
        $this->indexSolicitud();
    }
}
