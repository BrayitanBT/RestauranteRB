<?php
require_once "../Config/conexion.php";
require_once "../modelo/usuario.php";
session_start();

class Usuario_controlador {
    private $modelo_usuario;

    public function __construct() {
        $db = Database::connection();
        $this->modelo_usuario = new Usuario($db);
    }

    public function validar_usuario() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $pass  = filter_input(INPUT_POST, 'contrasena', FILTER_DEFAULT);

            $usuario = $this->modelo_usuario->login($email, $pass);

            if ($usuario) {
                $_SESSION['usuario'] = $usuario;
                header("Location: ../View/Front/html/perfil.php");
                exit();
            } else {
                $_SESSION['error'] = "Credenciales no válidas";
                header("Location: ../View/Front/html/inicio_sesion.php");
                exit();
            }
        }
    }
}

$controlador = new Usuario_controlador();
$controlador->validar_usuario();
