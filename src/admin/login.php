<?php
session_start();
require_once "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = $conexion->prepare("SELECT * FROM usuarios WHERE email = ?");
    $query->execute([$email]);

    $usuario = $query->fetch(PDO::FETCH_ASSOC);

    if ($usuario && $usuario["password"] == $password) {

        $_SESSION["admin"] = $usuario["id"];

        header("Location: dashboard.php");
        exit;

    } else {

        $error = "Credenciales incorrectas";

    }
}
?>

<h2>Login Administrador</h2>

<form method="POST">

    <input type="email" name="email" placeholder="Email" required><br><br>

    <input type="password" name="password" placeholder="Password" required><br><br>

    <button type="submit">Ingresar</button>

</form>

<?php
if(isset($error)){
    echo "<p>$error</p>";
}
?>
