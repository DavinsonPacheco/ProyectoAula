
<?php
    $correo = $_POST['correo'];
    $pass = $_POST['contrasena'];

    if($correo != "" && $pass != ""){
        include("clases/conexion.php");
        include("clases/usuario.php");
        $conexion = new conexion();
        $usuario = new usuario($conexion);
        $respuesta = $usuario->login2($correo, $pass);
        if($respuesta){
         
            
        echo '<script language="javascript">alert("Login admin Exitoso");window.location.href="consultar.php"</script>';

        }
        else{
         echo '<script language="javascript">alert("Error de autentificacion");window.location.href="index.php"</script>';

        }
    }
?>



