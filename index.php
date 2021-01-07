<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: bienvenido.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/estilos/estilos.css">
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar a la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes una cueta?</h3>
                    <p>Registrate para que puedas iniciar sesion</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!-- Formulario Login y Registro-->
            <div class="contenedor__login-register">
                <!-- Login -->
                <form action="php/login_usuario_be.php" class="formulario__login" method="POST">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>
                <!-- Registro -->
                <form action="php/registro_usuario_be.php" class="formulario__register" method="POST">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main> 
    <script src="assets/js/script.js"></script>
</body>
</html>