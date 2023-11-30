<?php
// Se usa "require" para incluir el archivo de conexión
require "conexion.php";
mysqli_set_charset($conexion, 'utf8');

// Generar la consulta SQL
$consulta_sql = "SELECT * FROM usuarios";

$resultado = $conexion->query($consulta_sql);

$count = mysqli_num_rows($resultado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="style5.css">
</head>

<body>
    <div class="container">
        <h1>Lista de Usuarios</h1>

        <?php if ($count > 0) : ?>
            
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Teléfono</th>
                        <th>Usuario</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($resultado)) : ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['apellido']; ?></td>
                            <td><?php echo $row['telefono']; ?></td>
                            <td><?php echo $row['usuario']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else : ?>
            
            <h1 class="no-records">Sin ningún registro</h1>
        <?php endif; ?>
        <img src="ejemploimagen.jpeg" alt="hola soy una imagen">


        
        <h1><a href='EliminarUsuario.php'>¿Deseas eliminar tu usuario?</a></h1>
        <h3><a href='index.html'>Página principal</a></h3>
    </div>
</body>

</html>