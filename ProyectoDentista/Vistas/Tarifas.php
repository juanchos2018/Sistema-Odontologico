
<?php 
session_start();

if (isset($_SESSION['codigo']) and $_SESSION['Nivel']=='Administrador') {
	# code...
//	echo $_SESSION;


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tarifas</title>
	<?php require_once("menu.php") ?>

	<?php require_once("../Clases/Conexion.php");
	
		$c= new Conectar();
		$conexion=$c->conexion();

		$sql="SELECT idproc,nombre,grupo from procedimiento ";
		$resultado= mysqli_query($conexion,$sql);


		$sql4="SELECT idproc,nombre,grupo from procedimiento ";
		$resultado4= mysqli_query($conexion,$sql4);

	 ?>
	<?php require_once("../Clases/Conexion.php");
	
		$c= new Conectar();
		$conexion=$c->conexion();

		$sql="SELECT idca,descrip from categoria ";
		$resultado2= mysqli_query($conexion,$sql);

		$sql1="SELECT idca,descrip from categoria ";
		$resultado3= mysqli_query($conexion,$sql1);



	 ?>


</head>
<body>
	<br>
<div class="container" >
	<h2> Administrar Tarifas</h2>
	<div class="row"  >
		<div class="col-sm-5"  >			
		<form id="frmRegistroTa"   >

							<label>Procedimiento * </label> 
							<span class="btn btn-info btn-xs" >
								<span  data-toggle="modal"  class="glyphicon glyphicon-plus"  data-target="#ModalProcedimiento" ></span>
							</span>
							
								<select class="form-control input-sm " id="procedi" name="procedi">
								      <option value="A">Selecciona Procedimiento</option>
						 	
									<?php while($ver=mysqli_fetch_row($resultado)): ?>
									<option value="<?php echo $ver[0] ?>"> <?php echo $ver[1]; ?> </option>
									<?php endwhile; ?> 
									
						     	</select>

							<label>CAtegoria * </label> 	<span class="btn btn-info btn-xs" >
															<span   data-toggle="modal" class="glyphicon glyphicon-plus"  data-target="#ModalCategoria"></span>
																</span>
						<select class="form-control input-sm " id="cate" name="cate">
								<option value="A">Selecciona Categoria</option>

						 	<?php while($ver=mysqli_fetch_row($resultado2)): ?>
									<option value="<?php echo $ver[0] ?>"> <?php echo $ver[1]; ?> </option>
									<?php endwhile; ?>
						</select>
							<label>Costo</label>
							<input type="text" class="form-control input-sm" name="costo" id="costo">
						
							<p></p>
							<span  class="btn btn-primary btn-lg btn-block" id="btnregistro" >Registrar</span>
						<p></p>

							<span  data-toggle="modal"  data-target="#ModalTabla"  class="btn btn-default btn-lg btn-block" id="buscar" >Mostrar Tarifas</span>
							
						</form>			
					</div>
				</div>




<!-- Modal -->
<div class="modal fade" id="ModalProcedimiento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Procedimiento</h4>
      </div>
      <div class="modal-body">
        

      	  <form id="frmProcedimientoI">
							<label>Nombre Procedimientio</label>
							<input type="text" class="form-control input-sm" name="nombrepro" id="nombrepro">
							<label>Nombre de Grupo</label>
							<input type="text" class="form-control input-sm" name="grupopro" id="grupopro">			
							
							<p></p>					
							
						</form>	
				     </div>
				      <div class="modal-footer">
			<button  id="btnAgregarProcedimiento" type="button" class="btn btn-warning" data-dismiss="modal">Aagregar Procedimiento</button>
       
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="ModalCategoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Categoria</h4>
      </div>
      <div class="modal-body">
        

      	  <form id="frmCategoriaI">
							<label>Nombre Categoria</label>
							<input type="text" class="form-control input-sm" name="descripca" id="descripca">
							
							
							<p></p>					
							
						</form>	
				     </div>
				      <div class="modal-footer">
				        <button  id="btnAgregarCategoria" type="button" class="btn btn-warning" data-dismiss="modal">Agregar CAtgoria</button>
			       
			      </div>
			    </div>
			  </div>
			</div>

<!-- MODAL DE TABLA -->

<!-- MODAL DE TActualizar tarifa-->

<div class="modal fade" id="modalactualizaTarifa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar  Tarifa</h4>
      </div>
      <div class="modal-body">
        
      	
      	  <form id="frmtarifasu">

      	  	<input type="tex" hidden="" name="codiu" id="codiu">
							<label>Procedimiento * </label> 
							
								<select class="form-control input-sm " id="procediu" name="procediu">
								<option value="A">Selecciona Procedimiento</option>
						 	

									<?php while($ver4=mysqli_fetch_row($resultado4)): ?>
									<option value="<?php echo $ver4[0] ?>"> <?php echo $ver4[1]; ?> </option>
									<?php endwhile; ?>
									
							</select>

							<label>CAtegoria * </label> 
						<select class="form-control input-sm " id="cateu" name="cateu">
								<option value="A">Selecciona Categoria</option>

						 	<?php while($ver3=mysqli_fetch_row($resultado3)): ?>
									<option value="<?php echo $ver3[0] ?>"> <?php echo $ver3[1]; ?> </option>
									<?php endwhile; ?>
						</select>
							<label>Costo</label>
							<input type="text" class="form-control input-sm" name="costou" id="costou">
						
							<p></p>
						</form>	
				     </div>
				      <div class="modal-footer">
				        <button  id="btnactualizartarifa" type="button" class="btn btn-warning" data-dismiss="modal">Actualizar</button>
			       
			      </div>
			    </div>
			  </div>
			</div>

<!-- MODAL DE acutalizar tarifa fin -->


<div class="modal fade" id="ModalTabla" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tarifas</h4>
      </div>
      <div class="modal-body">
        
	 <?php 

		require_once("../Clases/Conexion.php"); 
			$c1= new Conectar();
				$conexion1=$c1->conexion();
			$sql1="SELECT t.idta,p.nombre,c.descrip,t.costo from tarifas t
			inner join procedimiento  p
			on t.procedimiento =p.idproc
			inner join categoria c
			on t.categoria =c.idca
			  ";

		$resultado3=mysqli_query($conexion1,$sql1);

				?>
		      	<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
				<caption><label>tarifas</label></caption>
					<tr>
						
						<td>Codigo</td>
						<td>Procedimiento</td>
						<td>Categoria</td>
						<td>Costo</td>
						<td>Editar</td>
						<td>Eliminar</td>

				</tr>
					<?php 

				while ($ver=mysqli_fetch_row($resultado3)):
				 	# code...
				  ?>

					<tr>
						<td><?php echo $ver[0]; ?></td>
						<td><?php echo $ver[1]; ?></td>
						<td><?php echo $ver[2]; ?></td>
						<td><?php echo $ver[3]; ?></td>
					
						<td>
							<span  data-toggle="modal" data-target="#modalactualizaTarifa" class="btn btn-warning btn-xs" id="" onclick="Cerrar();AgregaDatosTarifa('<?php echo $ver[0] ?>');" >
								<span class="glyphicon glyphicon-pencil"></span>
							</span>

						</td>
						<td>
							<span class="btn btn-danger btn-xs"">
								<span class="glyphicon glyphicon-remove"></span>
							</span>
						</td>

					</tr>
			<?php endwhile; ?>
				</table>
      
				     </div>
			
			    </div>
			  </div>
</div>



</body>
</html>


<script type="text/javascript"> // PARA ACTUALIZAR --------------
	
		$(document).ready(function(){
			$('#btnactualizartarifa ').click(function()
		{
		datos=$('#frmtarifasu').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../Procesos/ProcesoTarifa/ActualizaTarifa.php",
			success:function(r){		

 			if (r==1) {
 				
 				alertify.alert("Actualizado con Exito");
 				//location.reload();
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


<script type="text/javascript">  //para mostrar la tabla 
	/*$(document).ready(function(){
		$('#tablaUsuariosLoad').load("Usuarios/TablaUsuarios.php");
		$('#registro').click(function(){

			vacios=ValidadFormVacio('frmRegistro');

			if(vacios > 0){
				alertify.alert("Debes llenar todos los campos!!");
			//	alertify.success("Debes llenar todos los campos!!");  MENSAJE  PARA PONER ABAJO
				return false;
			}

			datos=$('#frmRegistro').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"../Procesos/regLogin/registrarusuario.php",
				success:function(r){
				
					if (r==1) {
						$('#frmRegistro')[0].reset();
						$('#tablaUsuariosLoad').load("Usuarios/TablaUsuarios.php"); // CANDA VEZ QUE INSERTE  SE RECARGUE LA TABLA

						alertify.success("Agregado con exito");
					}
					else{
						alertify.error("no agregado");
						
					}
				}
			});
		});
	});*/
</script>


<script type="text/javascript"> // PARA REGSITRAR PROCEDIMIENTO
	
	$(document).ready(function(){
		$('#btnAgregarProcedimiento').click(function()
		{

			vacios=ValidadFormVacio('frmProcedimientoI');

					if(vacios > 0){
						alert("Debes llenar todos los campos!!");
						return false;
					}

		datos=$('#frmProcedimientoI').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../Procesos/ProcesoProcedimiento/registroprocedimiento.php",
			success:function(r){
			

 			if (r==1) {
 				$('#frmProcedimientoI')[0].reset();
 				alertify.alert("Agregado con Exito");

 				//$('#tablaUsuariosLoad').load("Usuarios/TablaUsuarios.php");
 			}
 			else{
 				//console.log(r);
 				alertify.error("Error al Agregar Procedimiento");
 			}
			}
		});
	});
	});
</script>


<script type="text/javascript"> // P
	function Cerrar(){		
	    $('#ModalTabla').modal("toggle");			
	}
	function AgregaDatosTarifa(cot)
	{
		
			$.ajax({
				type:"POST",
				data:"idusuu="+cot,
				url:"../Procesos/ProcesoTarifa/ObtenDatosTarifa.php",
				success:function(r){
			
					dato=jQuery.parseJSON(r);
					console.log(dato);
					$('#codiu').val(dato['Codigo']);
					$('#procediu').val(dato['Procedimiento']);
					$('#cateu').val(dato['Categoria']);
					$('#costou').val(dato['Costo']);
					

			}
		});
	}

	
</script>

<script type="text/javascript"> // PARA REGSITRAR 
	
	$(document).ready(function(){
		$('#btnAgregarCategoria').click(function()
		{

		vacios=ValidadFormVacio('frmCategoriaI');

					if(vacios > 0){
						alert("Debes llenar todos los campos!!");
						return false;
					}

		datos=$('#frmCategoriaI').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../Procesos/ProcesoCategoria/registrocategoria.php",
			success:function(r){
			

 			if (r==1) {
 				$('#frmCategoriaI')[0].reset();
 				alertify.alert("Agregado con Exito");
 					
 				//$('#tablaUsuariosLoad').load("Usuarios/TablaUsuarios.php");
 			}
 			else{
 				//console.log(r);
 				alertify.error("Error al Agregar Categoria");
 			}
			}
		});
	});
	});
</script>


<script type="text/javascript"> // PARA REGSITRAR TARIFAS
	
	$(document).ready(function(){
		$('#btnregistro').click(function()
		{

		vacios=ValidadFormVacio('frmRegistroTa');

					if(vacios > 0){
						alert("Debes llenar todos los campos!!");
						return false;
					}

		datos=$('#frmRegistroTa').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../Procesos/ProcesoTarifa/registrartarifa.php",
			success:function(r){
			

 			if (r==1) {
 				$('#frmRegistroTa')[0].reset();
 				alertify.alert("Agregado con Exito");
 				//location.reload();
 				
 				//$('#ModalTabla').load("Tarifas.php");
 			}
 			else{
 				//console.log(r);
 				alertify.error("Error al Agregar Categoria");
 			}
			}
		});
	});
	});
</script>


<?php 
}else
{
	header("location:inicio.php");
}
 ?>
