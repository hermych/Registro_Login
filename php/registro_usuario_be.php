<?php
    //## ACCEDEMOS A LA BASE DE DATOS CON LA OJA DE CONEXION QUE HICIMOS
    include ("conexion_be.php");

    // ##CAPTURAMOS LOS VALORES EN VARIABLES
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
        //encriptamiento de contraseña
    $contrasena_encriptada = hash('sha512', $contrasena);

    // ##HACEMOS LA CONSULTA
    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) VALUES     ('$nombre_completo', '$correo', '$usuario', '$contrasena_encriptada')";
    
    //## VERIFICAR QUE EL CORREO NO SE REPITA EN LA BD
    $consulta = "SELECT * FROM usuarios WHERE correo = '$correo' ";
    $verificar_correo = mysqli_query($conexion, $consulta);
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya existe!, Intente otro");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    //## VERIFICAR QUE EL USUARIO NO SE REPITA EN LA BD
    $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' ";
    $verificar_usuario = mysqli_query($conexion, $consulta);
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("Este Usuario ya existe!, Intente otro");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

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