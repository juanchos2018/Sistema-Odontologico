



<?php 
session_start();



if(isset($_GET['txtd'])) 
	$txtdnic =strtoupper($_GET['txtd']);
	 else $txtdnic="";

if (isset($_SESSION['codigo'])) {

 ?>

<?php 

require_once("../../Clases/Conexion.php"); 
	$c= new Conectar();
	$conexion=$c->conexion();
	$sqlconsul="SELECT Dni,Diente,Enfemedad from enfermedadiente where Dni=$txtdnic ";

	$resultadoconsul=mysqli_query($conexion,$sqlconsul);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>

	

</head>
<body>

<div class="">
	

	<div class="row">
		
		<div  class="col-sm-2"></div>
			<table class="table" style="text-align: center;" >

	<tr>
		<td>#</td>
		<td>Estado</td>
		<td>Opciones</td>

	</tr>

	<?php 

	while ($ver=mysqli_fetch_row($resultadoconsul)):
	 	# code...
	  ?>
	<tr>
		<td><?php echo  $ver[1]; ?></td>
		<td><?php echo  $ver[2]; ?></td>
	
		<td>
	<span class="btn btn-danger btn-xs"  onclick="EliminarEnfermedadDiente('<?php echo $ver[0]?>','<?php echo $ver[1]?>')">
				<span class="glyphicon glyphicon-remove"></span>
			</span>
		</td>
	</tr>
	<?php endwhile ?>
</table>
	</div>
</div>


</body>
</html>






<?php 
}else
{
	header("location:../index.php");
}
 ?>


