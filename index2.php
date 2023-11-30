<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario crear cuenta nueva</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="registro">
        <h2>Nuevo Usuario</h2>
        <img src="CR7logo.png" alt="Imagen bajo iniciar sesion" class="ilustrativo">
        
        <form action="tuscript.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="apellido" placeholder="Apellido" required> 
            <input type="text" name="telefono" placeholder="Numero telefónico" required>    
            <input type="text" name="usuario" placeholder="Nombre de usuario" required>
            <input type="password" name="contrasena" placeholder="Nueva contraseña" required>
            <button type="submit">Crear Cuenta</button>
        </form>

        <p><a href="index.html">Regresar al inicio</a></p>
        <td></td><img class="imagen" src="Kanye.jpeg" alt="ejemplo"></td>
    </div>
</body>
</html>