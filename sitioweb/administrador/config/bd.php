<?php
//conectarnos a la base de datos:
$host="localhost";
$bd="sitio";
$usuario="root";
$contrasenia="";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd", $usuario, $contrasenia); //conectadonse a la base de datos a través de PDO
    if($conexion){
       
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>