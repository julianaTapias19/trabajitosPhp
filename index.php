<?php
include 'conexion.php';
$sentencia = $bd ->query("SELECT * FROM alumnos;");
$registros = $sentencia -> fetchall(PDO::FETCH_OBJ);

$bd ->query("INSERT INTO 'alumnos'('id', 'apellido1', 'apellido2', 'Nombres', 'programas');
         VALUES('','holi','mani','moto','garza','policia maritima');");
        
        // $row = mysqli_query($bd,$qry);
        // if( $row)
        //     echo "Registro agregado correctamente <br>";
        // else
        //     echo "****   Error al agregar registro ****<br>";


?>


<!DOCTYPE html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Lista de aprendices</h2>
<table>
    <tr>
        <th>codigo</th>
        <th>apellido1</th>
        <th>apellido2</th>
        <th>Nombres</th>
        <th>Programa</th>
        <th>Editar</th>
        <th>Borrar</th>

    </tr>

<?php
    foreach($registros as $dato){?>
    <tr>
        <td> <?php print $dato -> id; ?> </td>
        <td> <?php print $dato -> apellido1; ?> </td>
        <td> <?php print $dato -> apellido2; ?> </td>
        <td> <?php print $dato -> Nombres; ?> </td>
        <td> <?php print $dato -> programas; ?>  </td>

        <td><a href="editar.php?id=<?php print $dato -> id;?>">editar</a></td>
        <td><a href="borrar.php?id">Borrar</a></td><br>
    </tr><?php

    }

?>

</table>



<h3>ingresar alumnos</h3>
<form action="insertar.php" method="post" >
    <table>
        <tr>
            <td>Primer apellido:</td>
            <td><input type="text" required = "required"  name="ape1"></td>
        </tr>

        <tr>
            <td>Segundo apellido:</td>
            <td><input type="text" required = "required" name="ape2"></td>
        </tr>

        <tr>
            <td>Nombres:</td>
            <td><input type="text" required = "required" name="name"></td>
        </tr>

        <tr>
            <td>Programa:</td>
            <td><input type="text" required = "required" name="pro"></td>
        </tr>
        <input type="hidden" name="oculto" value="1">

        <tr>
            <td><input type="reset"></td>
            <td><input type="submit" value="Registrar alumnos"></td>
        </tr>

        
    </table>
</form>
    
</body>
</html>