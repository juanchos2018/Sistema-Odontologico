<?php 
	
	require_once "../../Clases/Conexion.php";
	require_once "../../Clases/CitasMedicas.php";

	$obj= new Citas();

	echo json_encode($obj->obtenDatosProducto($_POST['idproducto']))

 ?>