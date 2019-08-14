<?php 
require_once("../../Clases/Conexion.php");
require_once("../../Clases/CitasMedicas.php");

$obj = new Citas();

$datos=array(
$_POST['txtdnicliente1'],
$_POST['cbmproceso'],
$_POST['txtpno']."-".$_POST['txtde'],
$_POST['txtco'],
$_POST['txidcitas']
);
// aaaaaaaaaaaaaaaaaaaaaaaaaaa--------------espera
echo $obj->RegistrarProcesodiente($datos);


 ?>
