<?php
require_once "../Config/conexion.php";
require_once "../modelo/usuario.php";

class UsuarioController {

    private $modelUser;

    public function __construct() {
        $this -> modelUser = new Usuario();
    }

    public function validarUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $this -> modelUser -> login($_POST['email'], $_POST['contrasena']);

            if ($usuario) {
                session_start();
                $_SESSION['Usuario'] = $usuario;
                header("Location:../View/Front/html/perfil.php");
                exit();
            } else {
                echo "mal gay";

            }
        } else {
            header("Location:../View/Front/html/inicio_sesion.php");
            exit();
        }
    }

    public function registrar(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {
                $db = Database::connection();
                $usuario = new Usuario();

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
    }

    public function cerrarSesion() {
        session_start();
        session_destroy();
        header("Location:../Vista/html/login.php");
        exit();
    }
}

// Ejecutar el controlador
$controller = new UsuarioController();

if (isset($_POST['accion'])) {
    if ($_POST['accion'] === 'login') {
        $controller->validarUser();
    } elseif ($_POST['accion'] === 'registro') {
        $controller->registrar();
    }
}
?>