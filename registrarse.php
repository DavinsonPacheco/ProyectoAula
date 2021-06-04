<!DOCTYPE html> 
<html lang="es">
    <head>
        <title>PIACH || Registrarse</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body class="body2">
    <center>  
        <div class="container">
        <br>
         <form action="validar_registro.php" method="post" onSubmit="return validarfor_registro();" id="myform">
            <p class="formtext">
            <label>Cedula de ciudadania:</label>
            <br>
            <input type="text" name="cedula" id="cedula"  placeholder=""   class="ingreso2"
            maxlength="15" pattern="^[0-9]+">
            <br>
            <br>
            <label>Pirmer nombre:</label>
            <br>
            <input type="text" name="primer_nombre" id="primer_nombre" placeholder="" class="ingreso2"
            pattern="^[a-zA-Z\s]{3,254}" title="No puede conter caracteres especiales como la (ñ) o tildes (ó)">
            <br>
            <br> 
            <label>Segundo nombre:</label>
            <br>
            <input type="text" name="segundo_nombre" id="segundo_nombre" placeholder=""   class="ingreso2"
            pattern="[a-zA-Z\s]{3,254}" title="No puede conter caracteres especiales como la (ñ) o tildes (ó)">
            <br>
            <br> 
            <label>Pirmer apellido:</label>
            <br>
            <input type="text" name="primer_apellido" id="primer_apellido" placeholder=""  class="ingreso2"
            pattern="[a-zA-Z\s]{3,254}" title="No puede conter caracteres especiales como la (ñ) o tildes (ó)">
            <br>
            <br>  
            <label>Segundo apellido:</label>
            <br>
            <input type="text" name="segundo_apellido" id="segundo_apellido" placeholder=""  class="ingreso2"
            pattern="[a-zA-Z\s]{3,254}" title="No puede conter caracteres especiales como la (ñ) o tildes (ó)">
            <br>
            <br> 
            <label>Celular:</label>
            <br>
            <input type="text" name="celular" id="celular" placeholder=""  class="ingreso2" minlength="10" maxlength="10"
            pattern="^[0-9]+">
            <br>
            <br>  
            <label>Correo electronico:</label>
            <br>
            <input type="email" name="correo_user" id="correo_user" placeholder=""  class="ingreso2">
            <br>
            <br>  
            <label>Contraseña:</label>
            <br>
            <input type="password" name="contrasena_user" id="contrasena_user" placeholder="" class="ingreso2" minlength="8" title="Debe contener 8 caracteres como minimo">
             <br>
             <br>
             <center>
            <input type="submit" value="Enviar" class="enviar_button">
            </center>
            </p>
        </form>
        </div>
        <center>
        <input type="button" value="Limpiar formulario" onclick="limpiarFormulario()" class="enviar_button">
        <input type="button" value="Regresar"  onclick="location.href='index.php'" class="enviar_button">
        </center>
        </center>  
        <br>
    <script>     
        window.addEventListener("load", function(){
            document.getElementById("loader").classList.toggle("loader2")
            });   
        function limpiarFormulario(){
             document.getElementById("myform").reset();
        }
        function validarfor_registro(){
            var co1 = document.getElementById("correo_user").value; 
            var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var co2 = document.getElementById("primer_nombre").value; 
            var co4 = document.getElementById("primer_apellido").value;
            var co6 = document.getElementById("celular").value;
            var co8 = document.getElementsByName("contrasena_user")[0].value;
            var co3 = document.getElementsByName("codigo_user")[0].value;
            if (co1 == "" && co2 == "" && co3 == "" && co4 == "" && co6 == "" && co8 == "" && co3 == ""){
                alert("Los campos obligatorios estan vacios!");
                return false;
                }
            if (co3 == ""){
                alert("La cedula es obligatoria");
                return false;
                }
            if (co2 == ""){
                alert("El primer nombre es obligatorio");
                return false;
                }
            if (co4 == ""){
                alert("El primer apellido es obligatorio");
                return false;
                }
            if (co6 == ""){
                alert("El celular es obligatorio");
                return false;
                }
            if ((co1 == "") || !expr.test(co1) ){
                alert("El campo correo electronico esta vacio o es incorrecto");
                return false;
                }
            if (co8 == ""){
                alert("La contraseña es obligatorio");
                return false;
                }
            }
    </script>  
    </body>
</html>