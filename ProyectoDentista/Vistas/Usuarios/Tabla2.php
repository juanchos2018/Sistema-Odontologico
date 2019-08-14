
<?php 

require_once("../../Clases/Conexion.php"); 
	$c= new Conectar();
		$conexion=$c->conexion();
	$sql="SELECT Codigo,Nombre,Clave,Nivel from usuarios ";
	

$resultado=mysqli_query($conexion,$sql);

?>


<div class="col-sm-0">
			 <span  data-toggle="modal" data-target="#AgregarUsuario" class="btn btn-success btn-sm"">Agregar Usuario
				</span>
			</span>

		</div>
<br>
<table  class="table table-hover table-condensed table-bordered"   id="iddatable0" style="text-align: center; ">
	<thead style="background-color:#dc3545;color: white">
		
	
	<tr>
		
		<td>Codigo</td>
		<td>Nombre</td>
		<td>Clave</td>
		<td>Nivel</td>
		<td>Editar</td>
		<td>Eliminar</td>

	</tr>
	</thead>


<tbody>
		<?php 

	while ($ver=mysqli_fetch_row($resultado)) :
	 	# code...
	  ?>
	<tr>
		<td><?php echo  $ver[0]; ?></td>
		<td><?php echo $ver[1]; ?></td>
		<td><?php  echo $ver[2]; ?></td>
		<td><?php echo $ver[3]; ?></td>
	
		<td>
			<span  data-toggle="modal" data-target="#ActualizaUsuarioModal" class="btn btn-warning btn-xs" onclick="AgregaDatosUsuario('<?php echo $ver[0]; ?>')">
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
</tbody>
</table>



<script type="text/javascript">
	
$(document).ready(function() {
    $('#iddatable0').DataTable();
} );
	
</script>

