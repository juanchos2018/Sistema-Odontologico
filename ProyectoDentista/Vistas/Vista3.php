
<?php 
session_start();

if (isset($_SESSION['codigo'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
	<?php require_once("menu2.php") ?>
<!--
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">  

-->


<!-- <script src="../js/jquery.min.js"></script> -->

<script src="../js/moment.min.js"></script>

<link rel="stylesheet" type="text/css" href="../css/fullcalendar.min.css">

<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/contact-form.css" type="text/css">	


<script src="../js/fullcalendar.min.js"></script>
<script src="../js/es.js"></script>

<script src="../js/popper.min.js" ></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

<style type="text/css">
	
	.contenedor {
    width: 55%;
    max-width: 800px;
    margin: 0 auto;
    padding-bottom: 8px;
}

</style>

</head>
<body>

<div class="contenedor">
	<div class="row">
	<div class="col"></div>
	<div class="col-6">  <div id="calendario"></div> </div>
	<div class="col"></div>
</div>
</div>
 <br>
 <br>
 




<!--  SEGUNDO MODAL  -->
<div class="modal fade" id="ModalEventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
    <strong>    <h3 class="modal-title" id="tituloevento"></h3> </strong>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form id="frmActualizaFechaCita" >
	<input hidden="" type="text" name="txtid" id="txtid"><br>
         <input hidden="" type="text" name="txttitulo" id="txttitulo">  
  <!--   	Fecha <input type="text" name="txtfehca" id="txtfehca"><br> -->

    			 <div class="input-group">
                     <span class="input-group-addon">Fecha</span>
                   <input type="date" name="txtfehca" id="txtfehca"  class="form-control" >
                  </div>


    	hora: <input  type="time" name="txthora" id="txthora" class="form-control"  > 
    	Medico: <input type="text"  id="txtme"  name="txtme" class="form-control" > 
    	Paciente: <input type="text"  id="txtpa"  name="txtpa" class="form-control" > 
    		Dni: <input type="text"  id="txtdni"  name="txtdni" class="form-control" > 

   <input hidden="" type="color" value="#ff0000" id="txtcolor"  name="txtcolor"> 

		desciprion <textarea name="txtdescripcion" id="txtdescripcion" rows="3" class="form-control" ></textarea> 
		Estado: <input type="text"  id="txtestado"  name="txtestado" class="form-control" >
</form>
    	

      </div>
      <div class="modal-footer">
      	<button type="button"  id="btnactulizafechaCita" name="btnactulizafechaCita" class="btn btn-success">Cambiar Fecha </button>

      
        
      </div>
    </div>
  </div>
</div>


<!-- mdal enviar mensaje -->
<!-- 
<div class="modal fade" id="modalMensaje" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Evniar Mensaje Texto</h4>
      </div>
      <div class="modal-body">      

	      	 <form id="frmmensaje" class="popup-form">
	      	 		<div class="row">
				<label>Numero Celular</label>
				<input type="text"  name="txtnumero" id="txtnumero"> <br>
			
				<label>ingrese mensaje</label> <br>
				<input type="text" name="txtmensaje" id="txtmensaje"> <br>
				<textarea>
					
				</textarea>
				<div class="form-group last col-sm-12">
					<i class='fa fa-envelope'></i>
				<button type="button"  name="btnenviarTexto"  id="btnenviarTexto" class="btn btn-custom"> EnviarMensaje</button> 
				</div>
				 <br>
				</div >
			</form>

      </div>
      
    </div>
  </div>
</div> -->


<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Enviar Mensaje Texto</h4>
      </div>
      <div class="modal-body">      
      		<div class="row">
				<div class="tab-content">
					<div class="col-sm-12">
						<div class="item-wrap">
							<div class="row">				
								
								<div class="col-md-12">							
								
								<form id="frmmensaje" name="frmmensaje" data-toggle="validator" class="popup-form">
												<div class="row">
													<div id="msgContactSubmit" class="hidden"></div>					
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="txtnumero" id="txtnumero" placeholder="Teléfono*" class="form-control" type="text" required data-error="Por favor ingresa tu número de teléfono">
														<div class="input-group-icon"><i class="fa fa-phone"></i></div> 
													</div><!-- end form-group -->
												
													<div class="form-group col-sm-12">
														<div class="help-block with-errors"></div>
														<textarea rows="3" name="txtmensaje" id="txtmensaje" placeholder="Escribe tu comentario aquí*" class="form-control" required data-error="Por favor ingresa un mensaje"></textarea>
														<div class="textarea input-group-icon"><i class="fa fa-pencil"></i></div>
													</div><!-- end form-group -->
													
													<div class="form-group last col-sm-12">
														<button type="button" id="btnenviarTexto" name="btnenviarTexto" class="btn btn-custom"><i class='fa fa-envelope'></i> Enviar</button>
													</div><!-- end form-group -->	
											
												
												</div><!-- end row -->
											</form><!-- end form -->							
												
								</div>
							</div><!--End row -->					
							<!-- Popup end -->							
						</div><!-- end item-wrap -->
					</div><!--End col -->
				</div><!--End tab-content -->
			</div><!--End row -->

      </div>
      
    </div>
  </div>
</div>


<!-- fin modal -->


										


</body>
</html>


<script type="text/javascript">

var nuevoevento;

	$('#btnagrega').click(function(){
		REcolectarDatosGui();
		EnviarInformacion('agregar',nuevoevento);
		// var nuevoevento={
		// 	title:$('#txttitulo').val(),
		// 	start:$('#txtfehca').val()+" "+$('#txthora').val(),
		// 	color:$('#txtcolor').val(),
		// 	descripcion:$('#txtdescripcion').val(),
		// 	textColor:"#FFFFFF"
		// };
		

	});
function REcolectarDatosGui(){

		nuevoevento={
			id:$('#txtid').val(),
			title:$('#txttitulo').val(),
			start:$('#txtfehca').val()+" "+$('#txthora').val(),
			color:$('#txtcolor').val(),
			descripcion:$('#txtdescripcion').val(),
			textcolor:"#FFFFFF",
			end:$('#txtfehca').val()+" "+$('#txthora').val()
		};
}	

function EnviarInformacion(accion,objEnveto){
	$.ajax({
		type:'POST',
		url:'eventos.php?accion='+accion,
		data:objEnveto,
		success:function(msg){
			if (msg) {
				$('#calendario').fullCalendar('refetchEvents');
				$('#ModalEventos').modal('toggle');
		}
		},
		error:function(){
			alert("hay  un error");

		}
	});

}
</script>
</body>
</html>

<script type="text/javascript">
	
$(document).ready(function(){
	$('#calendario').fullCalendar({
		header:{
			left:'today,prev,next,miBoton',
			center:'title',
			right:'month, basicWeek, basicDay, agendaWeek, agendaDay'
		},
		customButtons:{
			miBoton:{
				text:"boton 1",
				click:function(){
					alert("accion de boton");
				}
			}
		},
		dayClick:function(date,jsEvent,view){
			$('#txtfehca').val(date.format());
			$('#ModalEventos').modal();
				
		},
	
		events:'Eventos.php',

		eventClick:function(calEvent,jsEvent,view){

			$('#txtestado').prop('disabled',true);
				$('#tituloevento').html(calEvent.title);
			

				$('#txtdescripcion').val(calEvent.Observacion);
				$('#txtid').val(calEvent.id);
				
				$('#txtme').val(calEvent.medic);
		 		$('#txtpa').val(calEvent.Nombres);
			    $('#txtdni').val(calEvent.Paciente);
				$('#txttitulo').val(calEvent.title);
				$('#txtcolor').val(calEvent.color);
				$('#txtestado').val(calEvent.Estado	);

				Fechahora=calEvent.start._i.split(" ");
				$('#txtfehca').val(Fechahora[0]);	
				$('#txthora').val(Fechahora[1]);
				$('#exampleModal').modal();

		}
	
	});
});


</script>


<script type="text/javascript"> ///PARA ACTUALIZAR fecha
	
	$(document).ready(function(){
		$('#btnactulizafechaCita').click(function()
		{

		// datos=$('#frmActualizaFechaCita').serialize();
		var estado = $("#txtestado").val();
		if (estado=="Finalizado") {
			alertify.alert("ya finalizo esta cita Wey");
			return;
		}
		else{
			
		$('#Modal2').modal('show');				
		AgregaNumeroPaciente();

		// 	$.ajax({
		// 	type:"POST",
		// 	data:datos,
		// 	//url:"../Procesos/ProcesoCita/ActualizaFechaCita.php",
		// 	success:function(r){
	
		// 		$('#modalMensaje').modal('show');				
		// 		AgregaNumeroPaciente();


	 // 			if (r==1) {
	 				
	 // 				alertify.alert("Actualizado con Exito");
	 // 				$('#calendario').fullCalendar('refetchEvents');
	 // 				$('#ModalEventos').modal('toggle');
	 // 				//$('#tablaUsuariosLoad').load("Usuarios/TablaUsuarios.php");
	 // 			}
	 // 			else{
	 // 				//console.log(r);
	 // 				alertify.error("Nose pudo Actualizar");
	 // 			}
		// 	}
		// });
		}
		
	});


		
	});

function AgregaNumeroPaciente()
	{
		var dni=$('#txtdni').val();		
			$.ajax({
				type:"POST",
				data:"idnip="+dni,
				url:"../Procesos/ProcesoPacientes/ObtenerDatosPaciente.php",
				success:function(r){
			
					dato=jQuery.parseJSON(r);
				
					$('#txtnumero').val(dato['NumeroTelefono']);					

			}
		});
	}

</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#btnenviarTexto').click(function(){
				
			datos=$('#frmActualizaFechaCita').serialize();
			var estado = $("#txtestado").val();
			$.ajax({
			type:"POST",
			data:datos,
			url:"../Procesos/ProcesoCita/ActualizaFechaCita.php",
			success:function(r){
	
	 			if (r==1) {
	 				
	 				alertify.alert("Actualizado con Exito");
	 				$('#calendario').fullCalendar('refetchEvents');
	 				$('#ModalEventos').modal('toggle');
	 				//$('#tablaUsuariosLoad').load("Usuarios/TablaUsuarios.php");
	 			}
	 			else{
	 				//console.log(r);
	 				alertify.error("Nose pudo Actualizar");
	 			}
			}
			});

			datos2=$('#frmmensaje').serialize();
			$.ajax({
			type:"POST",
			data:datos2,
			url:"example.php",
			success:function(r){
	
	 			
			}
			});

		});
	});

</script>

<script type="text/javascript">
	
	// $(document).ready(function(){

	// $('#btncomenzar').click(function(){
	// 	var txtdnic = $("#txtdnic").val();
	// 	var idcita = $("#txtidcita").val();
	// 	var estado = $("#txt5").val();
	// 	if (estado=="Finalizado") {

	// 		alertify.alert("ya finalizo esta cita Wey");
	// 	}
	// 	else{
	// 		window.location="Odontograma.php?txtdnic="+txtdnic+"&txtidcita="+idcita;
		
	// 	}
		
	// 	});
	// });
</script>

<script type="text/javascript"> // PARA REGSITRAR USUARIOS
		
	$(document).ready(function(){
		$('#btnenviar').click(function()
		{
			//alert("hola");
		datos=$('#frmmensaje').serialize();
		$.ajax({
			type:"POST",
			data:datos,
		//	url:"../Procesos/ProcesoPacientes/EnviarMensaje.php",
				url:"example.php",
				
			success:function(r){		

 			if (r==1) { 				
 				alertify.alert("Enviado con Exito");				
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


<?php 
}else
{
	header("location:../index.php");
}
 ?>
