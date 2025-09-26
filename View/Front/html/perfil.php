<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: inicio_sesion.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario']['Nombre']; ?>!</h1>
    <p>Tu correo es: <?php echo $_SESSION['usuario']['Correo_electronico']; ?></p>
    <a href="cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>
