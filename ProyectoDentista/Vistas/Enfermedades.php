
<?php 
session_start();

if (isset($_SESSION['codigo'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
	<?php require_once("menu.php") ?>
</head>
<body>
<div class="container">
	


	<div class="row">		
		<div  class="col-sm-10" id="tablaEnfermedadesLoad" ></div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="ActualizaEnfermedad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar</h4>
      </div>
      <div class="modal-body">      

      	  <form id="frmenfermedadu">
							<label>Codigo</label>
							<input type="text" class="form-control input-sm" name="codigoU" id="codigoU">
							<label>Nombre</label>
							<input type="text" class="form-control input-sm" name="desu" id="desu">
					
							<label>Nivel</label>
							<input type="text" class="form-control input-sm" name="estadou" id="estadou">

							<p></p>		
							
						</form>	
      </div>
      <div class="modal-footer">
        <button  id="btnActualizaEnfermedad" type="button" class="btn btn-warning" data-dismiss="modal">Actulizar</button>
       
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="Agregarefe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega enfermedad</h4>
      </div>
      <div class="modal-body">
        

      	  <form id="frmRegistroefermedadI">
							<label>Codigo</label>
							<input type="text" class="form-control input-sm" name="codigoi" id="codigoi">
							<label>Nombre</label>
							<input type="text" class="form-control input-sm" name="descripcioni" id="descripcioni">
												
							<label>Estado</label>		


					<select class="form-control input-sm " id="estadoi" name="estadoi">
					<option value="A">Selecciona Categoria</option>
			 	
						<option > Activo</option>
						<option > Inactivo</option>
						
				</select>
							<p></p>						
							
						</form>	
      </div>
      <div class="modal-footer">
        <button  id="btnAgregarefe" type="button" class="btn btn-warning" data-dismiss="modal">Agregar Enfermedad</button>
       
      </div>
    </div>
  </div>
</div>


</body>
</html>



<script type="text/javascript">
	function AgregaDatosEnfermedad(Codigoe)
	{
				$.ajax({
				type:"POST",
				data:"ide="+Codigoe,
				url:"../Procesos/ProcesoEnfermedad/ObtenerDatosEnfermedad.php",
				success:function(r){
					// tenemos que transformar la r en formato json por que si recibm
					dato=jQuery.parseJSON(r);
					$('#codigoU').val(dato['Codigo']);
					$('#desu').val(dato['Descripcion']);
					$('#estadou').val(dato['Estado']);

			}
		});
	}



	function EliminaUsuario(CodigoUsuario){
		alertify.confirm('Desea Eliminar esta Usuario', function()
			{
			 	$.ajax({
				type:"POST",
				data:"CodigoUsu="+CodigoUsuario,
				url:"../Procesos/Usuarios/EliminarUsuario.php",
				success:function(r){
						if (r==1) {
							alertify.alert("Elimnaco con exito");
							$('#tablaEnfermedades').load("Usuarios/tablaEnfermedades.php");
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


<script type="text/javascript">
		
	$(document).ready(function(){
		$('#btnActualizaEnfermedad').click(function()
		{
		datos=$('#frmenfermedadu').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../Procesos/ProcesoEnfermedad/ActualizarEnfermedad.php",
			success:function(r){	

 			if (r==1) { 				
 				alertify.alert("Actualizado con Exito");
 				//location.reload();
 					$('#tablaEnfermedadesLoad').load("Usuarios/tablaEnfermedades.php");
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
		$('#btnAgregarefe').click(function()
		{
		datos=$('#frmRegistroefermedadI').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../Procesos/ProcesoEnfermedad/registrarenfermedad.php",
			success:function(r){
			

 			if (r==1) {
 				
 				alertify.alert("Actualizado con Exito");
 				$('#tablaEnfermedadesLoad').load("Enfermedades/tablaEnfermedades.php");
 			}
 			else{
 				//console.log(r);
 				alertify.error("Nose pudo Agregar");
 			}
			}
		});
	});
	});
</script>





<script type="text/javascript"> // PARA MOSTRAR LA TABLA  enfermedad
	$(document).ready(function(){
		$('#tablaEnfermedadesLoad').load("Enfermedades/tablaEnfermedades.php");
		
	});
</script>


<?php 
}else
{
	header("location:../index.php");
}
 ?>
