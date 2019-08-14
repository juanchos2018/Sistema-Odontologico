



<!DOCTYPE html>
<html>
<head>
	<title>registro</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.2.1.min.js"></script>
	

</head>
<body style="background-color: gray">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-danger">
					<div class="panel panel-heading">Registrar Administrador</div>
					<div class="panel panel-body">
						<form id="frmRegistro">
							<label>Codigo</label>
							<input type="text" class="form-control input-sm" name="codigo" id="codigo">
							<label>Nombre</label>
							<input type="text" class="form-control input-sm" name="nombre" id="nombre">
							<label>Clave</label>
							<input type="text" class="form-control input-sm" name="clave" id="clave">
							<label>nivel</label>
							<input type="text" class="form-control input-sm" name="nivel" id="nivel">
							<p></p>
							<span class="btn btn-primary" id="registro">Registrar</span>
							<button type="button" id="btn"> gola</button>
							<a href="Login.php" class="btn btn-default">Regresar login</a>
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
		$('#btn').click(function(){

			//vacios=ValidadFormVacio('frmRegistro');

		alert("hola");
		});
	});
</script>

