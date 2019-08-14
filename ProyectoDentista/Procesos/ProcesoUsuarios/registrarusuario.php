<?php 
require_once("../../Clases/Conexion.php");
require_once("../../Clases/Usuarios.php");

$obj = new Usuarios();



$datos=array(
$_POST['codigo'],
$_POST['nombre'],
$_POST['clave'],
$_POST['nivel']
);

echo $obj->RegistrarUsuario($datos);


 ?>