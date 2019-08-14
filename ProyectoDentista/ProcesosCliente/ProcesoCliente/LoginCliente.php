<?php 

session_start();

require_once("../../Clases/Conexion.php");
require_once("../../ClasesCliente/Cliente.php");

$obj = new Clientes();


$datos= array(
$_POST['dni']);


echo $obj->LoginCliente($datos);


 ?>