<!DOCTYPE html> 
<html lang="es">
<head>
    <title>PIACH || EVENTOS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos3.css">
    <link rel="stylesheet" href="fonts.css">
    </head>
    <body class="body3">
       <header class="header">
    <div class="contenedor">
        <img src="img/minilogo.png" class="logo">
        <span class="icon-menu" id="btn-menu"></span>
        <nav class="nav" id="nav">
        <ul class="menu">
                 <li class="menu__item"><a class="menu__link" href="crear_evento.php" style="text-decoration:none" > Crear un Evento</a></li>
              <li class="menu__item"><a class="menu__link" href="consultar.php" style="text-decoration:none" >Consultar Eventos</a></li>
                 
            <li class="menu__item"><a class="menu__link" href="crearPdf.php" style="text-decoration:none" > Generar reporte de Eventos</a></li>
               <li class="menu__item"><a class="menu__link" href="exit.php" style="text-decoration:none">Salir</a></li>            
         
            
            
               
            </ul>
        </nav>
        </div>
	    </header>
        <form action="validar_evento.php" method="post" onSubmit="return validarfor3();" id="myform">
        <div class="containers"> 
            <center>
            <div class="formato">
            <p class="formtext">
            <label>Nombre del evento:</label>
            <br>
            <input type="text" name="nombre_evento" id="nombre_evento" class="ingreso3">
            <br>
            <br>
            <label>Fecha del evento:</label>  
            <input type="date" name="fecha" id="fecha" class="ingreso3">
            <br> 
            <br> 
            <label>Organizador del evento:</label>
            <br>
            <input type="text" name="organizador" id="organizador" class="ingreso3">
            <br>
            <br>
            </p>     
            <p class="formtext">  
            <label>Descripcion del evento:</label>
            <br>    
            <textarea  name="descripcion" id="descripcion" class="ingreso3" placeholder="Describe el evento"></textarea>
            <br>
            <br>
            <label>Serial del evento:</label>
            <br>
            <input type="number" name="serial_e" id="serial_e" class="ingreso3">
            <br>
            <br> 
            </p>
            </div>
                </center>
            </div>  
            <br>
            <center>
            <input type="submit" value="Enviar" class="enviar_button">
            <input type="button" value="Limpiar formato" onclick="limpiar()" class="enviar_button">
            <input type="button" value="Regresar" onclick="location.href='consultar.php'" class="enviar_button">
            </center>
            <br>
        </form>
        <script>
                        
             function limpiar(){
             document.getElementById("myform").reset();
            }
            window.addEventListener("load", function(){
            document.getElementById("loader").classList.toggle("loader2")
            }); 
            function validarfor3(){
            var co1 = document.getElementById("nombre_evento").value;
            var co2 = document.getElementById("fecha").value;
            var co3 = document.getElementById("organizador").value;
            var co5 = document.getElementById("descripcion").value;
            var co6 = document.getElementById("serial_e").value;
            if (co1 == "" && co2 == "" && co3 == ""  && co6 == ""){
                alert("Los campos obligatorios!");
                return false;
                }
            if (co3 == ""){
                alert("Escriba un organizador del evento!");
                return false;
                }
            if (co2 == ""){
                alert("Los eventos requieren una fecha!");
                return false;
                }
            if (co6 == ""){
                alert("El serial es obligatorio!");
                return false;
                }
            if (co1 == ""){
                alert("El evento requiere un evento!");
                return false;
                }
            }
        </script>
    </body>
</html>