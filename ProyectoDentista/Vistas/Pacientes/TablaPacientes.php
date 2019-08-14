
<?php 
session_start();

if (isset($_SESSION['codigo']) ) {

 ?>

<?php 

require_once("../../Clases/Conexion.php"); 
	$c= new Conectar();
		$conexion=$c->conexion();
	$sql="SELECT Nombres,Apellido,Dni,Numerotelefono,Direccion,Email,Enfermedad,Alergia,Sexo,Fechanaci from Pacientes ";

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
	<h2> Administrar PAcientes</h2>

	<div class="row">
		
		<div  class="col-sm-8"></div>
		<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
	<br>
<caption></caption>
	<tr>
		
		<td>Nombres</td>
		<td>Apellido</td>
		<td>Dni</td>
		<td>Telefono</td>
		<td>Direccion</td>
		<td>E-mail</td>
		<td>Enfermedad</td>
		<td>Alergia</td>
		<td>Sexo</td>
		<td>Fecha</td>
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
		<td><?php  echo $ver[2]; ?></td>
		<td><?php echo $ver[3]; ?></td>
		<td><?php echo $ver[4]; ?></td>
		<td><?php  echo $ver[5]; ?></td>
		<td><?php echo $ver[6]; ?></td>
		<td><?php  echo $ver[7]; ?></td>
		<td><?php echo $ver[8]; ?></td>
		<td><?php echo $ver[9]; ?></td>
	
		<td>
			<span  data-toggle="modal" data-target="#ActualizaPacienteModal" class="btn btn-warning btn-xs" onclick="AgregaDatosPaciente('<?php echo $ver[2]; ?>')">
				<span class="glyphicon glyphicon-pencil"></span>
			</span>

		</td>
		<td>
			<span class="btn btn-danger btn-xs" onclick="EliminaUsuario('<?php echo $ver[2] ?>')">
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


