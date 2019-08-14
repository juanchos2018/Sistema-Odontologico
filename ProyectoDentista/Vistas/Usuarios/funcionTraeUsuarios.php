<?php
	
	require_once("../../Clases/Conexion.php"); 
	$c= new Conectar();

	$consulta = "SELECT * FROM usuarios";
	$dbx=conexion();
	$registro = mysql_query($consulta,$dbx);
	
	$tabla = "";
	
	while($row = mysql_fetch_array($registro)){		

		
		
		$tabla.='{
				  "codigo":"'.$row['Codigo'].'",
				  "nombre":"'.$row['Nombre'].'",
				  "clave":"'.$row['Clave'].'",
				  "nivel":"'.$row['Nivel'].'"
			
				},';		
	}	

	//eliminamos la coma que sobra
	$tabla = substr($tabla,0, strlen($tabla) - 1);

	echo '{"data":['.$tabla.']}';	

?>