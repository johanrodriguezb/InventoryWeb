<?php

class CategoriasController
{

    public function __construct()
    {
        require_once "models/CategoriasModel.php";
    }

    public function indexTorres()
    {
        $torres = new Categorias_model();
        $data["titulo"] = "Torres";
        $data["torres"] = $torres->get_torres();

        require_once "views/categorias/torres.php";
    }

    public function indexMonitores()
    {


        $monitores = new Categorias_model();
        $data["titulo"] = "Monitores";
        $data["monitores"] = $monitores->get_monitores();

        require_once "views/categorias/monitores.php";
    }

    public function indexMouses()
    {


        $mouses = new Categorias_model();
        $data["titulo"] = "Mouses";
        $data["mouses"] = $mouses->get_mouses();

        require_once "views/categorias/mouses.php";
    }


    public function indexTeclados()
    {


        $teclados = new Categorias_model();
        $data["titulo"] = "Teclados";
        $data["teclados"] = $teclados->get_teclados();

        require_once "views/categorias/teclados.php";
    }


    public function indexCableado()
    {


        $cableado = new Categorias_model();
        $data["titulo"] = "Cableado";
        $data["cableado"] = $cableado->get_cableado();

        require_once "views/categorias/cableado.php";
    }


    public function indexAccesorios()
    {


        $accesorio = new Categorias_model();
        $data["titulo"] = "Accesorio";
        $data["accesorio"] = $accesorio->get_accesorio();

        require_once "views/categorias/accesorio.php";
    }
}
