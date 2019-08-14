<?php 

//print_r($_POST);
require_once("../../Clases/Conexion.php");
require_once("../../Clases/Medicos.php");

$obj= new Medicos();


$datos=array(
	
$_POST['idu'],	
$_POST['nombremu'],
$_POST['apellidomu'],
$_POST['dnimu'],
$_POST['rucmu'],
$_POST['colegiaturamu'],
$_POST['telefonomu'],
$_POST['dreccionmu'],
$_POST['emailmu'],
$_POST['sexomu']
);



echo $obj->ActualizaMedico($datos);


 ?>