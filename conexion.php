<?php
// Establecer la conexión (asegúrate de tener esta parte en tu archivo PHP)
function conectar() {
    $servidor = 'localhost:3306';
    $usuario = 'root';
    $contrasena = '5627519983';
    $nombreBD = 'proyecto';

    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $nombreBD) or die("Error al conectar la base de datos: " . mysqli_connect_error());

    // Retornar la conexión
    return $conexion;
}

// Ejemplo de uso:
$con = conectar();
// Realiza operaciones con la conexión, por ejemplo, consultas, inserciones, etc.
echo "Datos recibidos del formulario:";
var_dump($_POST);
// Verificar la existencia de datos
if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['telefono']) && isset($_POST['usuario']) && isset($_POST['contrasena'])) {
    // Procesar los datos
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
    $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
    $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
    $contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena'],PASSWORD_DEFAULT);

    // Resto del código...
} else {
    echo "Alguno de los datos esperados está ausente.";
    exit; //sale del script
}
// Cierra la conexión cuando hayas terminado de usarla
mysqli_close($con);
?>