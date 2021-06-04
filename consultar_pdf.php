<!DOCTYPE html> 
<html lang="es">
<head>
    <title>VISTA PDF|| Inicio</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="fonts.css">
    </head>
    <body class="body3">
        <center>
        <table class="table">
			<thead>
				<tr>
                    <th>Evento</th>                                                          
                     <th>Fecha del evento</th>
                     <th>Responsable</th>
                     <th>Descripcion</th>
                     <th>Serial</th>                  
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
             "<tr>
             <td>".$gestionar->getnombre_evento()."</td>
             <td>".$gestionar->getfecha()."</td>  
             <td>".$gestionar->getorganizador()."</td>
             <td>".$gestionar->getdescripcion()."</td>               
             <td>".$gestionar->getserial_e()."</td>            
             <td>

                            </td></tr>";	
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