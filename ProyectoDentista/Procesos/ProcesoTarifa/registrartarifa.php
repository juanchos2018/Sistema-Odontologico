<?php 
require_once("../../Clases/Conexion.php");
require_once("../../Clases/Tarifa.php");

$obj = new Tarifa();



$datos=array(
$_POST['procedi'],
$_POST['cate'],
$_POST['costo']
);

echo $obj->RegistrarTarifa($datos);


 ?>