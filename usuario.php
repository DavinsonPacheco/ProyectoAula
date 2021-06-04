<?php
class usuario
{
    private $cedula;
    private $primer_nombre;
    private $segundo_nombre;
    private $primer_apellido;
    private $segundo_apellido;
    private $celular;
    private $correo_user;
    private $contrasena_user;
    

    function setcedula($cedula){
		$this->cedula=$cedula;
	}
	function getcedula(){
		return $this->cedula;
    }
    function setprimer_nombre($primer_nombre){
		$this->primer_nombre=$primer_nombre;
	}
	function getprimer_nombre(){
		return $this->primer_nombre;
    }
    function setsegundo_nombre($segundo_nombre){
		$this->segundo_nombre=$segundo_nombre;
	}
	function getsegundo_nombre(){
		return $this->segundo_nombre;
    }
    function setprimer_apellido($primer_apellido){
		$this->primer_apellido=$primer_apellido;
	}
	function getprimer_apellido(){
		return $this->primer_apellido;
    }
    function setsegundo_apellido($segundo_apellido){
		$this->segundo_apellido=$segundo_apellido;
	}
	function getsegundo_apellido(){
		return $this->segundo_apellido;
    }
    function setcelular($celular){
		$this->celular=$celular;
	}
	function getcelular(){
		return $this->celular;
    }
    function setcorreo_user($correo_user){
		$this->correo_user=$correo_user;
	}
	function getcorreo_user(){
		return $this->correo_user;
    }
    function setcontrasena_user($contrasena_user){
		$this->contrasena_user=$contrasena_user;
	}
	function getcontrasena_user(){
		return $this->contrasena_user;
    }
    
}
?>