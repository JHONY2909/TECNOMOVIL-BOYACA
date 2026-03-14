<?php

require_once "../../config/database.php";

$id = $_GET["id"];

$query = $conexion->prepare("DELETE FROM productos WHERE id = ?");
$query->execute([$id]);

header("Location: index.php");
