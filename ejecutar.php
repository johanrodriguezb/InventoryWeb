<?php
require_once("config/config.php");
require_once("config/configC.php");
require_once("core/routes.php");
require_once("config/database.php");

//traemos el valor de la acción para redirigir
$comodin = $_GET['a'];


//este es el comodin para el ingreso a la plataforma
if ($comodin == 'verifica' || $comodin == 'guarda') {
    $accionC = ACCION_PRINCIPAL;
    $controladorC = CONTROLADOR_PRINCIPAL;
    $ruta = "controllers/Usuarios.php";
}

//este es el comodin para la vistas del CRUD en USUARIOS
if ($comodin == 'index' || $comodin == 'nuevo' || $comodin == 'modificar') {
    $accionC = ACCION_PRINCIPAL;
    $controladorC = CONTROLADOR_PRINCIPAL;
    $ruta = "controllers/Usuarios.php";
}

//acciones globales para los usuarios
if ($comodin == 'guarda') {
    $accionC = ACCION_PRINCIPAL_G;
    $controladorC = CONTROLADOR_PRINCIPAL_G;
    $ruta = "controllers/Usuarios.php";
}

if ($comodin == 'actualizar') {
    $accionC = ACCION_PRINCIPAL_A;
    $controladorC = CONTROLADOR_PRINCIPAL_A;
    $ruta = "controllers/Usuarios.php";
}

if ($comodin == 'indexin') {
    $accionC = ACCION_PRINCIPAL_UI;
    $controladorC = CONTROLADOR_PRINCIPAL_UI;
    $ruta = "controllers/Usuarios.php";
}

if ($comodin == 'eliminar') {
    $accionC = ACCION_PRINCIPAL_UD;
    $controladorC = CONTROLADOR_PRINCIPAL_UD;
    $ruta = "controllers/Usuarios.php";
}

if ($comodin == 'habilitar') {
    $accionC = ACCION_PRINCIPAL_UH;
    $controladorC = CONTROLADOR_PRINCIPAL_UH;
    $ruta = "controllers/Usuarios.php";
}


// acciones globales para la administración de activos
if ($comodin == 'indexA' || $comodin == 'nuevoA' || $comodin == 'modificarA') {
    $accionC = ACCION_PRINCIPAL_AC;
    $controladorC = CONTROLADOR_PRINCIPAL_AC;
    $ruta = "controllers/Activos.php";
}

if ($comodin == 'guardaA') {
    $accionC = ACCION_PRINCIPAL_GA;
    $controladorC = CONTROLADOR_PRINCIPAL_GA;
    $ruta = "controllers/Activos.php";
}

if ($comodin == 'eliminarA') {
    $accionC = ACCION_PRINCIPAL_DA;
    $controladorC = CONTROLADOR_PRINCIPAL_DA;
    $ruta = "controllers/Activos.php";
}

if ($comodin == 'actualizarA') {
    $accionC = ACCION_PRINCIPAL_RA;
    $controladorC = CONTROLADOR_PRINCIPAL_RA;
    $ruta = "controllers/Activos.php";
}

//acciones globales para la administración de prestamos
if ($comodin == 'indexP' || $comodin == 'nuevoP' || $comodin == 'modificarP') {
    $accionC = ACCION_PRINCIPAL_PI;
    $controladorC = CONTROLADOR_PRINCIPAL_PI;
    $ruta = "controllers/Prestamos.php";
}

if ($comodin == 'guardaP') {
    $accionC = ACCION_PRINCIPAL_GP;
    $controladorC = CONTROLADOR_PRINCIPAL_GP;
    $ruta = "controllers/Prestamos.php";
}

if ($comodin == 'actualizarP') {
    $accionC = ACCION_PRINCIPAL_RP;
    $controladorC = CONTROLADOR_PRINCIPAL_RP;
    $ruta = "controllers/Prestamos.php";
}

if ($comodin == 'eliminarP') {
    $accionC = ACCION_PRINCIPAL_DP;
    $controladorC = CONTROLADOR_PRINCIPAL_DP;
    $ruta = "controllers/Prestamos.php";
}

//variable para la cerrar la sesion
if ($comodin == 'cerrarS') {
    $accionC = ACCION_PRINCIPAL_LOGOUT;
    $controladorC = CONTROLADOR_PRINCIPAL_LOGOUT;
    $ruta = "controllers/Usuarios.php";
}




//variables para el control de las categorias
if ($comodin == 'indexTorres') {
    $accionC = ACCION_PRINCIPAL_TORRES;
    $controladorC = CONTROLADOR_PRINCIPAL_TORRES;
    $ruta = "controllers/Categorias.php";
}

if ($comodin == 'indexMouses') {
    $accionC = ACCION_PRINCIPAL_MOU;
    $controladorC = CONTROLADOR_PRINCIPAL_MOU;
    $ruta = "controllers/Categorias.php";
}

