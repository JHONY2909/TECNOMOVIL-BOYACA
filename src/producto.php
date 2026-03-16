<?php

require_once "config/database.php";

$id = $_GET["id"];

/* registrar visita */

$query = $conexion->prepare(
"INSERT INTO visitas_productos (producto_id) VALUES (?)"
);

$query->execute([$id]);

/* obtener producto */

$query = $conexion->prepare(
"SELECT * FROM productos WHERE id=?"
);

$query->execute([$id]);

$producto = $query->fetch(PDO::FETCH_ASSOC);

?>

<h1><?= $producto["nombre"] ?></h1>

<img src="assets/img/productos/<?= $producto["imagen"] ?>" width="300">

<p>Precio: $<?= number_format($producto["precio"]) ?></p>
