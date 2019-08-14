
<?php 
session_start();

if (isset($_SESSION['codigo']) ) {
	# code...
//	echo $_SESSION;


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
	<?php require_once("menu.php") ?>
	<?php require_once("dependencias.php") ?>
</head>
<body>
<div class="container">
	<br>
	<h2> Administrar Medicos</h2>

	<div class="row">
		
		<div  class="col-sm-10" id="tablamedicosload" ></div>
	</div>
</div>




<!-- Modal -->
<div class="modal fade" id="ActualizaMedicoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualiza medico</h4>
      </div>
      <div class="modal-body">
        

      	  <form id="frmRegistroU">

							<input type="text" name="idu" id="idu" hidden="">

							<label>Nombres</label>
							<input type="text" class="form-control input-sm" name="nombremu" id="nombremu">
							<label>Apellidos</label>
							<input type="text" class="form-control input-sm" name="apellidomu" id="apellidomu">
								<label>Dni</label>
							<input type="text"  name="dnimu" id="dnimu">
					
							<label>Ruc</label>
							<input type="text"  name="rucmu" id="rucmu">
							<br>
							
							<input type="text" hidden="" class="form-control input-sm" name="colegiaturamu" id="colegiaturamu" value="Colegiatura1">
								<label>Telefono 	</label>
							<input type="text" class="form-control input-sm" name="telefonomu" id="telefonomu">
								<label>Direccion</label>
							<input type="text" class="form-control input-sm" name="dreccionmu" id="dreccionmu">
								<label>email</label>
							<input type="text" class="form-control input-sm" name="emailmu" id="emailmu">
							<label>sexo</label>
							<input type="text" class="form-control input-sm" name="sexomu" id="sexomu">
								
							<p>				
							
						</form>	
      </div>
      <div class="modal-footer">
        <button  id="btnActualizaMedico" type="button" class="btn btn-warning" data-dismiss="modal">Actuliza  Usuario</button>
       
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="AgregarMedico" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega Medico</h4>
      </div>
      <div class="modal-body">
        

      	  <form id="frmRegistromI" class="form-horizontal" role="form">


      	  <div class="form-group">
		<label for="name" class="col-sm-2 control-label">Nombres</label>
		<div class="col-sm-10">
			<input type="text" class="form-control input-sm " name="nombrem" id="nombrem">
			
		</div>
		</div>

		  <div class="form-group">
		<label for="name" class="col-sm-2 control-label">Apelidos</label>
		
		<div class="col-sm-10">
			<input type="text" class="form-control input-sm" name="apellidom" id="apellidom">
		</div>

		</div>

		<div class="" align="center">
				<label for="name" class="">Dni</label>
				<input type="text"  name="dnim" id="dnim">
				<label class="">Ruc</label>
					<input class="" type="text"  name="rucm" id="rucm"> 	
		
		</div> <br>

		  <div class="form-group">
		<label for="name" class="col-sm-2 control-label">Colegiatura</label>
		
		<div class="col-sm-10">
			<input type="text" class="form-control input-sm" name="colegiaturam" id="colegiaturam">
		</div>

		</div>

		 <div class="form-group">
		<label for="name" class="col-sm-2 control-label">Telefono</label>
		
		<div class="col-sm-10">
			<input type="text" class="form-control input-sm" name="telefonom" id="telefonom">
		</div>
		</div>

		 <div class="form-group">
		<label for="name" class="col-sm-2 control-label">Direccion</label>		
		<div class="col-sm-10">
			<input type="text" class="form-control input-sm" name="dreccionm" id="dreccionm">
		</div>
		</div>

		 <div class="form-group">
		<label for="name" class="col-sm-2 control-label">Correo</label>		
		<div class="col-sm-10">
			<input type="text" class="form-control input-sm" name="emailm" id="emailm" placeholder="Ej.: usuario@servidor.com">
		</div>
		</div>

		<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Sexo</label>		
		<div class="col-sm-10">
		<!-- <input type="text" class="form-control input-sm" name="sexom" id="sexom"> -->
		<select  class="form-control input-sm"  id="sexom" name="sexom"> 
			<option>Masculino</option>
			<option>Femenino</option>
		  </select>
		</div>
		</div>

		<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Fecha Naci.</label>		
		<div class="col-sm-10">
	
		<input type="date" name="fecham" id="fecham" value="<?php echo date("Y-m-d") ?>" class="form-control" >
		</div>
		</div>				
			<p>				
							
	</form>	
      </div>
      <div class="modal-footer">
        <button  id="btnAgregarMedico" type="button" class="btn btn-warning" data-dismiss="modal">Agregar Medico</button>
       
      </div>
    </div>
  </div>
</div>


</body>
</html>



<script type="text/javascript">
	function AgregaDatosMedico(Codigousu)
	{

			$.ajax({
				type:"POST",
				data:"idni="+Codigousu,
				url:"../Procesos/ProcesoMedico/ObtenerDatosMedico.php",
				success:function(r){
					console.log(r);

					// tenemos que transformar la r en formato json por que si recibm
					dato=jQuery.parseJSON(r);
					$('#idu').val(dato['id']);
					$('#nombremu').val(dato['Nombre']);
					$('#apellidomu').val(dato['Apellido']);
					$('#dnimu').val(dato['Dni']);
					$('#rucmu').val(dato['Ruc']);
					$('#colegiaturamu').val(dato['Colegiatura']);
					$('#telefonomu').val(dato['NumeroTelefono']);
					$('#dreccionmu').val(dato['Direccion']);
					$('#emailmu').val(dato['Email']);
					$('#sexomu').val(dato['Sexo']);


			}
		});
	}



/*
	function EliminaUsuario(CodigoUsuario){
		alertify.confirm('Desea Eliminar esta Usuario', function()
			{
			 	$.ajax({
				type:"POST",
				data:"CodigoUsu="+CodigoUsuario,
				url:"../Procesos/ProcesoUsuarios/EliminarUsuario.php",
				success:function(r){
						if (r==1) {
							alertify.alert("Elimnao con exito");
							$('#tablaUsuariosLoad').load("Usuarios/TablaUsuarios.php");
						}
						else{
							alertify.error("No se pudo elimnar");
						}
					}
				});
			   },
				 function()
				{ 
					alertify.error('Se Cancelo operacion');
				});
	}
*/
</script>


<script type="text/javascript"> ///PARA ACTUALIZAR Medico
	
$(document).ready(function(){
	$('#btnActualizaMedico').click(function()
		{
		datos=$('#frmRegistroU').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../Procesos/ProcesoMedico/ActualizaMedicos.php",
			success:function(r){			

 			if (r==1) {
 				
 				alertify.alert("Actualizado con Exito");
 				$('#tablamedicosload').load("Medicos/tablamedicos.php");
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



<script type="text/javascript"> // PARA REGSITRAR USUARIOS
		
	$(document).ready(function(){
		$('#btnAgregarMedico').click(function()
		{
		datos=$('#frmRegistromI').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../Procesos/ProcesoMedico/registrarmedico.php",
			success:function(r){
			

 			if (r==1) {
 				
 				alertify.alert("Actualizado con Exito");
 				$('#tablamedicosload').load("Medicos/tablamedicos.php");
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





<script type="text/javascript"> // PARA MOSTRAR LA TABLA  USUARIOS
	$(document).ready(function(){
		$('#tablamedicosload').load("Medicos/tablamedicos.php");
		
	});
</script>


<?php 
}else
{
	header("location:../index.php");
}
 ?>
