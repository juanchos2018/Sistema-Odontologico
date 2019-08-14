<?php 

//print_r($_POST);
require_once("../../Clases/Conexion.php");
require_once("../../Clases/CitasMedicas.php");

$obj= new Citas();


$datos=array(
$_POST['txtid'],
$_POST['txtfehca']." ".$_POST['txthora']);

echo $obj->ActualizaFechaCita($datos);


 ?>