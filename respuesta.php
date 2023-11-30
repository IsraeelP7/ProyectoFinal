<?php
session_start();
include "conexion.php";
$usuario = $_POST['usuario'];
$password = $_POST['contrasena'];

$q = "SELECT COUNT(*) AS contar FROM usuarios WHERE usuario= '$usuario' AND contrasena = '$password'";

$consulta = mysqli_query($conexion,$q);

$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['usermane']=$usuario;
    echo "Ingresaste";
    header("location: ./dashboard.php");
}else{

        header("location: ./index.html");

echo "error";
   
}

?>
