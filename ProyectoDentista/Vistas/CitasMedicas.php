4 
<?php 
session_start();

if (isset($_SESSION['codigo'])) {
	# code...
//	echo $_SESSION;


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
	<?php require_once("menu.php") ?>



	<?php require_once("../Clases/Conexion.php");
	
		$c= new Conectar();
		$conexion=$c->conexion();
		$sql="SELECT id,Nombres from medicos ";

		$resultado= mysqli_query($conexion,$sql);

		$sql2="SELECT Dni,Nombres,Apellido from pacientes";
		$resultado2=mysqli_query($conexion,$sql2);


	 ?>


<style type="text/css">

			*{
				margin: 0;
				padding: 0;
			}
				html, body, .container1{
				height: 100%;
			}
		
		
			.context-menu{
				width: 200px;
				height: auto;
				box-shadow: 0 0 20px 0 #ccc;
				position: absolute;
				display: none;
			}
		
			.context-menu ul{
				list-style: none;
				padding: 5px 0px 5px 0px;
			}

			.context-menu ul li:not(.separator){
				padding: 10px 5px 10px 5px;
				border-left: 4px solid transparent;
				cursor: pointer;
			}

			.context-menu ul li:hover{
				background: #eee;
				border-left: 4px solid #666;
			}

			.separator{
				height: 1px;
				background: #dedede;
				margin: 2px 0px 2px 0px;
			}
			#menu{
			background-color: white;
			border:2px solid #6A6A6A;
			border-radius: 5px;
			box-shadow: 5px 5px 10px #474747;
		
			padding.top: 5px;
			padding-bottom: 5px;
			display: none;
			position: absolute; 
		}
		.menuItem{
			padding-left: 5px;
			padding-right: 5px;
			font-family: Arial, Helvetica,sans-serif;
			cursor: default;
		}
		.menuItem:hover{
			background-color: #EBEBEB;
		}
		.linrBreak{
			width: 95%;
			height: 1px;
			background-color: #626262;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 2px;
		}
#trees{
	margin-left: 4px;
	margin-right: 5px;

}
#trees1{
	margin-left: 4px;
	margin-right: 5px;

}
.sinborde {
    border: 0;
  }


