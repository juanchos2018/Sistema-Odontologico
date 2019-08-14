<?php 

//print_r($_POST);
require_once("../../Clases/Conexion.php");
require_once("../../Clases/CitasMedicas.php");

$obj= new Citas();


$datos=array(
$_POST['txidcitas'],
$_POST['txtfinal']);

echo $obj->ActualizaCita($datos);


 ?>