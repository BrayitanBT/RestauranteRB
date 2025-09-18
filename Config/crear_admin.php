<?php
require_once "conexion.php";

try {
    $db = Database::connection();

    // Correo fijo del admin
    $email = "admin123@gmail.com";

    // Consultar si ya existe
    $consul = $db->prepare('SELECT * FROM Usuario WHERE Correo_electronico = :correo');
    $consul->execute([':correo' => $email]);

    // Si NO existe, insertar
    if (!$consul->fetch()) {
        $sql = 'INSERT INTO Usuario (Nombre, Apellido, Documento, Telefono, Correo_electronico, Tipo_usuario)
                VALUES (:nombre, :apellido, :documento, :telefono, :correo, :tipo_usuario)';

        $consult = $db->prepare($sql);
        $consult->execute([
            ':nombre' => 'Admin',
            ':apellido' => 'Principal',
            ':documento' => 0,
            ':telefono' => 0,
            ':correo' => $email,
            ':tipo_usuario' => 'admin'
        ]);

        echo "Usuario administrador creado con éxito.";
    } else {
        echo "El usuario administrador ya existe.";
    }
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

?>