if ($comodin == 'indexTeclados') {
    $accionC = ACCION_PRINCIPAL_TECLADOS;
    $controladorC = CONTROLADOR_PRINCIPAL_TECLADOS;
    $ruta = "controllers/Categorias.php";
}

if ($comodin == 'indexCableado') {
    $accionC = ACCION_PRINCIPAL_CABLEADO;
    $controladorC = CONTROLADOR_PRINCIPAL_CABLEADO;
    $ruta = "controllers/Categorias.php";
}

if ($comodin == 'indexAccesorios') {
    $accionC = ACCION_PRINCIPAL_ACCESORIO;
    $controladorC = CONTROLADOR_PRINCIPAL_ACCESORIO;
    $ruta = "controllers/Categorias.php";
}


if ($comodin == 'indexMonitores') {
    $accionC = ACCION_PRINCIPAL_MONITORES;
    $controladorC = CONTROLADOR_PRINCIPAL_MONITORES;
    $ruta = "controllers/Categorias.php";
}


if ($comodin == 'indexReporteone') {
    $accionC = ACCION_PRINCIPAL_REPORTE;
    $controladorC = CONTROLADOR_PRINCIPAL_REPORTE;
    $ruta = "controllers/Reportes.php";
}

if ($comodin == 'indexReportetwo') {
    $accionC = ACCION_PRINCIPAL_TWO;
    $controladorC = CONTROLADOR_PRINCIPAL_TWO;
    $ruta = "controllers/Reportes.php";
}

if ($comodin == 'indexReporteCategorias') {
    $accionC = ACCION_PRINCIPAL_CATE;
    $controladorC = CONTROLADOR_PRINCIPAL_CATE;
    $ruta = "controllers/Reportes.php";
}

if ($comodin == 'indexReporteEstado') {
    $accionC = ACCION_PRINCIPAL_ESTADO;
    $controladorC = CONTROLADOR_PRINCIPAL_ESTADO;
    $ruta = "controllers/Reportes.php";
}

if ($comodin == 'indexReporteFechas') {
    $accionC = ACCION_PRINCIPAL_FECHAS;
    $controladorC = CONTROLADOR_PRINCIPAL_FECHAS;
    $ruta = "controllers/Reportes.php";
}

if ($comodin == 'indexReporteAmbiente') {
    $accionC = ACCION_PRINCIPAL_AMBIENTE;
    $controladorC = CONTROLADOR_PRINCIPAL_AMBIENTE;
    $ruta = "controllers/Reportes.php";
}

if ($comodin == 'indexReporteUsuarios') {
    $accionC = ACCION_PRINCIPAL_USUARIOS;
    $controladorC = CONTROLADOR_PRINCIPAL_USUARIOS;
    $ruta = "controllers/Reportes.php";
}


if ($comodin == 'indexSolicitud') {
    $accionC = ACCION_PRINCIPAL_SOLICITAR;
    $controladorC = CONTROLADOR_PRINCIPAL_SOLICITAR;
    $ruta = "controllers/Solicitud.php";
}

if ($comodin == 'envia') {
    $accionC = ACCION_PRINCIPAL_ENVIAR;
    $controladorC = CONTROLADOR_PRINCIPAL_ENVIAR;
    $ruta = "controllers/Solicitud.php";
}

if ($comodin == 'indexRecupera') {
    $accionC = ACCION_PRINCIPAL_CONTRASENA;
    $controladorC = CONTROLADOR_PRINCIPAL_CONTRASENA;
    $ruta = "controllers/Solicitud.php";
}

if ($comodin == 'enviarT') {
    $accionC = ACCION_PRINCIPAL_TOKEN;
    $controladorC = CONTROLADOR_PRINCIPAL_TOKEN;
    $ruta = "controllers/Solicitud.php";
}

if ($comodin == 'indexcambiaP') {
    $accionC = ACCION_PRINCIPAL_CPASS;
    $controladorC = CONTROLADOR_PRINCIPAL_CPASS;
    $ruta = "controllers/Solicitud.php";
}


if ($comodin == 'cambiarPass') {
    $accionC = ACCION_PRINCIPAL_CAMBIARPASS;
    $controladorC = CONTROLADOR_PRINCIPAL_CAMBIARPASS;
    $ruta = "controllers/Solicitud.php";
}

require_once("$ruta");

if (isset($_GET['c'])) {

    $controlador = cargarControlador($_GET['c']);

    if (isset($_GET['a'])) {
        if (isset($_GET['id'])) {
            cargarAccion($controlador, $_GET['a'], $_GET['id']);
        } else {
            cargarAccion($controlador, $_GET['a']);
        }
    } else {
        cargarAccion($controlador, $accionC);
    }
} else {

    $controlador = cargarControlador($controladorC);
    $accionTmp = $accionC;
    $controlador->$accionTmp();
}
