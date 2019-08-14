<?php 
require_once("../../Clases/Conexion.php");
require_once("../../Clases/Enfermedad.php");

$obj = new Enfermedad();



$datos=array(
$_POST['codigoi'],
$_POST['descripcioni'],
$_POST['estadoi']
);

echo $obj->RegistrarEnfermedad($datos);


 ?>