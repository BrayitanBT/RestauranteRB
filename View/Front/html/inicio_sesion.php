<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Css/iniciar_sesion.css">
    <link rel="stylesheet" href="../../Css/bootstrap/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/c439753abb.js" crossorigin="anonymous"></script>
</head>
<body class="body">
    <!--Encabezado -->
    <header >

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark"id="barranav" >
            <div class="container-fluid">
                <img src="../../Assets/img/Logo/logo.png" alt="" style="height: 8vw;max-height: 200px; min-width: 150px; min-height:150px;">
                <a class="navbar-brand" href="#" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;  font-size: clamp(1rem, 5vw, 3rem); color: #FFD43B; ">FASTIE</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item" >
                                <a class="nav-link" href="../../../index.html" style="font-size: clamp(0.8rem, 1.3vw, 3rem);">INICIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./menu.html" style="font-size: clamp(0.8rem, 1.3vw, 3rem);">MENU</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./sobre.html" style="font-size: clamp(0.8rem, 1.3vw, 3rem);">SOBRE NOSOTROS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./contacto.html" style="font-size: clamp(0.8rem, 1.3vw, 3rem);">CONTACTOS </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./reservar.html" style="font-size: clamp(0.8rem, 1.3vw, 3rem);">RESERVAR</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./domicilios.html" style="font-size: clamp(0.8rem, 1.3vw, 3rem);">DOMICILIOS </a>
                            </li>
                            </ul>
                    </div>
            </div>
        </nav>
    
    </header>
    
    <main class="container__formu">
        <article class="seccionSede">
            <form action="../../../controlador/UsuarioController.php" method="POST" class="sede">
                <div id="tituloReservaAhora">
                    <h2 id="ReservaAhoraLetra">INICIA SESIÓN</h2>
                </div>
                <div id="seleccionaMesa">
                    <label  class="letraFormulario" for="">Ingresa tu Correo</label>
                    <input type="email" name="email" class="inputSeleccionarMesa" required>
                    <input type="hidden" name="accion" value="login">
                </div>
                
                <div id="seleccionaSede">
                    <label  class="letraFormulario" for="">Ingresa tu contraseña</label>
                    <input type="password" name="contrasena" class="inputSeleccionarSede" required>
                </div>

                <input type="submit" class="btn btn-primary"  style="background: #FFde59;color: black;border: none;margin:8px 45%;width: 70%;padding: 10px;font-size: 25px;">


                <div id="registrarse">
                    <label for="">¿No tienes cuenta aún?</label>
                    <a href="./registro.html">Regístrarse</a>
                </div>
            </form>
        </article>
    </main>

<!--Pié de página -->
<footer class="container__footer">
    <div class="footer">
            <div class="contacto">
                <h4 class="siguenos">Contacto</h4>
                    <p>Bryanbocanegra2004@gmail</p>
                    <p>Teléfono: 3156426181</p>
            </div>
            <div class="logos">
                <h4 class="siguenos">Síguenos</h4>
                <a href="#"><i class="fa-brands fa-facebook" style="color: #FFD43B;"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp" style="color: #FFD43B;"></i></a>
                <a href="#"><i class="fa-brands fa-instagram" style="color: #FFD43B;"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin" style="color: #FFD43B;"></i></a>
            </div>
            <div class="otros">
                <h4 class="siguenos" >Dirección:</h4>
                <p>Calle prueba N° 15-42 Bogotá D.C</p>
            </div>
    
    </div>
        <div class="derechos">
            <p> © Todos los derechos reservados - 2025 - Términos y condiciones</p>
        </div>
</footer>

</body>
</html>