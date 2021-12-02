<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segundo Parcial - Prog Web 2 - Matías Blanco Toledo</title>

    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Tabla de Registros</h1>

    <?php
        require_once "conexion.php";

        $sql="SELECT * FROM estudiantes";
        if($resultado=$pdo->query($sql)) {
            if($resultado->rowCount() > 0){
                echo'<table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Detalle</th>
                        </tr>
                    </thead>
                    <tbody>';
                    while($row = $resultado->fetch()){
                        echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['nombre'] . "</td>";
                            echo "<td>" . $row['apellido'] . "</td>";
                            echo '<td><a href="detalle.php?id='. $row['id'] .'">Ver registro</a></td>';
                        echo "</tr>";
                    }
                    echo "</tbody>";
                echo "</table>";
            } else {
                echo "<h3>Ningún registro fue encontrado.</h3>";
            }
        } else {
            echo "<h3>Lo sentimos! Algo anduvo mal. Por Favor intente más tarde.</h3>";
        }
    ?>
</body>
</html>