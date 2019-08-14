<?php 
require_once("../../Clases/Conexion.php");
require_once("../../Clases/Pacientes.php");

$obj= new Pacientes();


	
echo json_encode($obj->ObtenDatosPaciente($_POST['idnip']));
 

 ?>	