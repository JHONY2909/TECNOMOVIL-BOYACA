-- Crear base de datos
CREATE DATABASE IF NOT EXISTS tienda_celulares;

USE tienda_celulares;

-- ===============================
-- TABLA USUARIOS (ADMIN)
-- ===============================

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    rol ENUM('admin') DEFAULT 'admin',
    creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Usuario administrador inicial
INSERT INTO usuarios (nombre,email,password)
VALUES ('Administrador','admin@tienda.com','123456');


-- ===============================
-- TABLA CATEGORIAS
-- ===============================

CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO categorias (nombre) VALUES
('Celulares'),
('Tablets'),
('Relojes'),
('Accesorios'),
('Computadores');


-- ===============================
-- TABLA PRODUCTOS
-- ===============================

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(200) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(12,2) NOT NULL,
    stock INT DEFAULT 0,
    imagen VARCHAR(255),
    categoria_id INT,
    estado ENUM('nuevo','exhibicion','usado') DEFAULT 'nuevo',
    destacado BOOLEAN DEFAULT FALSE,
    activo BOOLEAN DEFAULT TRUE,
    creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (categoria_id) REFERENCES categorias(id)
);


-- ===============================
-- TABLA PROMOCIONES
-- ===============================

CREATE TABLE promociones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(200),
    descripcion TEXT,
    imagen VARCHAR(255),
    fecha_inicio DATE,
    fecha_fin DATE,
    activo BOOLEAN DEFAULT TRUE,
    creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- ===============================
-- TABLA VISITAS PRODUCTOS
-- ===============================

CREATE TABLE visitas_productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto_id INT,
    ip VARCHAR(50),
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (producto_id) REFERENCES productos(id)
);


-- ===============================
-- TABLA ESTADISTICAS GENERALES
-- ===============================

CREATE TABLE estadisticas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pagina VARCHAR(100),
    ip VARCHAR(50),
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
