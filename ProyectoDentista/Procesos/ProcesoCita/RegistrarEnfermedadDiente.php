<?php 
require_once("../../Clases/Conexion.php");
require_once("../../Clases/CitasMedicas.php");

$obj = new Citas();



$datos=array(
$_POST['txtdnicliente'],
$_POST['cboiddiente'],
$_POST['cboenfermedad'],
$_POST['txtidcita2']
);

echo $obj->RegistrarEnfermedadPaciente($datos);


 ?>
