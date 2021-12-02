<?php
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){

    require_once "conexion.php";
    
    $id=$_GET["id"];

    $sql = 'SELECT * FROM estudiantes WHERE id ='.$id. ';';
    
    $resultado=$pdo->query($sql);
    $row = $resultado->fetch();
    $dniUsuario=$row['dni'];
    $nombreUsuario=$row['nombre'];
    $apellidoUsuario=$row['apellido'];
    unset($resultado);
    unset($pdo);
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Segundo Parcial - Prog Web 2 - Matías Blanco Toledo</title>
    </head>
    <body>
        <h1>Registro</h1>
        <h3>DNI</h3>
        <p><?php echo $dniUsuario; ?></p>
        <h3>Nombre</h3>
        <p><?php echo $nombreUsuario; ?></p>
        <h3>Apellido</h3>
        <p><?php echo $apellidoUsuario; ?></p>
        <br>
        <p><a href="index.php">Volver al inicio</a></p>
    </body>
</html>