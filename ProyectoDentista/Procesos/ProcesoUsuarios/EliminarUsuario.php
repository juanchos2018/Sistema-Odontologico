<?php 

require_once("../../Clases/Conexion.php");
require_once("../../Clases/Usuarios.php");

$obj= new Usuarios();


echo  $obj->EliminarUsuario($_POST['CodigoUsu']);

 ?>