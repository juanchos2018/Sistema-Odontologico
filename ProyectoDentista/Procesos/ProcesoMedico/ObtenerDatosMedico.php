<?php 
require_once("../../Clases/Conexion.php");
require_once("../../Clases/Medicos.php");

$obj= new Medicos();



echo json_encode($obj->ObtenDatosMedicos($_POST['idni']));
 
 ?>