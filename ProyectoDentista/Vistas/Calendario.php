
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

</head>


<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="../js/jquery.min.js"></script>
<script src="../js/moment.min.js"></script>

<link rel="stylesheet" type="text/css" href="../css/fullcalendar.min.css">
<script src="../js/fullcalendar.min.js"></script>
<script src="../js/es.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<style>

h1{
	text-align: center;
}
</style>
<body>
<div class="container">
	<div class="row">
	<div class="col"></div>
	<div class="col-7">  <div id="calendario"></div> </div>
	<div class="col"></div>
</div>
</div>





<!--  SEGUNDO MODAL  -->
<div class="modal fade" id="ModalEventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tituloevento"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


    		Id:<input type="text" name="txtid" id="txtid"><br>
    	 titulo <input type="text" name="txttitulo" id="txttitulo"><br>
    	Fecha <input type="text" name="txtfehca" id="txtfehca"><br>

    	hora: <input type="text" name="txthora" id="txthora" value="10:30"> <br>
    	
    	color: <input type="color" value="#ff0000" id="txtcolor"  name="txtcolor"> <br>

desciprion <textarea name="txtdescripcion" id="txtdescripcion" rows="3"></textarea> <br>

      </div>
      <div class="modal-footer">
      	<button type="button" id="btnagrega" name="btnagrega" class="btn btn-success">Agregar </button>
      	<button type="button" class="btn btn-success">Close</button>
      	<button type="button" class="btn btn-secondary">Borrar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">cAcenlar</button>
        
      </div>
    </div>
  </div>
</div>


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
			$('#tituloevento').html(calEvent.title);
			//$('#descripcionevento').html(calEvent.descripcion);
			$('#txtdescripcion').val(calEvent.descripcion);
			$('#txtid').val(calEvent.id);
			//alert(calEvent.id);

			$('#txttitulo').val(calEvent.title);
			$('#txtcolor').val(calEvent.color);

			Fechahora=calEvent.start._i.split(" ");
			$('#txtfehca').val(Fechahora[0]);	
			$('#txthora').val(Fechahora[1]);
			$('#exampleModal').modal();

		}
	
	});
});


</script>