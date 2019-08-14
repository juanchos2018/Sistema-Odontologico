<?php 
require_once("../../Clases/Conexion.php");
require_once("../../Clases/Enfermedad.php");

$obj= new Enfermedad();



echo json_encode( $obj->ObtenDatosEnfer($_POST['ide']));
 
 ?>