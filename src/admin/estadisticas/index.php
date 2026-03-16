<?php

session_start();
require_once "../../config/database.php";

if(!isset($_SESSION["admin"])){
    header("Location: ../login.php");
    exit;
}

/* total visitas */

$query = $conexion->query("SELECT COUNT(*) as total FROM visitas_productos");
$totalVisitas = $query->fetch(PDO::FETCH_ASSOC)["total"];

include "../layout/header.php";
?>

<h1>Estadísticas</h1>

<p>Total visitas a productos: <?= $totalVisitas ?></p>

<?php
include "../layout/footer.php";
?>
