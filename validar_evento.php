<?php

require_once('clases/conexion.php');
require_once('crud.php');
require_once('gestionar.php');

$nombre_evento= $_POST['nombre_evento'];
$fecha= $_POST['fecha'];
$organizador= $_POST['organizador'];
$descripcion= $_POST['descripcion'];
$serial_e= $_POST['serial_e'];


$conexion=new conexion();
$crud = new crud($conexion);
$gestionar = new gestionar();
$gestionar->setnombre_evento($nombre_evento);
$gestionar->setfecha($fecha);
$gestionar->setorganizador($organizador);
$gestionar->setdescripcion($descripcion);
$gestionar->setserial_e($serial_e);
$res=$crud->insertarGestionar($gestionar);


if(!$res){
    
   header('location:consultar.php');
    
}else{
     echo '<script language="javascript">alert("Error al crear grupo");window.location.href="crear_evento.php"</script>';

}

?>