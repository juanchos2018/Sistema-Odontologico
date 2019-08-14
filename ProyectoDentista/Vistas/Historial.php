
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
</head>
<body>
<div class="container">
	<br>
	<h2> Hitorial</h2>

	<div class="row">
		
		<div  class="col-sm-10" id="tablahistoria" ></div>
	</div>
</div>




<!-- Modal -->
<div class="modal fade" id="Ondotograma" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">que poner aqui otra ves el odontograma</h4>
      </div>
      <div class="modal-body">
        

      </div>
      <div class="modal-footer">
        <button  id="btnActualizaUsuario" type="button" class="btn btn-warning" data-dismiss="modal">averrrr</button>
       
      </div>
    </div>
  </div>
</div>





</body>
</html>



<script type="text/javascript">
/*	function AgregaDatosUsuario(Codigousu)
	{

			$.ajax({
				type:"POST",
				data:"idusu="+Codigousu,
				url:"../Procesos/ProcesoUsuarios/obtenerdatosusuario.php",
				success:function(r){
					// tenemos que transformar la r en formato json por que si recibm
					dato=jQuery.parseJSON(r);
					$('#codigoU').val(dato['Codigo']);
					$('#nombreU').val(dato['Nombre']);
					$('#nivelU').val(dato['Nivel']);

			}
		});
	}



	function Ondotgrama2(){
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


<script type="text/javascript"> ///PARA ACTUALIZAR USUARIO
	
/*	$(document).ready(function(){
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
 				$('#tablaUsuariosLoad').load("Usuarios/TablaUsuarios.php");
 			}
 			else{
 				//console.log(r);
 				alertify.error("Nose pudo Actualizar");
 			}
			}
		});
	});
	});*/
</script>



<script type="text/javascript"> // PARA REGSITRAR USUARIOS
		
	/*$(document).ready(function(){
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
 				$('#tablaUsuariosLoad').load("Usuarios/TablaUsuarios.php");
 			}
 			else{
 				//console.log(r);
 				alertify.error("Nose pudo Actualizar");
 			}
			}
		});
	});
	});*/
</script>





<script type="text/javascript"> // PARA MOSTRAR LA TABLA  USUARIOS
	$(document).ready(function(){
		$('#tablahistoria').load("Histotorial/tablahistorial.php");
		
	});
</script>


<?php 
}else
{
	header("location:../index.php");
}
 ?>
