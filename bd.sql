CREATE DATABASE ventas_php;

USE ventas_php;


CREATE TABLE clientes(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    telefono VARCHAR(25) NOT NULL,
    direccion VARCHAR(255) NOT NULL
);

CREATE TABLE usuarios(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    telefono VARCHAR(25) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (usuario, nombre, telefono, direccion, password) VALUES ("paco", "PacoHunter", "6667771234", "Nowhere", "$2y$10$6zeiv5cq4/HCjWBH5X/Fd.yxKfDaWa5sJaYfW302n./awI/lQcH0i");

