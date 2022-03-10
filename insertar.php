<?php
if(!isset($_POST["oculto"])){
    exit();
}

include 'conexion.php';

$primerApe = $_POST['ape1'];
$segundoApe = $_POST['ape2'];
$nombres = $_POST["name"];
$programa = $_POST["pro"];

$sentencia = $bd -> prepare ("INSERT INTO   alumnos(apellido1,apellido2,Nombres,programas)  
                            VALUES(?,?,?,?);");
$result = $sentencia -> execute([$primerApe,$segundoApe,$nombres,$programa]);

if($result === TRUE){
    print "alumno registrado <br>";
    header('location: index.php');

}else{
    print "error al registrar";
}
?>