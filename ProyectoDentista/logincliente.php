<?php 
	
/*	require_once "Clases/Conexion.php";
	$obj= new Conectar();
	$conexion=$obj->conexion();

	$sql="SELECT * from usuarios2 where Nivel='Administrador'";
	$result=mysqli_query($conexion,$sql);
	$validar=0;
	if(mysqli_num_rows($result) > 0){
		$validar=1;
	}*/
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login de usuario</title>
	<link rel="stylesheet" type="text/css" href="Librerias/bootstrap/css/bootstrap.css">
	<script src="Librerias/jquery-3.2.1.min.js"></script>
	<script src="js/funciones.js"></script>
</head>
<body style="background-color: gray">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-primary">
					<div class="panel panel-heading">Modo Paciente</div>
					<div class="panel panel-body">
						<p align="center">
							<img src="img/diente.jpg"  height="190">
						</p>
						<form id="frmLoginc">
							<label>Dni</label>
							<input type="text" class="form-control input-sm" name="dni" id="dni">
							
							<p></p>
							<span class="btn btn-primary btn-sm" id="entrarSistema">Entrar</span>
						
							
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){

		vacios=ValidadFormVacio('frmLoginc');

			if(vacios > 0){
				alert("Debes llenar todos los campos!!");
				return false;
			}

		datos=$('#frmLoginc').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"ProcesosCliente/ProcesoCliente/LoginCliente.php",
			success:function(r){

				if(r==1){
					window.location="VistaCliente/iniciocliente.php";
				}else{
					alert("No se pudo acceder :(");
				}
			}
		});
	});
	});
</script>
