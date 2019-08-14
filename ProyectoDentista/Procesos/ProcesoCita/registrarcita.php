<?php 
require_once("../../Clases/Conexion.php");
require_once("../../Clases/CitasMedicas.php");

$obj = new Citas();



// $datos=array(
// $_POST['medicoi'],
// $_POST['pacientei'],
// $_POST['horai'],
// $_POST['fechai'],
// $_POST['observacioni'],
// $_POST['estadoi']
// )



// echo $obj->RegistrarCita($datos);

$datos2 = array(
$_POST['txttitulo'],
$_POST['medicoi'],
$_POST['pacientei'],
$_POST['txtcolor'],
$_POST['colorletra'],
$_POST['observacioni'],
$_POST['fechai']." ".$_POST['horai'],
$_POST['estadoi']);

echo $obj->RegistrarCita2($datos2);
// <input type="color" value="#ff0000" id="txtcolor"  name="txtcolor"> <br>
// <input type="text" name="color" id="color" value="#FFFFFF">

 ?>
