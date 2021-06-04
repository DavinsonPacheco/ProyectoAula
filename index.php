<!DOCTYPE html> 
<html lang="es">
<head>
    <title>Inicio</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
</head>
<body class="body11">
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
       
    <form action="validar.php" method="post" onSubmit="return validarfor();">
        <p class="formtext">
        <label for="correo">Correo electronico:</label>
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
        <input type="submit" value="Enviar" class="enviar_button">
        <br>
        <br>
        <a href="login_admin.php"><input type="button" value="Admin+" class="enviar_button"> </a>

        </center>
        </p>
    </form>
    
        
    <p>
    <center>
    <input type="submit" value="Registrarse" onclick="location.href='registrarse.php'" class="enviar_button">
    </center>
    </p>
    </div>
    
    
    
    
    
    
    
    
    
    
    <script>
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