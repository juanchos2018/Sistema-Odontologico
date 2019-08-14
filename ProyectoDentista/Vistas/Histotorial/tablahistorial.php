
<?php 

require_once("../../Clases/Conexion.php"); 
	$c= new Conectar();
		$conexion=$c->conexion();
	$sql="SELECT Codigo,Nombre,Clave,Nivel from Historial ";

$resultado=mysqli_query($conexion,$sql);

?>
<div class="col-sm-0">
			 <span  data-toggle="modal" data-target="#AgregarUsuario" class="btn btn-success btn-sm"">Agregar Usuario
				</span>
			</span>
		</div>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
	<br>
<caption></caption>
	<tr>
		
		<td>Codigo</td>
		<td>Paciente</td>
		<td>Odontograma</td>

	

	</tr>



	
	<tr>
		<td></td>
		<td></td>
	
	
	
		<td>
			<span  data-toggle="modal" data-target="#Ondotograma"  class="btn btn-danger btn-xs" onclick="Ondotgrama2()">
				<span class="glyphicon glyphicon-plus"></span>
			</span>
		</td>

	</tr>

</table>