<?php
// Conexión a la base de datos
include "conexion.php";
mysqli_set_charset($conexion, 'utf8');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);

    $buscarUsuario = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $result = $conexion->query($buscarUsuario);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo '<p style="color: #e74c3c; font-size: 18px;">El nombre de usuario ya ha sido ocupado. Por favor, elige otro.</p>';
        echo '<a href="./index2.php" style="text-decoration: none; font-weight: bold; color: #3498db; font-size: 16px;">Volver al formulario de registro</a>';
    } else {
        // Insertar nuevo usuario
        $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
        $apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
        $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
        $contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']);

        $queryInsert = "INSERT INTO usuarios (nombre, apellido, telefono, usuario, contrasena)
                        VALUES ('$nombre', '$apellido', '$telefono', '$usuario', '$contrasena')";

        if (mysqli_query($conexion, $queryInsert)) {
            echo '<h1 style="color: #27ae60;">Usuario creado con exito</h1>';
            echo '<h4>Bienvenido: ' . $usuario . '</h4>';
            echo '<h5><a href="./index2.php" style="text-decoration: none; font-weight: bold; color: #3498db;">¿Quieres registrar otra cuenta?</a></h5>';
            echo '<h5><a href="./index.html" style="text-decoration: none; font-weight: bold; color: #3498db;">Iniciar Sesión</a></h5>';
        } else {
            echo '<p style="color: #e74c3c; font-size: 18px;">Error al crear el usuario. Inténtalo de nuevo.</p>';
            echo '<a href="./index2.php" style="text-decoration: none; font-weight: bold; color: #3498db; font-size: 16px;">Volver al formulario de registro</a>';
        }
    }
} else {
    header('Location: ./index2.php');
}
?>