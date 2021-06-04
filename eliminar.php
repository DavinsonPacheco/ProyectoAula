<?php
require_once('clases/conexion.php');
require_once('crud.php');
$conexion=new conexion();
$crud=new crud($conexion);
$gestionar=new gestionar();
$gestionar->setserial_e($_POST['serial_e']);
$res=$crud->eliminargestionar($gestionar);
if(!$res){
    
    header('location:consultar.php');
    
}else{
    echo '<script language="javascript">alert("Error de eliminacion!");window.location.href="consultar.php"</script>';

}
?>