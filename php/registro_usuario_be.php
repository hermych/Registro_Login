<?php
    //## ACCEDEMOS A LA BASE DE DATOS CON LA OJA DE CONEXION QUE HICIMOS
    include ("conexion_be.php");

    // ##CAPTURAMOS LOS VALORES EN VARIABLES
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // ##HACEMOS LA CONSULTA
    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) VALUES     ('$nombre_completo', '$correo', '$usuario', '$contrasena')";
    
    // ## EJECUTAMOS LA CONSULA
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../index.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Error al registrarse, vuelva a intentarlo!!");
                window.location = "../index.php";
            </script>
        ';
    }

    //## CERRAMOS LA CONEXION
    mysqli_close($conexion);
?>