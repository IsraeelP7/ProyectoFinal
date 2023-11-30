-- Elimina la base de datos si existe
DROP DATABASE IF EXISTS `proyecto`;

-- Crea la base de datos
CREATE DATABASE IF NOT EXISTS `proyecto` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;

-- Utiliza la base de datos
USE `proyecto`;

-- Crea la tabla de usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    telefono VARCHAR(15),
    usuario VARCHAR(20) UNIQUE NOT NULL,
    contrasena VARCHAR(255) NOT NULL
);

-- Muestra la estructura de la tabla
DESCRIBE usuarios;


INSERT INTO `usuarios` VALUES ('1','Aaron','ola','5626198295','Huron9','123456');
INSERT INTO `usuarios` VALUES ('2','Israel','ElBicho','5627519983','ElBicho7','654321');

SELECT * FROM usuarios;