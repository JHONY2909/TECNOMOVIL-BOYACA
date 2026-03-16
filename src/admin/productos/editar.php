<?php

require_once "../../config/database.php";

$id = $_GET["id"];

$query = $conexion->prepare("SELECT * FROM productos WHERE id = ?");
$query->execute([$id]);

$producto = $query->fetch(PDO::FETCH_ASSOC);

?>

<h2>Editar producto</h2>

<form action="actualizar.php" method="POST">

<input type="hidden" name="id" value="<?= $producto["id"] ?>">

<input type="text" name="nombre" value="<?= $producto["nombre"] ?>"><br><br>

<input type="number" name="precio" value="<?= $producto["precio"] ?>"><br><br>

<input type="number" name="stock" value="<?= $producto["stock"] ?>"><br><br>

<button type="submit">Actualizar</button>

</form>
