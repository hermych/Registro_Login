<?php
    //##Para trabajar con sesiones se inicia con esto
    session_start();

    //##Validamos que haya una sesion
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesion");
               
                window.location = "../index.php";
            </script>
        ';
        //destruimos la sesion que iniciamos al comienzo
        session_destroy();
        //Paramos el codigo para que no se ejecute el resto
        die();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido al sistema</h1>
    <a href="cerrar_sesion.php">Cerrar Sesion</a>
</body>
</html>