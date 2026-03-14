<?php
session_start();
require_once "../../config/database.php";

if(!isset($_SESSION["admin"])){
    header("Location: ../login.php");
    exit;
}

$query = $conexion->query("SELECT * FROM productos");
$productos = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Productos</h1>

<a href="crear.php">Agregar producto</a>

<table border="1">

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Precio</th>
<th>Stock</th>
<th>Acciones</th>
</tr>

<?php foreach($productos as $producto): ?>

<tr>

<td><?= $producto["id"] ?></td>
<td><?= $producto["nombre"] ?></td>
<td><?= $producto["precio"] ?></td>
<td><?= $producto["stock"] ?></td>

<td>
<a href="eliminar.php?id=<?= $producto["id"] ?>">Eliminar</a>
</td>

</tr>

<?php endforeach; ?>

</table>
