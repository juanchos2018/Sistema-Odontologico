
<?php 

require_once("../../Clases/Conexion.php"); 
	$c= new Conectar();
		$conexion=$c->conexion();
	$sql="SELECT id,Nombres,Apellido,Dni,Ruc,Colegiatura,NumeroTelefono,Direccion,Email,Sexo,Fechanaci from Medicos ";

$resultado=mysqli_query($conexion,$sql);

?>
<div class="col-sm-0">
			 <span  data-toggle="modal" data-target="#AgregarMedico" class="btn btn-success btn-sm"">Agregar Medico
				</span>
			</span>
			<br><br>
		</div>

<table class="table table-hover table-condensed table-bordered" id="idtable1" style="text-align: center;">
<thead >
	<tr>
		
		
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Dni</td>
		<td>Ruc</td>
		
		<td>Telefono</td>
		<td>Direccion</td>
		<td>Email</td>
		<td>Sexo</td>
		<td>Fecha</td>
		<td>Editar</td>
		<td>Borrar</td>



	</tr>
</thead>
	<?php 

	while ($ver=mysqli_fetch_row($resultado)) :
	 	# code...
	  ?>
	<tr>
		<td><?php echo  $ver[1]; ?></td>
		<td><?php echo $ver[2]; ?></td>
		<td><?php  echo $ver[3]; ?></td>

		<td><?php echo $ver[5]; ?></td>
		<td><?php  echo $ver[6]; ?></td>
		<td><?php echo $ver[7]; ?></td>
		<td><?php echo $ver[8]; ?></td>
		<td><?php  echo $ver[9]; ?></td>
		<td><?php echo $ver[10]; ?></td>
	
		<td>
			<span  data-toggle="modal" data-target="#ActualizaMedicoModal" class="btn btn-warning btn-xs" onclick="AgregaDatosMedico('<?php echo $ver[0]; ?>')">
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
<script type="text/javascript">
	
$(document).ready(function() {
    $('#idtable1').DataTable();
} );
	
</script>