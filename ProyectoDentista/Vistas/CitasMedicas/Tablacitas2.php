



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
	$sqlconsul="SELECT  co.Numero,nom.Nombre,co.Estado,co.Partes from consulta as co 
	inner join nombredientes as nom 
	on co.Numero = nom.Numero
	 where Dni=$txtdnic ";

	$resultadoconsul=mysqli_query($conexion,$sqlconsul);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>

	

</head>
<body>

<div class="container">
	

	<div class="row">
		
		<div  class="col-sm-8"></div>
			<table class="table table-hover table-condensed table-bordered" style="text-align: center;">

	<tr>
		<td>Nombre</td>
		<td>Estado</td>
		<td>Partes</td>
		<td>Opciones</td>
	</tr>

	<?php 

	while ($ver=mysqli_fetch_row($resultadoconsul)):
	 	# code...
	  ?>
	<tr>
		<td><?php echo  $ver[1]; ?></td>
		<td><?php echo  $ver[2]; ?></td>
		<td><?php echo  $ver[3]; ?></td>
		<td>
			<span class="btn btn-danger btn-xs"  onclick="EliminarDiente('<?php echo $ver[0]?>')">
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


