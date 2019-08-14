<?php 
require_once("../../Clases/Conexion.php");
require_once("../../Clases/Usuarios.php");

$obj = new Usuarios();



$datos=array(
$_POST['codigoI'],
$_POST['nombreI'],
$_POST['claveI'],
$_POST['nivelI']
);

echo $obj->RegistrarUsuario($datos);


 ?>