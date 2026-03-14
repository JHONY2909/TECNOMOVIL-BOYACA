<?php

require_once "../../config/database.php";

$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$stock = $_POST["stock"];

$query = $conexion->prepare("INSERT INTO productos (nombre, precio, stock) VALUES (?, ?, ?)");

$query->execute([$nombre, $precio, $stock]);

header("Location: index.php");
