<?php 

require_once("../../Clases/Conexion.php");
require_once("../../Clases/CitasMedicas.php");

$obj= new Citas();

$dni="23232";
$lista=array($_POST['idcli'],$_POST['iddi']);


echo  $obj->EliminarDientes($lista);

 ?>