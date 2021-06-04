<?php
error_reporting(E_ALL); 
ini_set('display_errors', '1');

require_once('gestionar.php');
require_once('usuario.php');

class crud{
	var $miConexion;
	function __construct($conexion){
		$this->miConexion=$conexion;
	}
	function consultarLogin($usuario){
	
		$lista=array(); 
		$correo_user=$usuario->getcorreo_user();
		$contrasena_user=$usuario->contrasena_user();
	    $sql="SELECT * FROM principal.usuario WHERE correo_user='$correo_user' and contrasena_user='$contrasena_user' ";
		$this->miConexion->consulta($sql);	
	
if($this->miConexion->cuentaFilas()>0){
    while($row=$this->miConexion->extraerRegistros()){
	   $usuario=new usuario();
	   $usuario->setcedula($row["cedula"]);
	   $usuario->setprimer_nombre($row["primer_nombre"]);
	   $usuario->setsegundo_nombre($row["segundo_nombre"]);
	   $usuario->setprimer_apellido($row["primer_apellido"]);
	   $usuario->setsegundo_apellido($row["segundo_apellido"]);
	   $usuario->settelefono($row["celular"]);
	   $usuario->setcorreo_user($row["correo_user"]);
	   $usuario->setcontrasena_user($row["contrasena_user"]);
	   $lista[]=$usuario;
       }
    }
	return $lista;
}
    
    
    
    	function insertarPersona($usuario){
		$sql="INSERT INTO principal.usuario(cedula,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,celular,correo_user,contrasena_user)
			  VALUES ('".$usuario->getcedula()."','".$usuario->getprimer_nombre()."','".$usuario->getsegundo_nombre()."'
			  ,'".$usuario->getprimer_apellido()."','".$usuario->getsegundo_apellido()."','".$usuario->getcelular()."',
			  '".$usuario->getcorreo_user()."','".$usuario->getcontrasena_user()."')";
		$this->miConexion->consulta($sql);
		if($this->miConexion->filasAfectadas()){
				return true;
		}else {
			return false;
		}
	}
    
    function insertarGestionar($gestionar){
			
	$sql="
			INSERT INTO principal.eventos(nombre_evento,fecha,organizador,descripcion,serial_e)
			  VALUES ('".$gestionar->getnombre_evento()."','".$gestionar->getfecha()."','".$gestionar->getorganizador()."','".$gestionar->getdescripcion()."','".$gestionar->getserial_e()."');
			  
			  
			  ";
	
			
			$this->miConexion->consulta($sql);	
		if($this->miConexion->filasAfectadas()){
				return true;
		}else {
			return false;
		}
	}
	 
    function listarGestionar(){
		$lista=array();
	     $sql="
		 	 
		SELECT  nombre_evento,fecha,organizador,descripcion,serial_e from principal.eventos
		 
		 ";
		
		$this->miConexion->consulta($sql);	
	
    if($this->miConexion->cuentaFilas()>0){
    while($row=$this->miConexion->extraerRegistros()){
	$gestionar=new gestionar();
	$gestionar->setnombre_evento($row["nombre_evento"]);
	$gestionar->setfecha($row["fecha"]);
	$gestionar->setorganizador($row["organizador"]);
    $gestionar->setdescripcion($row["descripcion"]);
	$gestionar->setserial_e($row["serial_e"]);
    
	$lista[]=$gestionar;
            }
	   }
	return $lista;

    }
    
        function eliminarGestionar($gestionar){
		$nombre_evento=$gestionar->getnombre_evento();
		$fecha=$gestionar->getfecha();
		$organizador=$gestionar->getorganizador();
		$descripcion=$gestionar->getdescripcion();
		$serial_e=$gestionar->getserial_e();
			
		$sql="
		
		DELETE FROM principal.eventos where serial_e='$serial_e';
		
		";
			
		$this->miConexion->consulta($sql);
		if($this->miConexion->filasAfectadas()){
				return true;
			}else {
			return false;
			}
		}
    
    	function modificarGestionar($gestionar){
		$nombre_evento=$gestionar->getnombre_evento();
		$fecha=$gestionar->getfecha();
		$organizador=$gestionar->getorganizador();
		$descripcion=$gestionar->getdescripcion();
		$serial_e=$gestionar->getserial_e();
		
     
	 	$sql= "
		
update principal.eventos set nombre_evento = '$nombre_evento', fecha = '$fecha', organizador = '$organizador', descripcion = '$descripcion' where serial_e = '$serial_e';


	 	";
			
		$this->miConexion->consulta($sql);
		if($this->miConexion->filasAfectadas()){
				return true;
		}else {
			return false;
		}
	}
    

    	function seleccionarGestionar($gestionar){
		
		$serial_e=$gestionar->getserial_e();
		$lista=array();
		
		 $sql="
		 
		SELECT  nombre_evento,fecha,organizador,descripcion,serial_e from principal.eventos
		
		WHERE serial_e='$serial_e'
		  
		 ";
	    
		
		$this->miConexion->consulta($sql);	
	
		if($this->miConexion->cuentaFilas()>0){
			while($row=$this->miConexion->extraerRegistros()){
				$gestionar=new gestionar();
				$gestionar->setnombre_evento($row["nombre_evento"]);
				$gestionar->setfecha($row["fecha"]);
				$gestionar->setorganizador($row["organizador"]);
				$gestionar->setdescripcion($row["descripcion"]);
				$gestionar->setserial_e($row["serial_e"]);
    
		$lista[]=$gestionar;
			}
		}
	return $lista;

	}
    

	
}

?>