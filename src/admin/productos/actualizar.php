<?php

require_once "../../config/database.php";

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$stock = $_POST["stock"];

$query = $conexion->prepare(
"UPDATE productos SET nombre=?, precio=?, stock=? WHERE id=?"
);

$query->execute([$nombre,$precio,$stock,$id]);

header("Location: index.php");
