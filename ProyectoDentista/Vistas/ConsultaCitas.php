
<?php 
session_start();

if (isset($_SESSION['codigo']) ) {
	# code...
//	echo $_SESSION;


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>PAcientes</title>

	<?php require_once("menu.php") ?>
	

</head>
<body>

	<div class="container">
	<br>
	<div class="row">
		
		<div  class="col-sm-10" id="tablacitasload" ></div>
	</div>
</div>
<br> <br>
<hr>


</body>
</html>




<script type="text/javascript"> // PARA MOSTRAR LA TABLA  USUARIOS
	$(document).ready(function(){
		$('#tablacitasload').load("Consultas/TAblaCitasMedicas.php");
		
	});
</script>






<?php 
}else
{
	header("location:../index.php");
}
 ?>


