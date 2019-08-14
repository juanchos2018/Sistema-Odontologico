<?php 

require_once("../../Clases/Conexion.php");
require_once("../../Clases/CitasMedicas.php");

$obj= new Citas();


$lista=array($_POST['idcl'],$_POST['idd']);


echo  $obj->BorrarEnfermedadDiente($lista);

 ?>