<?php

class Activos_model
{
    private $db;
    private $activos;


    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->activos = array();
    }

    public function redireccion_admin($alerta, $mensaje)
    {
        header("Location:ejecutar.php?c=Activos&a=indexA&aviso=$mensaje&ca=$alerta");
    }

    public function get_sede()
    {
        $sql = "SELECT * FROM sede";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->activos[] = $row;
        }
        return $this->activos;
    }

    public function get_proveedor()
    {
        $sql = "SELECT * FROM proveedor";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->activos[] = $row;
        }
        return $this->activos;
    }

    public function get_categorias()
    {
        $sql = "SELECT * FROM categoria";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->activos[] = $row;
        }
        return $this->activos;
    }

    public function get_estados()
    {
        $sql = "SELECT * FROM estado";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->activos[] = $row;
        }
        return $this->activos;
    }


    public function get_activos()
    {
        $sql = "SELECT idActivo,Nserial,NombreSede,NombreProveedor,NombreCategoria,NombreEstado,NombreActivo,Precio,Cantidad,Imagen,Ambiente FROM activos INNER JOIN sede ON Sede_idSede = idSede INNER JOIN proveedor ON Proveedor_idProveedor = idProveedor INNER JOIN categoria ON Categoria_idcategoria = idcategoria INNER JOIN estado ON Estado_idEstado = idEstado ORDER BY idActivo ASC";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->activos[] = $row;
        }
        return $this->activos;
    }


    public function insertar($serial, $sede, $proveedor, $categoria, $estado, $nombrea, $precio, $cantidad, $ambiente, $nombre)
    {
        $consulta = $this->db->query("SELECT * FROM activos WHERE Nserial = '$serial'");
        $resultado = mysqli_fetch_array($consulta);

        if (empty($serial) || empty($sede) || empty($proveedor) || empty($categoria) || empty($estado) || empty($nombrea) || empty($precio) || empty($cantidad) || empty($ambiente) || empty($nombre)) {
            echo '<script>
                alert("Todos los campos son obligatorios"); 
                window.history.go(-1);
                </script>';
        } else {
            if ($resultado > 0) {

                echo '<script>
                    alert("Serial De Activo Ya Registrado"); 
                    window.history.go(-1);
                    </script>';
            } else {
                $carpeta = "imagenes/";
                opendir($carpeta);
                $destino = $carpeta . $_FILES['foto']['name'];
                copy($_FILES['foto']['tmp_name'], $destino);
                $nombre = $_FILES['foto']['name'];
                date_default_timezone_set("america/bogota");
                $fecha_registro  = date('Y-m-d H:i:s');


                $resultado = $this->db->query("INSERT INTO activos (Nserial,Sede_idSede,Proveedor_idProveedor,Categoria_idcategoria,Estado_idEstado,NombreActivo,Precio,Cantidad,Imagen,Fecha_registro,Ambiente) VALUES ('$serial',$sede,$proveedor,$categoria,$estado,'$nombrea',$precio,$cantidad,'$nombre','$fecha_registro',$ambiente)");
                //echo "INSERT INTO activos ('Serial',Sede_idSede,Proveedor_idProveedor,Categoria_idCategoria,Estado_idEstado,NombreActivo,Precio,Cantidad,Imagen) VALUES ('$serial',$sede,$proveedor,$categoria,$estado,'$nombrea',$precio,$cantidad,'$nombre')";
                $alerta = 'success';
                $mensaje = 'Activo Registrado';
                $this->redireccion_admin($alerta, $mensaje);
            }
        }
    }

    public function modificar($id, $serial, $sede, $proveedor, $categoria, $estado, $nombrea, $precio, $cantidad, $ambiente, $nombre)
    {
        $consulta = $this->db->query("SELECT * FROM activos Where idActivo= '$id'");
        $resul = mysqli_fetch_array($consulta);

        $fotoac = $resul["Imagen"];

        $nombre = $_FILES['foto']['name'];

        if ($nombre != "") {
            $carpeta = "imagenes/";
            opendir($carpeta);
            $destino = $carpeta . $_FILES['foto']['name'];
            $fotoac = $_FILES['foto']['name'];
        }

        $resultado = $this->db->query("UPDATE activos SET Nserial = '$serial', Sede_idSede=$sede, Proveedor_idProveedor=$proveedor, Categoria_idcategoria=$categoria, Estado_idEstado=$estado, NombreActivo='$nombrea', Precio=$precio, Cantidad=$cantidad, Imagen='$fotoac', Ambiente= $ambiente WHERE idActivo= '$id'");
        //echo "UPDATE activos SET Nserial = $serial, Sede_idSede=$sede, Proveedor_idProveedor=$proveedor, Categoria_idcategoria=$categoria, Estado_idEstado=$estado, NombreActivo='$nombrea', Precio=$precio, Cantidad=$cantidad, Imagen='$nombre' WHERE idActivo= '$id'";
        $alerta = 'success';
        $mensaje = 'Activo Actualizado';

        if ($nombre != "") {
            copy($_FILES['foto']['tmp_name'], $destino);
        }
        $this->redireccion_admin($alerta, $mensaje);
    }

    public function get_activo($id)
    {
        $sql = "SELECT idActivo,Nserial,Sede_idSede,Proveedor_idProveedor,Categoria_idcategoria,Estado_idEstado,NombreSede,NombreProveedor,NombreCategoria,NombreEstado,NombreActivo,Precio,Cantidad,Imagen,Ambiente FROM activos INNER JOIN sede ON Sede_idSede = idSede INNER JOIN proveedor ON Proveedor_idProveedor = idProveedor INNER JOIN categoria ON Categoria_idcategoria = idcategoria INNER JOIN estado ON Estado_idEstado = idEstado WHERE idActivo = '$id' LIMIT 1";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();

        return $row;
    }

    public function eliminar($id)
    {

        $resultado = $this->db->query("DELETE FROM activos WHERE idActivo = '$id'");
        //echo"DELETE FROM activos WHERE idActivo = '$id'";
        $alerta = 'success';
        $mensaje = 'Activo Eliminado';
        $this->redireccion_admin($alerta, $mensaje);
    }
}
