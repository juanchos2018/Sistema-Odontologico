<?php 
require_once("../../Clases/Conexion.php");
require_once("../../Clases/Usuarios.php");

$obj= new Usuarios();



echo json_encode( $obj->ObtenDatosUsuarios($_POST['idusuu']));
 
 ?>