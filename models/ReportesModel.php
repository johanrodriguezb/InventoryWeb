<?php

class Reportes_model
{
    private $db;
    private $reportes;


    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->reportes = array();
    }

    public function get_categorias()
    {
        $sql = "SELECT * FROM categoria";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->reportes[] = $row;
        }
        return $this->reportes;
    }

    public function get_estado()
    {
        $sql = "SELECT * FROM estado";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->reportes[] = $row;
        }
        return $this->reportes;
    }

    public function get_rol()
    {
        $sql = "SELECT * FROM rol";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->reportes[] = $row;
        }
        return $this->reportes;
    }
}
