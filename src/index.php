<?php

require_once "config/database.php";

$query = $conexion->query("SELECT * FROM productos");
$productos = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>

<head>

<title>Tienda de Celulares</title>

<link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>

<header>

<h1>Tienda de Celulares 📱</h1>

</header>

<div class="productos">

<?php foreach($productos as $producto): ?>

<div class="card">

<img src="assets/img/productos/<?= $producto["imagen"] ?>">

<h3>
<a href="producto.php?id=<?= $producto["id"] ?>">
<?= $producto["nombre"] ?>
</a>
</h3>


<p class="precio">$<?= number_format($producto["precio"]) ?></p>

<p>Stock: <?= $producto["stock"] ?></p>

<?php
$mensaje = "Hola, estoy interesado en el " . $producto["nombre"];
$mensaje = urlencode($mensaje);
?>

<a class="btn" href="https://wa.me/573208381949?text=<?= $mensaje ?>" target="_blank">
Comprar por WhatsApp
</a>

</div>

<?php endforeach; ?>

</div>

</body>
</html>
