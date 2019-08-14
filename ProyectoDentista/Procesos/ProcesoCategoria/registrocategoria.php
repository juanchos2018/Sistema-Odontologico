<?php 
require_once("../../Clases/Conexion.php");
require_once("../../Clases/Categoria.php");

$obj = new Categoria();



$datos=array(
$_POST['descripca']
);

echo $obj->RegistrarCategoria($datos);


 ?>