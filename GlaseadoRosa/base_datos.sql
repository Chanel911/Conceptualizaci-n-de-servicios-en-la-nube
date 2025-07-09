CREATE DATABASE IF NOT EXISTS glaseado_rosa;
USE glaseado_rosa;

CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    correo VARCHAR(100),
    telefono VARCHAR(20),
    direccion VARCHAR(200),
    fecha_registro DATETIME
);