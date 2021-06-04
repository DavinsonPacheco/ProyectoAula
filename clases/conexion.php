<?php
class conexion{

	private $conexion;
	private $resultado;
	
	public function conexion(){
		if(!isset($this->conexion)){ 
			$this->conexion= pg_connect("host=localhost port=5433 password=admin22 user=admin 
    dbname=hambre0") or die ("Error de conexion ".pg_last_error());		
			 //pg_connect("host=$host port=$puerto password=$pass user=$rol dbname=$bd") or die (pg_last_error());
		//pg_connect — Abre una conexión a PostgreSQL
		
		}
	}
	
	public function consulta($consulta){  
    $resultado = pg_query($this->conexion,$consulta);//pg_query — Ejecutar una consulta

    if(!$resultado){ 
      echo 'pgadmin Error: ' . pg_last_error($this->conexion);//pg_last_error — Obtiene una cadena con el último mensaje de error de la conexión
      exit;
    }
	$this->resultado=$resultado;
  }
	
	public function extraerRegistros(){
		if($fila=pg_fetch_array($this->resultado)){//pg_fetch_array - Obtener una fila como una matriz
			return $fila;
		}else{
			return false;
		}
	
	}
	public function extraerRegistrosr(){
		if($fila=pg_fetch_assoc($this->resultado)){//pg_fetch_array - Obtener una fila como una matriz
			return $fila;
		}else{
			return false;
		}
	
	}
	public function cuentaFilas(){
	
		return pg_num_rows($this->resultado) ;//pg_num_rows - Devuelve el número de filas en un resultado
	
	}
	
	public function filasAfectadas(){
		if(pg_affected_rows($this->conexion)){ //pg_affected_rows — Devuelve el número de registros afectados (filas)
			return true;//exito
		}else{
			return false;//fallo
		}
	}
	
	public function cerrar(){
		if(isset($this->conexion)){
			pg_close($this->conexion);
		}
	}
	
}
?>