textarea:focus{
    border-color: rgb(255, 144, 0);
    box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075)inset, 0 0 8px rgba(255,144,0,0.6);
    outline: 0 none;
}
.redondeadonorelieve {
    border-radius: 5px;
    border: 1px solid #008f39;
  }

  .transpa  {
    background-color: transparent;
 border: 0;

</style>

</head>
<body>
	<br>
<div class="container">
	<!-- <div class="input-group"> -->
                                <!--   <span class="input-group-addon">Fecha</span>
                                <input type="date"  class="form-control" id="txtfiltro" name="txtfiltro" 	>
                                </div>
                                <button type="button" class="btn btn-default"  id="btnfecha">
                                        <span class="glyphicon glyphicon-search"></span> Buscar</button> -->
	<div class="row">
		<div class="col-sm-2">
			
			</div>
		<div  class="col-sm-8" id="tablaCitas" ></div>
	</div>
</div>


<hr>

<!-- Modal -->
<div class="modal fade" id="NuevaCita" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva Cita</h4>
      </div>
      <div class="modal-body">        

      	  <form id="frmNuevacita">
							<label>Fecha</label>

							 <div class="input-group">
                                  <span class="input-group-addon">Fecha</span>
                                <input type="date"  class="form-control" id="fechai" name="fechai" 	>
                                </div>
			<!-- 				<input type="text" class="form-control input-sm" name="fechai" id="fechai" value="<?php //echo date("Y-m-d"); ?>" > -->


							<input type="text" hidden="" name="txttitulo" id="txttitulo" value="Cita">
							
							<input type="text"  hidden="" name="colorletra" id="colorletra" value="#FFFFFF">
								<!-- textcolor:"#FFFFFF", -->
							<label>Hora</label>
							<input type="time" class="form-control input-sm" name="horai" id="horai">
					
							<label>Medico</label>
					
						<select class="form-control input-sm " id="medicoi" name="medicoi">
								<option value="A">Selecciona Medico</option>
						 	
									<?php while($ver=mysqli_fetch_row($resultado)): ?>
									<option value="<?php echo $ver[0] ?>"> <?php echo $ver[1]; ?> </option>
									<?php endwhile; ?>
									
							</select>

							<label>Paciente	</label>
						

						<select class="form-control input-sm " id="pacientei" name="pacientei">
								<option value="A">Selecciona Paciente</option>
						 	
									<?php while($ver2=mysqli_fetch_row($resultado2)): ?>
									<option value="<?php echo $ver2[0] ?>"> <?php echo $ver2[1]; ?> </option>
									<?php endwhile; ?>
									
							</select>
						<label>Observacion</label>
						<input type="text"  class="form-control input-sm" name="observacioni" id="observacioni	"> <br>
						<input type="color" value="#ff0000" id="txtcolor"  name="txtcolor">  Color
						<input type="text" hidden="" name="estadoi" id="estadoi" value="Pendiente">
							<p></p>
						
							
						</form>	
      </div>
      <div class="modal-footer">
        <button  id="btnuevacita" type="button" class="btn btn-success" data-dismiss="modal">Registrar Cita</button>
       
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<div class="modal fade" id="ModaObervacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog modal-sm" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Que Desea Realizar</h4>
      </div>
      <div class="modal-body" >        

      	  <form id="frmNuevacita" method="post" >
      	  	<input type="txt"  hidden="" name="txtdnic" id="txtdnic"> 
      	  	<input type="txt"  hidden="" name="txtidcita" id="txtidcita"> 
   <span class="btn btn-success"  style="width:100%" >Cita Medica 	<input class="transpa" type="text" name="tiu" id="tiu" >  </span>
      	  	<div class="redondeadonorelieve"> 
      	  		
               <div class="input-group">
                                 
                                <!-- <input type="textarea" name="start_at"  class="form-control" id=""> -->
      	  <strong>Doctor     :</strong>  <input type="text" class="sinborde" name="txt1" id="txt1"> <br>
      	  	<strong>Paciente  : </strong>    <input type="txt" class="sinborde" name="txt2" id="txt2" 	> <br>
      	  	<strong>Fecha    :</strong>   <input type="txt"  class="sinborde" name="txt3" id="txt3"> <br>      	
      	  	 <strong>Observacion   :</strong>: <input type="txt"  class="sinborde" name="txt4" id="txt4"> <br>
      	  	 	<strong>Estado   :</strong>: <input type="txt"  class="sinborde" name="txt5" id="txt5"> <br>
                               
                    </div>
                </div> <br>                   
			
		</form>	
      </div>
      <div class="modal-footer">
        <button  id="btnVerHistorial" type="button" class="btn btn-primary btn-lg btn-block"  data-toggle="modal"  data-target="#ModalHistorial" >Ver Historial</button>
        <button  id="btncomenzar" type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal"
        >Comenzar</button>
        <!--  <input type="submit" name="idmostrar" name="idmostrar"  >         --> 
   
      </div>
    </div>
  </div>

</div>



<!--  AQUI  MODAL DE ODONTOGRAMA  COÑO -->

<div class="modal fade" id="ModalHistorial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Historial</h4>
      </div>
      <div class="modal-body">

      	<form id="frmDatos">
      		<input type='text' id='txtdniotro' name='txtdniotro'>
      		<button id="b" name="b">buscar</button>
      	</form>
      	
       
<script type="text/javascript">

	$('#fechai').val(date.format());
	$(document).ready(function(){
		$('#btnVerHistorial').click(function(){
			var idd=$('#txtdnic').val();			
			});
		});

</script>

	 <?php 

	if(isset($_POST['b'])) {
		$code=$_POST['txtdniotro'];
		$consu="SELECT Dni,Nombre,Fecha,Doctor,Procedimientos,Estado,Costo from Historial
		where = '$code'";
		$rs=mysqli_query($consu,$conexion);

	}
	//$txtdnic =strtoupper($_GET['txtdnic']);
	 else $txtdnic="";
	 echo $txtdnic;
	 echo "no hay"; 
	$consulta="SELECT Dni,Nombre,Fecha,Doctor,Procedimientos,Estado,Costo from Historial";

		$resultado3=mysqli_query($conexion,$consulta);
	
				?>
		      	<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
				<caption><label>Historial</label></caption>
					<tr>
						
						<td>Codigo</td>
						<td>Procedimiento</td>
						<td>Categoria</td>
						<td>Costo</td>
						<td>Editar</td>
						<td>Eliminar</td>

				</tr>
					<?php 

				while ($ver5=mysqli_fetch_row($resultado3)):
				 	
				  ?>

					<tr>
						<td><?php echo $ver5[0]; ?></td>
						<td><?php echo $ver5[1]; ?></td>
						<td><?php echo $ver5[2]; ?></td>
						<td><?php echo $ver5[3]; ?></td>
						<td><?php echo $ver5[4]; ?></td>
						<td><?php echo $ver5[5]; ?></td>			
						
					</tr>
					<?php endwhile; ?>
				</table>
      
				     </div>
				      <div class="modal-footer">
				    <button  id="btnAgrega" type="button" class="btn btn-warning" data-dismiss="modal">Agregar CAtgoria</button>
			       
			      </div>
			    </div>
			  </div>
</div>


<!--  AQUI  TEmina modal  COÑO -->


</body>
<div id="menu">
	<form name="frmEstados">
		<label class="menuItem"  data-toggle="modal" data-target="#Piezas" id="Sanos" name="Sanos">=Sano</label>

		<br>
		<span class="menuItem" data-toggle="modal" data-target="#Piezas" id="Curado">=Curado </span><br>
		<span class="menuItem" >-=Faltante</span><br>
		<span class="menuItem">DO=Diente obturado</span><br>
		<span class="menuItem">C=Cariado</span><br>
		<span class="menuItem">X=Exodoncoa</span><br>
		<span class="menuItem">CP=Caries Penetrante</span><br>
		<span class="menuItem">R=Retenido</span><br>
		<span class="menuItem">CO=Corona</span><br>
		<div class="linrBreak"></div><br>
		<span class="menuItem">INC=Incrustacion</span><br>
		<span class="menuItem" id="refresh">Refrescar</span>
		</form>
	</div>
</html>



<script type="text/javascript">
	function AgregaDatosCitas(Codigousu)
	{

			$.ajax({
				type:"POST",
				data:"idusu="+Codigousu,
				url:"../Procesos/ProcesoCita/obtenerdatoscitas.php",
				success:function(r){
					// tenemos que transformar la r en formato json por que si recibm
					dato=jQuery.parseJSON(r);
					$('#codigocita').val(dato['Codigo']);
							

			}
		});
	}


</script>


<script >

$(document).ready(function(){
	$('#btnVerHistorial').click(function(){

	});
});
		

</script>


<script type="text/javascript">
		
	function AgregaDdni(dni,idcita){
		$('#txtdnic').val(dni);
		$('#txtidcita').val(idcita);
	
			$.ajax({
				type:"POST",
				data:"idusuu="+idcita,
				url:"../Procesos/ProcesoCita/ObtenerDatosCita.php",
				success:function(r){
			
					dato=jQuery.parseJSON(r);

					$('#txt1').val(dato['Medico']);
					$('#txt2').val(dato['Paciente']);
					$('#txt3').val(dato['Fecha']);
					$('#txt4').val(dato['Estado']);
					$('#txt5').val(dato['Estado1']);
					
					$('#tiu').val(dato['Estado1']);
			
					var v =$('#txt5').val();
					if (v=="Finalizado") {

						document.getElementById('btncomenzar').style.display = 'none';
						}
						else{
							document.getElementById('btncomenzar').style.display = 'block';
						}
							}

		});
	


	}	

	



</script>

<script type="text/javascript">
	//FUNCIONNES ELIMINAR
	function EliminaCita(Codicita){
		//$('#txtidiente').val(Codidi);
		alertify.confirm('Desea Eliminar ', function()
			{
				//var txtd= $("#txtd").val();
			//	var params={idcli:$('#txtd').val(),iddi:Codidi};
				//datos=$('#frmeliminar').serialize();
				
			 	$.ajax({
				type:"POST",
				data:"idcitas="+Codicita,
				//data:params,
				url:"../Procesos/ProcesoCita/EliminarCita.php",
				success:function(r){
						if (r==1) {
							alertify.alert("Elimnado con exito");
							
							//$('#tablaEstados').load("CitasMedicas/Tablacitas2.php?txtd="+txtd);
							//$('#tablaUsuariosLoad').load("Usuarios/TablaUsuarios.php");
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

			document.getElementById('trees').oncontextmenu=function(){

				return false;
			}
			var id=1;
			var estado="asd";
			var esta="";

			//var result=document.frmEstados.Sanos.id;
				//var result=document.getElementById('Sanos').id;
			
				$('#trees').mousedown(function(e){
					if (e.button==2) {
							//$('#menu').show();
						$('#menu').css('left',e.pageX+5);			
						$('#menu').css('top',e.pageY+5);		
						$('#menu').fadeIn(100);
						//$('#txt').val(id);
						
						//$('#Sanos').click(function(){
								//location.reload();
						//	$('#txtestado').val("EStadobueno");
						//		})
						//$('#Curado').click(function(){
						//		//location.reload();
						//	$('#txtestado').val("EStadocurado");
						//	})
					}
			});

			$(document).click(function(e){

				if (e.button==0) {
		
					$('#menu').fadeOut(80);
					//alert("sdfdf");				
				}
			});
			$('#refresh').click(function(){
				location.reload();

			})
		});
</script>



<script type="text/javascript">

function EnviarDato()
{
	valor=document.getElementById('txtdnic').value;
	ajax=objetoAjax();
	ajax.open("POST","Odontograma.php",true)
	ajax.onreadystatechange=function(){
		if (ajax.readyState==4) {

			document.getElementById('resultado').innerHTML=ajax.responseText;
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlecodend");
	ajax.send("varp2="+valor);
}

</script>


<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaCitas').load("CitasMedicas/tablaCitas.php");
		// para MOSTRAR LA TABLA CITAS

	});
	
</script>

<script type="text/javascript">
	
	$(document).ready(function(){

	$('#btncomenzar').click(function(){
		var txtdnic = $("#txtdnic").val();
		var idcita = $("#txtidcita").val();
		var estado = $("#txt5").val();
		if (estado=="Finalizado") {

			alertify.alert("ya finalizo esta cita Wey");
		}
		else{
			window.location="Odontograma.php?txtdnic="+txtdnic+"&txtidcita="+idcita;
		
		}
		
		});
	});



</script>


<script type="text/javascript">
	
$(document).ready(function(){
		
		$('#btnuevacita').click(function(){

			vacios=ValidadFormVacio('frmNuevacita');

			if(vacios > 0){
				alertify.alert("Debes llenar todos los campos!!");
			//	alertify.success("Debes llenar todos los campos!!");  MENSAJE  PARA PONER ABAJO
				return false;
			}

			datos=$('#frmNuevacita').serialize();
			console.log(datos);
			$.ajax({
				type:"POST",
				data:datos,
				url:"../Procesos/ProcesoCita/registrarcita.php",
				success:function(r){
				
					if (r==1) {
						$('#frmNuevacita')[0].reset();
					//	$('#tablaUsuariosLoad').load("Usuarios/TablaUsuarios.php"); // CANDA VEZ QUE INSERTE  SE RECARGUE LA TABLA

						alertify.success("Agregado con exito");
					}
					else{
						alertify.error("no agregado wey");
						
					}
				}
			});
		});
});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#btncalendario').click(function(){
			alert("hola");
			//window.location('Calendario.php');
		});
	});
</script>


<script type="text/javascript">
	
// 	$(buscar_datos());

// 		function buscar_datos(consulta){

// 		$.ajax({
// 			url:"CitasMedicas/tablaCita1.php",
// 			type:"POST",
// 			datype:"html,",
// 			data:{consulta:consulta},
// 		})
// 		.done(function(respuesta){
// 			$('#tablaCitas').html(respuesta);
// 		})
// 		.fail(function(){
// 			console.log("error");
// 		})


// }

// 	$(document).ready(function(){

// 	$('#btnfecha').click(function(){
// 		var txtdnic = $("#txtfiltro").val();
// 		if (txtdnic!="") {
// 			buscar_datos(txtdnic);

// 		}
// 		else{
// 			buscar_datos();
// 		}
		
		
// 		});
// 	});


</script>

<?php 
}else
{
	header("location:../index.php");
}
 ?>
