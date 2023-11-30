<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');
$registroEliminado =$_GET['nombre'];
$consulta="DELETE FROM usuarios WHERE nombre = '$registroEliminado'";

mysqli_query($conexion, $consulta);
mysqli_close($conexion);
header('Location: EliminarUsuario.php');
?>