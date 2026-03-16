<?php

require_once "../../config/database.php";

$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$stock = $_POST["stock"];

/* subir imagen */

$imagen = $_FILES["imagen"]["name"];
$tmp = $_FILES["imagen"]["tmp_name"];

$ruta = "../../assets/img/productos/" . $imagen;

move_uploaded_file($tmp, $ruta);

/* guardar en base de datos */

$query = $conexion->prepare(
"INSERT INTO productos (nombre, precio, stock, imagen) VALUES (?, ?, ?, ?)"
);

$query->execute([$nombre, $precio, $stock, $imagen]);

header("Location: index.php");
