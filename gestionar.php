<?php
class gestionar{
    private $nombre_evento;
    private $fecha;
    private $organizador;
	private $descripcion;
    private $serial_e;

    function setnombre_evento($nombre_evento){
		$this->nombre_evento=$nombre_evento;
	}
	function getnombre_evento(){
		return $this->nombre_evento;
    }
    function setfecha($fecha){
		$this->fecha=$fecha;
	}
	function getfecha(){
		return $this->fecha;
    }
    function setorganizador($organizador){
		$this->organizador=$organizador;
	}
	function getorganizador(){
		return $this->organizador;
    }
    
    function setdescripcion($descripcion){
		$this->descripcion=$descripcion;
	}
	function getdescripcion(){
		return $this->descripcion;
    }
    
     function setserial_e($serial_e){
		$this->serial_e=$serial_e;
	}
	function getserial_e(){
		return $this->serial_e;
    }
     
    }
?>