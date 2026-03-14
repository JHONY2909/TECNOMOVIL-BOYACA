<?php

$host = "db";
$port = "3306";
$dbname = "tienda_celulares";
$user = "root";
$password = "root";

try {

    $conexion = new PDO(
        "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8",
        $user,
        $password
    );

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa a la base de datos 🚀";

} catch (PDOException $e) {

    echo "Error de conexión: " . $e->getMessage();

}
