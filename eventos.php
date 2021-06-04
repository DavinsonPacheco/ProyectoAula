<!DOCTYPE html> 
<html lang="es">
<head>
    <title>PIACH</title>
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
            <li class="menu__item"><a class="menu__link" href="home.php" style="text-decoration:none" >Home</a></li>
               <li class="menu__item"><a class="menu__link" href="eventos.php" style="text-decoration:none" >Eventos</a></li>
               <li class="menu__item"><a class="menu__link" href="about.php" style="text-decoration:none">About</a></li>
               <li class="menu__item"><a class="menu__link" href="exit.php" style="text-decoration:none">Salir</a></li>
            </ul>
        </nav>
        </div>

    
    </header>
        <center>
        <table class="table">
			<thead>
				<tr>
                    <th>Evento</th>                                                          
                     <th>Fecha</th>
                     <th>Responsable</th>
                     <th>Descripcion</th>            
                    <th>Donaciones</th>  
				</tr>
			</thead>        
       <?php 
         require_once('clases/conexion.php');
         require_once('crud.php');         
         $conexion=new conexion();
         $crud=new crud($conexion);
         $res=$crud->listarGestionar();
         if(count($res)){
             for($i=0;$i<count($res);$i++){
                 $gestionar=$res[$i];
             echo 
                 "
             <tr>
             
             <td>".$gestionar->getnombre_evento()."</td>
             <td>".$gestionar->getfecha()."</td>  
             <td>".$gestionar->getorganizador()."</td>
             <td>".$gestionar->getdescripcion()."</td>  
             <td>  <form action='info.php' method='post'>
                                <div class='form-group'>
                                  <input type='text' style='display:none '>
                                </div>
                                  <button type='submit' class='enviar_button1'>Mas Info</button>
                              </form>
                              </td>
            </tr>";	
             }
         }else{
          echo "<td>NO SE ENCUENTRAN EVENTOS DISPONIBLES</td>'";
         }

         ?>                
	</table>
        </center>
        <br>
        <script>
            window.addEventListener("load", function(){
            document.getElementById("loader").classList.toggle("loader2")
            });    
    function confirmar(){
    var mensaje;
    var opcion = confirm("Eliminar evento?");
    if (opcion == true) {
        
	} else {
	    return false;
	   }
    }       
        </script>
    </body>
</html>

