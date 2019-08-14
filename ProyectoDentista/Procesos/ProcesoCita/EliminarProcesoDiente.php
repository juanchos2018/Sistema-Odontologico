<?php 

require_once("../../Clases/Conexion.php");
require_once("../../Clases/CitasMedicas.php");

$obj= new Citas();


$lista=array($_POST['idcli'],$_POST['iddi']);


echo  $obj->BorrarProcesoDiente($lista);

 ?>