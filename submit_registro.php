<?php
//conexion a la base datos
include "conexion.php";
mysqli_set_charset($conexion,'utf8');




$buscarUsuario = "SELECT * FROM usuarios where usuario = '$_POST[usuario]'";

$result = $conexion -> query($buscarUsuario);
$count = mysqli_num_rows($result);

if($count ==1 ){
    echo'El nombre se usuario ya a sido ocupado';
    header('Location: ./form_registro.php');
    
}else{
    mysqli_query($conexion, "INSERT INTO usuarios (
    nombre,
    apellido,
    telefono,
    usuario,
    contrasena)
        VALUES(
    '$_POST[nombre]',
    '$_POST[apellido]',
    '$_POST[telefono]',
    '$_POST[usuario]',
    '$_POST[contrasena]'    
    )");

echo "<br />" . "<h1>" . "Usuario Creado Exitosamente!" . "</h1>";
echo "<h4>" . "Bienvenido: " . $_POST['usuario'] . "</h4>" . "\n\n";
echo "<h5>" . "<a href='./index2.php'>¿Quieres registrar otra cuenta?</a>" . "</h5>";
echo "<h5>" . "<a href='./index.html>Iniciar Sesión</a>" . "</h5>";

//termina el else
}



?>