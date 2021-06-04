<!DOCTYPE html> 
<html lang="es">
<head>
    <title>ADMIN</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="body4">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="divform">
       
    <form action="validar_admin.php" method="post" onSubmit="return validarfor();">
        <p class="formtext">
        <label for="correo">Correo administrador:</label>
        <br>
        <input type="email" name="correo" id="correo" placeholder="" class="ingreso">
        <br>
        <br>
        <label for="contrasena">Contraseña:</label>
        <br>
        <input type="password" name="contrasena" id="contrasena" placeholder="" class="ingreso">
        <br>
        <br>
        <center>
        <input type="submit" value="Ingresar" class="enviar_button">
        <br>
        <br>
        <input type="button" value="Regresar"  onclick="location.href='index.php'" class="enviar_button">

        </center>
        </p>
    </form>
    <p>
    </p>
    </div>
    <script>
      window.addEventListener("load", function(){
            document.getElementById("loader").classList.toggle("loader2")
            });  
    function validarfor(){
            var cor = document.getElementById("correo").value; 
            var con = document.getElementsByName("contrasena")[0].value;
            var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if ((cor == "") && (con == "")){
                alert("Los campos son requeridos");
                return false;
            }
            if ((cor == "") || !expr.test(cor) ){
                alert("El campo correo esta vacio o es incorrecto");
                return false;
            }
            if ((con == "")){
                alert("El campo contraseña está vacio o es incorrecto");
                return false;
            }
        }
    </script>
</body>
</html>