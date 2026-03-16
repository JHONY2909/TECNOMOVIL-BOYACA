<?php

session_start();

if(!isset($_SESSION["admin"])){
    header("Location: ../login.php");
    exit;
}

include "../layout/header.php";
?>

<h1>Promociones</h1>

<p>Aquí podrás administrar promociones.</p>

<?php
include "../layout/footer.php";
?>
