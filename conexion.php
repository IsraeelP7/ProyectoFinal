<?php
    $servidor = 'localhost:3306';
    $usuario = 'root';
    $contrasena = '5627519983';
    $nombreBD = 'proyecto';
    
    $conexion = new mysqli($servidor, $usuario, $contrasena, $nombreBD);

    if ($conexion->connect_error) {
     die("La conexion falló jijijija: " . $conexion->connect_error);
    }
    ?>