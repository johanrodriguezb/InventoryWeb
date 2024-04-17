<?php

class Categorias_model
{
    private $db;
    private $categorias;


    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->categorias = array();
    }


    public function get_teclados()
    {
        $sql = "SELECT idActivo,Nserial,NombreProveedor,NombreCategoria,NombreEstado,NombreActivo,Imagen FROM activos  INNER JOIN categoria ON Categoria_idcategoria = idcategoria INNER JOIN proveedor ON Proveedor_idProveedor = idProveedor INNER JOIN estado ON Estado_idEstado = idEstado WHERE NombreCategoria='Teclados' AND NombreEstado='Disponible'  ORDER BY idActivo ASC ";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->categorias[] = $row;
        }
        return $this->categorias;
    }

    public function get_torres()
    {
        $sql = "SELECT idActivo,Nserial,NombreProveedor,NombreCategoria,NombreEstado,NombreActivo,Imagen FROM activos  INNER JOIN categoria ON Categoria_idcategoria = idcategoria INNER JOIN proveedor ON Proveedor_idProveedor = idProveedor INNER JOIN estado ON Estado_idEstado = idEstado WHERE NombreCategoria='Torres' AND NombreEstado='Disponible'  ORDER BY idActivo ASC ";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->categorias[] = $row;
        }
        return $this->categorias;
    }


    public function get_mouses()
    {
        $sql = "SELECT idActivo,Nserial,NombreProveedor,NombreCategoria,NombreEstado,NombreActivo,Imagen FROM activos  INNER JOIN categoria ON Categoria_idcategoria = idcategoria INNER JOIN proveedor ON Proveedor_idProveedor = idProveedor INNER JOIN estado ON Estado_idEstado = idEstado WHERE NombreCategoria='Mouses' AND NombreEstado='Disponible'  ORDER BY idActivo ASC ";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->categorias[] = $row;
        }
        return $this->categorias;
    }

    public function get_monitores()
    {
        $sql = "SELECT idActivo,Nserial,NombreProveedor,NombreCategoria,NombreEstado,NombreActivo,Imagen FROM activos  INNER JOIN categoria ON Categoria_idcategoria = idcategoria INNER JOIN proveedor ON Proveedor_idProveedor = idProveedor INNER JOIN estado ON Estado_idEstado = idEstado WHERE NombreCategoria='Monitores' AND NombreEstado='Disponible' ORDER BY idActivo ASC ";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->categorias[] = $row;
        }
        return $this->categorias;
    }

    public function get_cableado()
    {
        $sql = "SELECT idActivo,Nserial,NombreProveedor,NombreCategoria,NombreEstado,NombreActivo,Imagen FROM activos  INNER JOIN categoria ON Categoria_idcategoria = idcategoria INNER JOIN proveedor ON Proveedor_idProveedor = idProveedor INNER JOIN estado ON Estado_idEstado = idEstado WHERE NombreCategoria='Cableado' AND NombreEstado='Disponible'  ORDER BY idActivo ASC ";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->categorias[] = $row;
        }
        return $this->categorias;
    }

    public function get_accesorio()
    {
        $sql = "SELECT idActivo,Nserial,NombreProveedor,NombreCategoria,NombreEstado,NombreActivo,Imagen FROM activos  INNER JOIN categoria ON Categoria_idcategoria = idcategoria INNER JOIN proveedor ON Proveedor_idProveedor = idProveedor INNER JOIN estado ON Estado_idEstado = idEstado WHERE NombreCategoria='Accesorios' AND NombreEstado='Disponible'  ORDER BY idActivo ASC ";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->categorias[] = $row;
        }
        return $this->categorias;
    }
}
