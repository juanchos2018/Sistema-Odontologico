<?php 
require_once("../../Clases/Conexion.php");
require_once("../../Clases/Tarifa.php");

$obj= new Tarifa();



echo json_encode( $obj->ObtenDatosTarifa($_POST['idusuu']));
 
 ?>