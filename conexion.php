<?php

$link = 'mysql:host=localhost;dbname=jdbc';
$user = "root";
$password = "";


try{
    $pdo = new PDO($link, $user, $password);    
} catch(PDOException $e){
    die("ERROR: No se pudo conectar con la base de datos." . $e->getMessage());
}

?>