<?php 
require_once("../../Clases/Conexion.php");
require_once("../../Clases/Procedimiento.php");

$obj = new Procedimiento();



$datos=array(
$_POST['nombrepro'],
$_POST['grupopro']
);

echo $obj->RegistrarProcedimiento($datos);


 ?>