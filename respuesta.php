<?php
session_start();
include "conexion.php";
$usuario = $_POST['usuario'];
$password = $_POST['contrasena'];

$q = "SELECT COUNT(*) AS contar FROM usuarios WHERE usuario= '$usuario' AND contrasena = '$password'";

$consulta = mysqli_query($conexion,$q);

$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    // en la variable session se guarda el numero de cuenta esto para poder acarrearla
    $_SESSION['usermane']=$usuario;
    echo "Ingresaste";
    header("location: ./dashboard.php");
}else{

        header("location: ./index.html");

echo "error";
   
}

?>
