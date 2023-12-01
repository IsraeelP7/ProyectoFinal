<?php
    $servidor = 'sql205.infinityfree.com';
    $usuario = 'if0_35173746';
    $contrasena = 'znXQf4DdoDy77';
    $nombreBD = 'if0_35173746_Basededatosproyecto';
    
    $conexion = new mysqli($servidor, $usuario, $contrasena, $nombreBD);

    if ($conexion->connect_error) {
     die("La conexion falló jijijija: " . $conexion->connect_error);
    }
    ?>