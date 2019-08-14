
<?php 
session_start();

if (isset($_SESSION['codigo'])) {
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
	<?php require_once("menu.php")

	?>
	<?php require_once("dependencias.php") ?>
</head>
<body>
<div class="container">
	<br>
	<h2> Administrar Usuarios</h2>

	<div class="row">
		
		<div  class="col-sm-10" id="tablaUsuariosLoad" ></div>
	</div>
</div>
<hr>

<!-- Modal -->
<div class="modal fade" id="ActualizaUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualiza Usuario</h4>
      </div>
      <div class="modal-body">
        

      	  <form id="frmRegistroU">
      	  
							<label>Codigo</label>
							<input type="text" class="form-control input-sm" name="codigoU" id="codigoU">
							<label>Nombre</label>
							<input type="text" class="form-control input-sm" name="nombreU" id="nombreU" ">
					
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



<div class="modal fade" id="AgregarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega Usuario</h4>
      </div>
      <div class="modal-body">       

      	  <form id="frmRegistroI">
							<label>Codigo</label>
							<input type="text" class="form-control input-sm" name="codigoI" id="codigoI">
							<label>Nombre</label>
							<input type="text" class="form-control input-sm" name="nombreI" id="nombreI">
								<label>Clave</label>
							<input type="text" class="form-control input-sm" name="claveI" id="claveI">
					
							<label>Nivel</label>
						


					<select class="form-control input-sm " id="nivelI" name="nivelI">
					<option value="A">Selecciona Categoria</option>
			 	
						<option > Empleado</option>
						<option > Vendedor</option>
						
				</select>
							<p></p>						
							
						</form>	
      </div>
      <div class="modal-footer">
        <button  id="btnAgregarUsuario" type="button" class="btn btn-warning" data-dismiss="modal">Agregar Usuaario</button>
       
      </div>
    </div>
  </div>
</div>


</body>
</html>



<script type="text/javascript">
	function AgregaDatosUsuario(Codigousus)
	{
		
			$.ajax({
				type:"POST",
				data:"idusuu="+Codigousus,
				url:"../Procesos/ProcesoUsuarios/obtenerdatosusuario.php",
				success:function(r){
			
					dato=jQuery.parseJSON(r);
					$('#codigoU').val(dato['Codigo']);
					$('#nombreU').val(dato['Nombre']);
					$('#nivelU').val(dato['Nivel']);
					

			}
		});
	}



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

</script>


<script type="text/javascript"> ///PARA ACTUALIZAR USUARIO
	
	$(document).ready(function(){
			$('#btnActualizaUsuario').click(function()
		{
		datos=$('#frmRegistroU').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../Procesos/ProcesoUsuarios/ActualizarUsuarios.php",
			success:function(r){
			

 			if (r==1) {
 				
 				alertify.alert("Actualizado con Exito");
 				$('#tablaUsuariosLoad').load("Usuarios/Tabla2.php");
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
		$('#btnAgregarUsuario').click(function()
		{
		datos=$('#frmRegistroI').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../Procesos/ProcesoUsuarios/registrousu.php",
			success:function(r){		

 			if (r==1) {
 				
 				alertify.alert("Actualizado con Exito");
 				$('#tablaUsuariosLoad').load("Usuarios/Tabla2.php");
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
		$('#tablaUsuariosLoad').load("Usuarios/Tabla2.php");
		
	});
</script>


<?php 
}else
{
	header("location:../index.php");
}
 ?>
