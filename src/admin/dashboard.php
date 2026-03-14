<?php
session_start();

if(!isset($_SESSION["admin"])){
    header("Location: login.php");
    exit;
}

echo "<h1>Panel administrador</h1>";
echo "<p>Bienvenido al sistema de la tienda</p>";
