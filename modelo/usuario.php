<?php 
require_once "../config/conexion.php";

class Usuario {
    private $db;

    // Constructor recibe la conexión
    public function __construct($db) {
        $this->db = $db;
    }

    // Obtener usuario por correo
    public function obtener_usuario($email) {
        $sql = "SELECT * FROM usuario WHERE Correo_electronico = :email LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([":email" => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Validar login
    public function login($email, $pass) {
        $usuario = $this->obtener_usuario($email);

        if ($usuario) {
            if (password_verify($pass, $usuario['Contrasena'])) {
                return $usuario;
            }
        }
        return false;
    }

    // Registrar usuario
    public function registrar($nombre, $apellido, $documento, $telefono, $correo, $contrasena, $tipo = 'cliente') {
        $sql = 'INSERT INTO usuario 
                (Nombre, Apellido, Documento, Telefono, Correo_electronico, Contrasena, Tipo_usuario)
                VALUES (:nombre, :apellido, :documento, :telefono, :correo, :contrasena, :tipo_usuario)';
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':nombre' => $nombre,
            ':apellido' => $apellido,
            ':documento' => $documento,
            ':telefono' => $telefono,
            ':correo' => $correo,
            ':contrasena' => $contrasena,
            ':tipo_usuario' => $tipo
        ]);
    }

    // Listar todos los usuarios
    public function listar_usuario() {
        $sql = "SELECT * FROM usuario";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
