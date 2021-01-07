<?php
    //##PARA TRABAJAR CON SESIONES SIEMPRE HAY QUE PONER EL SESSION_START()
    session_start();
    
    //##HACEMOS LA CONEXION
    include("conexion_be.php");

    //##DECLARAMOS LAS VARIABLES
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
        //desencriptamos contrasena
    $contrasena_desencriptada = hash('sha512', $contrasena);
    
    //##VALIDAMOS EL LOGIN
        //consulta
    $consulta = "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena_desencriptada'";
    $validar_login = mysqli_query($conexion, $consulta);

    //##CONDICIONAL PARA VER SI SE CUMPLE LA VALIDACION
    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: bienvenido.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existe. Por favor verifique los datos introducidos");
                window.location = "../index.php"
            </script>
        ';
        exit;
    }
?>