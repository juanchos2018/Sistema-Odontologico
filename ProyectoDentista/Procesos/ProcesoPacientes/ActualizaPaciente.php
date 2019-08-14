<?php 

//print_r($_POST);
require_once("../../Clases/Conexion.php");
require_once("../../Clases/Pacientes.php");

$obj= new Pacientes();


$datos=array(
$_POST['nombreu'],
$_POST['apellidou'],
$_POST['dniu'],
$_POST['telefonou'],
$_POST['drieccionu'],
$_POST['emailu'],
$_POST['enfermedadu'],
$_POST['alergiau'],
$_POST['sexou'],
$_POST['fechanacu']);





echo $obj->ActualizaPaciente($datos);


 ?>