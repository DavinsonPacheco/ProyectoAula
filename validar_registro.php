<?php

require_once('clases/conexion.php');
require_once('crud.php');
require_once('usuario.php');

//Obtenemos las variables 
$cedula= $_POST['cedula'];
$primer_nombre= $_POST['primer_nombre'];
$segundo_nombre= $_POST['segundo_nombre'];
$primer_apellido= $_POST['primer_apellido'];
$segundo_apellido= $_POST['segundo_apellido'];
$celular=$_POST['celular'];    
$correo_user= $_POST['correo_user'];
$contrasena_user= $_POST['contrasena_user'];


$conexion=new conexion();
$crud = new crud($conexion);
$usuario = new usuario();
$usuario->setcedula($cedula);
$usuario->setprimer_nombre($primer_nombre);
$usuario->setsegundo_nombre($segundo_nombre);
$usuario->setprimer_apellido($primer_apellido);
$usuario->setsegundo_apellido($segundo_apellido);
$usuario->setcelular($celular);
$usuario->setcorreo_user($correo_user);
$usuario->setcontrasena_user($contrasena_user);
$res=$crud->insertarPersona($usuario);

if(!$res){
  header('location:index.php');
    
}else{
     echo '<script language="javascript">alert("fallo al Registrarse");window.location.href="registrarse.php"</script>';
}

?>