<?php


    if(!isset($_GET['id'])){
        exit();
        header('Location: index2.php');
    }
    include 'conexion.php';
    $id=$_GET['id'];

    $sentencia=$db->prepare("SELECT * FROM aprendices WHERE id=?;");
    $sentencia=execute([$id]);
    $registro=$sentencia->fetch(PDO::FETCH_OBJ)

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
    

    <h3>EDITAR REGISTROS</h3>
    <form action="editacambios.php" method="POST">


    <table>
        <tr>
            <td>Primer apellido</td>
            <td><input type="text" name="ap1" value="<?php echo$registo->apellido1;?>"> </td>
        </tr>


        <tr>
            <td>Primer apellido</td>
            <td><input type="text" name="ap2" value="<?php echo$registo->apellido2;?>"> </td>
        </tr>

        <tr>
            <td>Nombres</td>
            <td><input type="text" name="nmb" value="<?php echo $registro->nombres;?>"></td>
        </tr>


        <tr>
            <td>Programa</td>
            <td><input type="text" name="prg" value="<?php echo $registro->programa;?>"></td>
        </tr>

        <input type="hidden" name="oculto" value="1">
        <input type="hidden" name="idK" value="<?php echo $registro->id  ?>">

        <tr>
            <td colspan="2"> <input type="submit"></td>
        </tr>
    </table>
    </form>
</body>
</html>