<?php 

//print_r($_POST);
require_once("../../Clases/Conexion.php");
require_once("../../Clases/Usuarios.php");

$obj= new Usuarios();


$datos=array(
$_POST['codigoU'],
$_POST['nombreU'],
$_POST['nivelU']);

echo $obj->ActualizaUsuario($datos);


 ?>