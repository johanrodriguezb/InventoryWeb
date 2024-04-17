<?php

class ReportesController
{

    public function __construct()
    {
        require_once "models/ReportesModel.php";
    }

    public function indexReporteone()
    {
        require_once "ajax/vista/reportefechapres.php";
    }

    public function indexReportetwo()
    {
        require_once "ajax/vista/reportesactivos.php";
    }

    public function indexReporteCategorias()
    {
        $categorias = new Reportes_model();
        $data["categorias"] = $categorias->get_categorias();
        require_once "ajax/vista/reportecate.php";
    }

    public function indexReporteEstado()
    {
        $estado = new Reportes_model();
        $data["estado"] = $estado->get_Estado();
        require_once "ajax/vista/reporteesta.php";
    }

    public function indexReporteFechas()
    {
        require_once "ajax/vista/reportefecha.php";
    }

    public function indexReporteAmbiente()
    {
        require_once "ajax/vista/reporteambiente.php";
    }

    public function indexReporteUsuarios()
    {
        $rol = new Reportes_model();
        $data["rol"] = $rol->get_rol();
        require_once "ajax/vista/reporteusuarios.php";
    }
}
