<?php

session_start();
require_once "../config/database.php";

if(!isset($_SESSION["admin"])){
header("Location: login.php");
exit;
}

$query = $conexion->query("SELECT COUNT(*) as total FROM productos");
$totalProductos = $query->fetch(PDO::FETCH_ASSOC)["total"];

include "layout/header.php";
?>

<h1>Dashboard</h1>

<p>Total productos: <?= $totalProductos ?></p>

<?php
include "layout/footer.php";
?>
