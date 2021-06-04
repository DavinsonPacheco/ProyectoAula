<!DOCTYPE html> 
<html lang="es">
	<head>
    <title>PIACH || UPDATE</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos3.css">
    <link rel="stylesheet" href="fonts.css">
    </head>	
    <body class="body3"> 
		  			<?php
                    require_once('clases/conexion.php');
                    require_once('crud.php');
                    $conexion=new conexion();
                    $crud=new crud($conexion);
                    $gestionar=new gestionar();
                    $gestionar->setserial_e($_POST['serial_e']);
                    $res=$crud->seleccionarGestionar($gestionar);
                    $nombre_evento='';
                    $fecha='';
                    $organizador='';
                    $descripcion='';
                    $serial_e='';             
                    if(count($res)){
                        $gestionar=$res[0];
                        $nombre_evento=$gestionar->getnombre_evento();
		                    $fecha=$gestionar->getfecha();
		                    $organizador=$gestionar->getorganizador();
		                    $descripcion=$gestionar->getdescripcion();
		                    $serial_e=$gestionar->getserial_e();
                
                    	}
                    ?>
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
        <form action="validar_actualizar.php" method="post" onSubmit="return validarfor3();" id="myform">
  <div class="containers"> 
       <center>
            <div class="formato">
            <p class="formtext">
            <label>Nombre del evento:</label>
            <br>
            <input type="text" name="nombre_evento" id="nombre_evento" class="ingreso3"  value="<?php echo $nombre_evento;?>">
            <br>
            <br>
            <label>Fecha del evento:</label>  
            <input type="date" name="fecha" id="fecha" class="ingreso3" value="<?php echo $fecha;?>">
            <br> 
            <br> 
            <label>Organizador del evento:</label>
            <br>
            <input type="text" name="organizador" id="organizador" class="ingreso3" value="<?php echo $organizador;?>">
            <br>
            </p>     
            <p class="formtext"> 
            <label>Descripcion del evento:</label>
            <br>        
            <input type="text"  name="descripcion" id="descripcion" class="ingreso3" value="<?php echo $descripcion;?>">   
            <br>
            <br>
            <label>Serial del evento:</label>
            <br>
            <input type="number" name="serial_e" id="serial_e" class="ingreso33" value="<?php echo $serial_e;?>" readonly>
            <br>
            <br> 
            </p>
            </div>
      </center>
            </div>
            <center>
            <input type="submit" value="Actualizar" class="enviar_button">
            <input type="button" value="Volver" onclick="location.href='consultar.php'" class="enviar_button">
            </center>
        </form>
        <script>
             function limpiarFormulario(){
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