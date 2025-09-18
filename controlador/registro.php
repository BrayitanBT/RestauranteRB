<?php
require_once "../config/conexion.php";
require_once "../modelo/usuario.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $db = Database::connection();
        $usuario = new Usuario($db);

        // Sanitizar y validar los datos recibidos
        $nombre = trim($_POST['Nombre']);
        $apellido = trim($_POST['Apellido']);
        $documento = ($_POST['Documento']);
        $telefono = ($_POST['Telefono']);
        $correo = ($_POST['Correo_electronico']);
        $contrasena = password_hash($_POST['Contrasena'], PASSWORD_BCRYPT);

        // Registrar usuario (por defecto tipo cliente)
        $usuario->registrar($nombre, $apellido, $documento, $telefono, $correo,$contrasena);

        echo "Usuario registrado con éxito.";
    } catch (PDOException $e) {
        echo "Error en el registro: " . $e->getMessage();
    }
}
?>