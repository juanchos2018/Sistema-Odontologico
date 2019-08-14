<?php 
require_once("../../Clases/Conexion.php");
require_once("../../Clases/Tarifa.php");

$obj = new Tarifa();



$datos=array(
$_POST['codiu'],
$_POST['procediu'],
$_POST['cateu'],
$_POST['costou']
);

echo $obj->ActualizaTarifa($datos);


 ?>