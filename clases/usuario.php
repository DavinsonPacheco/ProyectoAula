<?php
    class usuario{
        public $miConexion;
        function __construct($conexion){
            $this->miConexion = $conexion;
        }
        function login($correo, $pass){
            $lista = array();
            $sql = "SELECT * FROM principal.usuario
            WHERE correo_user = '$correo'
            AND contrasena_user = '$pass'";
            $this->miConexion->consulta($sql);
                $resultado = $this->miConexion->cuentaFilas();
            if($resultado > 0){
                $lista = $this->miConexion->extraerRegistros();
            }
            return $lista;
        }
         function login2($correo, $pass){
            $lista = array();
            $sql = "SELECT * FROM principal.administrador
            WHERE correo_user = '$correo'
            AND contrasena_user = '$pass'";
            $this->miConexion->consulta($sql);
                $resultado = $this->miConexion->cuentaFilas();
            if($resultado > 0){
                $lista = $this->miConexion->extraerRegistros();
            }
            return $lista;
        }
    }


?>