
<?php 
session_start();

if (isset($_SESSION['codigo']) ) {

 ?>

<?php 


require_once("../../Clases/Conexion.php"); 
	$c= new Conectar();
		$conexion=$c->conexion();
	$sql="SELECT Codigo,Descripcion,Estado from  Enfermedades ";

$resultado=mysqli_query($conexion,$sql);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>

	

</head>
<body>

<div class="container">
	<br>
	<h2> Administrar Enfemedad</h2>
<span  data-toggle="modal" data-target="#Agregarefe" class="btn btn-success btn-sm"">Agregar Enfermedad
				</span>
			</span>
	<div class="row">
		
		<div  class="col-sm-6"></div>
		<table class="table table-hover table-condensed table-bordered" style="text-align: center;">

<caption></caption>
	<tr>
		
		<td>Codigo</td>
		<td>Descripcion</td>
		<td>Estado</td>		
		<td>Editar</td>
		<td>Eliminar</td>

	</tr>

	<?php 

	while ($ver=mysqli_fetch_row($resultado)) :
	 	# code...
	  ?>
	<tr>
		<td><?php echo  $ver[0]; ?></td>
		<td><?php echo $ver[1]; ?></td>
		<td><?php echo $ver[2]; ?></td>
	
		<td>
			<span  data-toggle="modal" data-target="#ActualizaEnfermedad" class="btn btn-warning btn-xs" onclick="AgregaDatosEnfermedad('<?php echo $ver[0]; ?>')">
				<span class="glyphicon glyphicon-pencil"></span>
			</span>

		</td>
		<td>
			<span class="btn btn-danger btn-xs" onclick="EliminaUsuario('<?php echo $ver[0] ?>')">
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


