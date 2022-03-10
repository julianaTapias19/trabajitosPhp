
<?php
 require_once 'Controlador.php';
 require_once 'gestorcita.php';
 require_once 'cita.php';
 require_once 'paciente.php';
 require_once 'conexion.php';
 $controlador = new Controlador();
 if( isset($_GET["accion"])){
    if($_GET["accion"] == "asignar"){
    $controlador->verPagina('../consultorio.html');
    }
    if($_GET["accion"] == "consultar"){
    $controlador->verPagina('../consultorio.html');
    }
    if($_GET["accion"] == "cancelar"){
    $controlador->verPagina('../consultorio.html');
    }
    } else {
    $controlador->verPagina('../consultorio.html');
    }
?>
