<?php
// Se usa "require" para incluir el archivo de conexión
require "conexion.php";
mysqli_set_charset($conexion, 'utf8');

// Generar la consulta SQL
$consulta_sql = "SELECT * FROM usuarios";

// Mandar el query por medio de la conexión y almacenaremos el resultado en una variable
$resultado = $conexion->query($consulta_sql);

// Retorna el numero de filas del resultado. Si encuentra más de uno, lo usamos para imprimir el resultado en nuestra tabla
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
            <!-- Si hay registros, mostramos la tabla -->
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
            <!-- Si no hay registros, mostramos un mensaje -->
            <h1 class="no-records">Sin ningún registro</h1>
        <?php endif; ?>

        <!-- Enlaces de navegación -->
        <h1><a href='EliminarUsuario.php'>¿Deseas eliminar tu usuario?</a></h1>
        <h3><a href='index.html'>Página principal</a></h3>
    </div>
</body>

</html>