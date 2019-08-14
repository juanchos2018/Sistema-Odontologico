<?php 

require_once("../../Clases/Conexion.php");
require_once("../../Clases/CitasMedicas.php");

$obj= new Citas();


echo  $obj->EliminarCitaMedica($_POST['idcitas']);

 ?>