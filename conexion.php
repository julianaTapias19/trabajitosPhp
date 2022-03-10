<?php
    $clave = "";
    $user = "root";
    $basedts = "alumnos";

    try{
        $bd = new PDO('mysql:host = localhost; dbname='.$basedts,$user,$clave,
                        array(PDO:: MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        print "conexion exitosa <br>";

    }catch(Exception $e){
        print "error en la conexion <br>";
    }
?>