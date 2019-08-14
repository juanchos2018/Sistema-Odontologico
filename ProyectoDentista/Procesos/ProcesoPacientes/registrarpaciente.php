<?php 
require_once("../../Clases/Conexion.php");
require_once("../../Clases/Pacientes.php");

$obj = new Pacientes();



$datos=array(
$_POST['nombrei'],
$_POST['apellidoi'],
$_POST['dni'],

$_POST['copais']." ". $_POST['telefonoi'],
$_POST['drieccioni'],
$_POST['emaili'],
$_POST['enfermedadi'],
$_POST['alergiai'],
$_POST['sexoi'],
$_POST['fechanaci']
);

echo $obj->RegistrarPaciente($datos);


 ?>
