<?php 
require_once("../../Clases/Conexion.php");
require_once("../../Clases/Pacientes.php");

$obj = new Pacientes();



$datos=array(
$_POST['txtnumero'],
$_POST['txtmensaje']);

echo $obj->EnviarMensajes($datos);


 ?>
