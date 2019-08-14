<!DOCTYPE html>
<html>
<head>
	<title></title>


<?php require_once "dependencias.php" ?>
</head>
<body>
	<?php
$date = date ("H");
echo $date;
echo "<br>";
echo "<html><body>";

if ($date < 12) echo "Buenos dias! "."<img src='../img/fondo.jpg' title='dia'/>";
else if ($date < 18) echo "Buenas tardes! "."<img src='../img/fondo2.jpg' title='tarde'/>";
else echo "Buenas noches! "."<img src='http://jclurita@www.jrclurita.com/web_movil/img/noche.jpg' title='noche'/>";
echo "</body></html>";
?>



	<form id="frmmensaje">
			<label>Ingrese numero</label>
			<input type="text" name="txtnumero" id="txtnumero"> <br>
			<label>ingrese mensaje</label> <br>
			<input type="text" name="txtmensaje" id="txtmensaje"> <br>
			<button type="button"  name="btnenviar"  id="btnenviar"> EnviarMensaje</button> <br>
 	<label>ponde numero</label>
			<input type="text" name="txt1" id="txt1" oninput="numero();"> 
			<br> <br>
		</form>
</body>
</html>

<script type="text/javascript">
	
	function numero(){
		var valor =$('#txt1').val();
		if (valor=="1") {
			alert("el numero es 1");
		}
		if (valor=="2") {
			alert("el numerom es 2");
		}
	}
</script>
<script type="text/javascript"> // PARA REGSITRAR USUARIOS
		
	$(document).ready(function(){
		$('#btnenviar').click(function()
		{
			//alert("hola");
		datos=$('#frmmensaje').serialize();
		$.ajax({
			type:"POST",
			data:datos,
		//	url:"../Procesos/ProcesoPacientes/EnviarMensaje.php",
				url:"example.php",
				
			success:function(r){		

 			if (r==1) { 				
 				alertify.alert("Enviado con Exito");				
 			}
 			else{
 				//console.log(r);
 				alertify.error("Nose pudo Actualizar");
 			}
			}
			});
		 });
	});
</script>
