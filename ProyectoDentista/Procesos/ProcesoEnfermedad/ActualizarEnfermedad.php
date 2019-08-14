<?php 

//print_r($_POST);
require_once("../../Clases/Conexion.php");
require_once("../../Clases/Enfermedad.php");

$obj= new Enfermedad();


$datos=array(
$_POST['codigoU'],
$_POST['desu'],
$_POST['estadou']);



echo $obj->ActualizaEnfermedad($datos);


 ?>