



<?php 
session_start();

if (isset($_SESSION['codigo']) ) {
	# code...
//	echo $_SESSION;


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>PAcientes</title>

	<?php require_once("menu.php") ?>
	

</head>
<body>

	<div class="container">
	<br>
	<div class="row">
		
		<div  class="col-sm-10" id="tablaPacientesLoad" ></div>
	</div>
</div>

<!-- MODAL DE EDITAR PACIENTE  -->

<div class="modal fade" id="ActualizaPacienteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualiza Pacientes</h4>
      </div>
      <div class="modal-body">      

      	  <form id="frmRegistroPU">
							<label>Nombre</label>
							<input type="text"   class="form-control input-sm " name="nombreu" id="nombreu" >
							<label>Apellido</label>
							<input type="text" class="form-control input-sm" name="apellidou" id="apellidou">
							<label>Dni</label>
							<input type="text" class="form-control input-sm" name="dniu" id="dniu">
							<label>Numero Telefono</label>
							<input type="text" class="form-control input-sm" name="telefonou" id="telefonou">
							<label>Direccion</label>
							<input type="text" class="form-control input-sm" name="drieccionu" id="drieccionu">
							<label>Email</label>
							<input type="text" class="form-control input-sm" name="emailu" id="emailu">
						
						<label>Enfermedad</label>
							<input type="text" class="form-control input-sm" name="enfermedadu" id="enfermedadu">
							<label>Alergia</label>
							<input type="text" class="form-control input-sm" name="alergiau" id="alergiau">

							<label>Sexo</label>
							<input type="text" class="form-control input-sm" name="sexou" id="sexou">
							<label>Fechanaci</label>
							<input type="text" class="form-control input-sm" name="fechanacu" id="fechanacu">
							<p></p>
							
							
						</form>	
						<span class="btn btn-primary" id="btnactualizarpaciente">Actualizar Paciente</span>
      			</div>    
       
      </div>
    </div>
  </div>
</div>

<!-- final dem odal  -->

</body>
</html>




<script type="text/javascript">
	function AgregaDatosPaciente(Codigousup)
	{

			$.ajax({
				type:"POST",
				data:"idnip="+Codigousup,
				url:"../Procesos/ProcesoPacientes/ObtenerDatosPaciente.php",
				success:function(r){
					
		
					// tenemos que transformar la r en formato json por que si recibm
					dato=jQuery.parseJSON(r);
					$('#nombreu').val(dato['Nombres']);
					$('#apellidou').val(dato['Apellido']);
					$('#dniu').val(dato['Dni']);
					$('#telefonou').val(dato['NumeroTelefono']);
					$('#drieccionu').val(dato['Direccion']);
					$('#emailu').val(dato['Email']);
					$('#enfermedadu').val(dato['Enfermedad']);
					$('#alergiau').val(dato['Alergia']);
					$('#sexou').val(dato['Sexo']);
					$('#fechanacu').val(dato['Fechanaci']);
	

			}
		});
	}



</script>


<script type="text/javascript">
	
	$(document).ready(function(){
		$('#btnactualizarpaciente').click(function()
		{
		datos=$('#frmRegistroPU').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../Procesos/ProcesoPacientes/ActualizaPaciente.php",
			success:function(r){
			if (r==1) {
 				
 				alertify.alert("Actualizado con Exito");
 				$('#tablaPacientesLoad').load("Pacientes/TablaPacientes.php");
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
		$('#tablaPacientesLoad').load("Pacientes/TablaPacientes.php");
		
	});
</script>






<?php 
}else
{
	header("location:../index.php");
}
 ?>


