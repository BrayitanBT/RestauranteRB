<?php
require_once "../config/conexion.php";
require_once "../modelo/usuario.php";

class UsuarioController {

    private $modelUser;

    public function __construct() {
    $this->modelUser = new Usuario(); 
}

    public function validarUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $this->modelUser->login($_POST['email'], $_POST['contrasena']);

            if ($usuario) {
                session_start();
                $_SESSION['usuario'] = $usuario;
                header("Location: ../View/Front/html/perfil.php");
                exit();
            } else {
                header("Location:../View/Front/html/inicio_sesion.php");
                exit();
            }
        } else {
            header("Location:../View/Front/html/inicio_sesion.php");
            exit();
        }
    }

    public function cerrarSesion() {
        session_start();
        session_destroy();
        header("Location:../View/Front/html/inicio_sesion.php");
        exit();
    }
}

// Ejecutar el controlador
$controller = new UsuarioController();
$controller->validarUser();
?>