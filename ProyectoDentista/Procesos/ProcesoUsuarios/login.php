<?php 

session_start();

require_once("../../Clases/Conexion.php");
require_once("../../Clases/Usuarios.php");

$obj = new Usuarios();


$datos= array(
$_POST['codigo'],
 $_POST['clave'] 
);


echo $obj->LoginUser($datos);


 ?>