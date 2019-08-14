
<?php 
session_start();

if (isset($_SESSION['codigo'])) {
	# code...
//	echo $_SESSION;


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pacientes</title>
	<?php require_once("menu.php") ?>
</head>
<body  >
<div class="container"  >
	<br>
	<h2> Administrar Pacientes</h2>
	<div class="row">
		<div class="col-sm-4"   >
			
		<form id="frmRegistropacientei">
							<label>Nombre</label>
							<input type="text"    class="form-control input-sm " name="nombrei" id="nombrei" >
							<label>Apellido</label>
							<input type="text" class="form-control input-sm" name="apellidoi" id="apellidoi">
							<label>Dni</label>
							<input type="text" class="form-control input-sm" name="dni" id="dni">
							<label>Numero Telefono</label>
			<input type="text" class="form-control"  style="width: 50px;"  name="copais" id="copais" value="+51"> <br>	
							<input type="text" class="form-control input-sm" name="telefonoi" id="telefonoi">
							<label>Direccion</label>
							<input type="text" class="form-control input-sm" name="drieccioni" id="drieccioni">
							<label>Email</label>
							<input type="text" class="form-control input-sm" name="emaili" id="emaili">
						
						<label>Enfermedad</label>
							<input type="text" class="form-control input-sm" name="enfermedadi" id="enfermedadi">
							<label>Alergia</label>
							<input type="text" class="form-control input-sm" name="alergiai" id="alergiai">

							<label>Sexo</label>
							<input type="text" class="form-control input-sm" name="sexoi" id="sexoi">
							<label>Fecha Naci.</label>
							
							<input type="date" name="fechanaci" id="fechanaci" value="<?php echo date("Y-m-d") ?>" class="form-control" >
							<p></p>
							<span class="btn btn-primary" id="registropaciente">Registrar Paciente</span>
							
						</form>	

		</div>
		<!--<div  class="col-sm-6" id="tablaUsuariosLoad" ></div> -->
	</div>
</div>




<!-- Modal -->
<div class="modal fade" id="ActualizaUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualiza Paciente</h4>
      </div>
      <div class="modal-body">
        

      	  <form id="frmRegistroU">
							<label>Codigo</label>
							<input type="text" class="form-control input-sm" name="codigoU" id="codigoU">
							<label>Nombre</label>
							<input type="text" class="form-control input-sm" name="nombreU" id="nombreU">
					
							<label>Nivel</label>
							<input type="text" class="form-control input-sm" name="nivelU" id="nivelU">
							<p></p>					
							
						</form>	
      </div>
      <div class="modal-footer">
        <button  id="btnActualizaUsuario" type="button" class="btn btn-warning" data-dismiss="modal">Actuliza  Usuario</button>
       
      </div>
    </div>
  </div>
</div>


</body>
</html>


<script type="text/javascript"> // RESGISTRAR PACIENTE
	$(document).ready(function(){
	//	$('#tablaUsuariosLoad').load("Usuarios/TablaUsuarios.php");
		$('#registropaciente').click(function(){

			vacios=ValidadFormVacio('frmRegistropacientei');

			if(vacios > 0){
				alertify.alert("Debes llenar todos los campos!!");
			//	alertify.success("Debes llenar todos los campos!!");  MENSAJE  PARA PONER ABAJO
				return false;
			}

			datos=$('#frmRegistropacientei').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"../Procesos/ProcesoPacientes/registrarpaciente.php",
				success:function(r){
				
					if (r==1) {
						$('#frmRegistropacientei')[0].reset();
						//$('#tablaUsuariosLoad').load("Usuarios/TablaUsuarios.php"); // CANDA VEZ QUE INSERTE  SE RECARGUE LA TABLA

						alertify.success("Agregado con exito");
					}
					else{
						alertify.error("no agregado");
						
					}
				}
			});
		});
	});
</script>


<?php 
}else
{
	header("location:../index.php");
}
 ?>
