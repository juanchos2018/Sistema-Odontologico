
<?php 

require_once("../../Clases/Conexion.php"); 

	$c= new Conectar();
		$conexion=$c->conexion();

	$sql="SELECT c.id,me.Nombres as medic,c.Paciente,p.Nombres, c.start,c.Observacion,c.Estado  FROM citasmedicas2  as c
	inner join pacientes as p
	on c.Paciente=p.Dni
	inner join medicos as me 
	on c.Medico=me.id";

	$resultado=mysqli_query($conexion,$sql);

?>
<h2> Administrar Citas</h2>

					<div class="col-lg-4">
                                <div class="input-group">
                                  <span class="input-group-addon" >Fecha</span>
                                <input type="date" name="start_at" value="<?php echo date("Y-m-d") ?>" class="form-control" id="dtpfecha">
                                </div>
                            </div>
<div class="col-md-3">
                                    <button type="button" class="btn btn-default" onclick="load(1);" id="btnfecha">
                                        <span class="glyphicon glyphicon-search"></span> Buscar</button>
                                    <!-- <span id="loader"></span> -->
                                </div>
<table class="table table-hover table-condensed table-bordered"  style="text-align: right;">
	<!-- <input type="date" name="dtpfehca" class="input-group date"> -->
<div class="col-sm-0" align="right">
			 <span  data-toggle="modal" data-target="#NuevaCita
						" class="btn btn-success btn-sm"">Nueva Cita
				</span>
			</span>

<!-- 
			<button type="button" hidden="" id="btncalendario" class="btn btn-success"  name="btncalendario" > Calen</button> -->

			<span  
				id="btnvista3"	name="btnvista3"	 class="btn btn-success btn-sm"">Calendario
				
			</span>
		</div>
<caption><label>Citas</label> </caption>

<tr>
	<td>Codigo</td>
	<td>Medico</td>
	<td>DniPaciente</td>
	<td>Nombres</td>
	<td>Fecha</td>
	<td>Observacion</td>
	<td>Estado</td>
	<td>Observacion</td>
	<td>Eliminar</td>
</tr>



<?php 
	while ( $ver=mysqli_fetch_row($resultado)): 
		$estado=array(
			'Pendiente'=>'#24DB4B');
	  ?>
<tr bgcolor="<?php $estado[$ver[6]] ?>" >
		<td align="center" ><?php echo $ver[0]; ?></td>
		<td align="center" ><?php echo $ver[1]; ?></td>
		<td align="center" ><?php echo $ver[2]; ?></td>
		<td align="center" ><?php echo $ver[3]; ?></td>
		<td align="center" ><?php echo $ver[4]; ?></td>
		<td align="center" ><?php echo $ver[5]; ?></td>
		<td align="center" ><?php echo  "<strong>".$ver[6]."</strong>"; ?></td>
	<!-- AgregaDatosDeCita -->
	
		
	<td align="center" >
			<span class="btn btn-warning btn-xs" >
				<span data-toggle="modal" data-target="#ModaObervacion" class="glyphicon glyphicon-eye-open"   onclick="AgregaDdni('<?php echo $ver[2]?>','<?php echo $ver[0] ?>');"></span>
			</span>
	

		</td>
		<td align="center" >
			<span  class="btn btn-danger btn-xs"   onclick="EliminaCita('<?php echo $ver[0] ?>')">
				<span class="glyphicon glyphicon-remove" ></span>
			
			</span>
		</td>
</tr>
<?php 

	endwhile; ?>
</table>
<script type="text/javascript">
	$(document).ready(function(){
		$('#btncalendario').click(function(){
			
			window.location="Calendario.php";
		});
		$('#btnvista3').click(function(){
			
			window.location="Vista3.php";
		});
	});
</script>


<script type="text/javascript">
	

		$(document).ready(function(){

			$('#btnfecha').click(function(){

				var datecontrol =document.querySelector('input[type="date"]');
				alert(datecontrol.value);

			});
		});

</script>