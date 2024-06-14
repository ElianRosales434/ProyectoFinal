-- Creando la base de datos
CREATE DATABASE IF NOT EXISTS administracion_togas_birretes;
USE administracion_togas_birretes;

-- Creando la tabla de birretes
CREATE TABLE IF NOT EXISTS Birretes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    carnet VARCHAR(20) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    talla VARCHAR(10) NOT NULL,
    fecha_entrega DATE NOT NULL,
    fecha_devolucion DATE NOT NULL,
    INDEX (carnet),
    INDEX (nombre)
);

-- Creando la tabla de togas
CREATE TABLE IF NOT EXISTS Togas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    carnet VARCHAR(20) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    talla VARCHAR(10) NOT NULL,
    fecha_entrega DATE NOT NULL,
    fecha_devolucion DATE NOT NULL,
    INDEX (carnet),
    INDEX (nombre)
);
