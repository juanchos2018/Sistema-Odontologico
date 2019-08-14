<?php 
require_once("../../Clases/Conexion.php");
require_once("../../Clases/Medicos.php");

$obj = new Medicos();



$datos=array(
$_POST['nombrem'],
$_POST['apellidom'],
$_POST['dnim'],
$_POST['rucm'],
$_POST['colegiaturam'],
$_POST['telefonom'],
$_POST['dreccionm'],
$_POST['emailm'],
$_POST['sexom'],
$_POST['fecham']
);

echo $obj->RegistrarMedico($datos);


 ?>
