

<?php 
session_start();

if (isset($_SESSION['codigo'])) {
	# code...
//	echo $_SESSION;


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php require_once("menu.php") ?>
	  <link href="../Librerias/animate.css/animate.min.css" rel="stylesheet">
	  <script src="../Librerias/animatedSelector.js"></script>
     <script src="../Librerias/wow.js"></script>

<style type="text/css">
	.tile-stats {
    position: relative;
    display: block;
    margin-bottom: 12px;
    border: 1px solid #E4E4E4;
    -webkit-border-radius: 5px;
    overflow: hidden;
    padding-bottom: 5px;
    -webkit-background-clip: padding-box;
    -moz-border-radius: 5px;
    -moz-background-clip: padding;
    border-radius: 5px;
    background: #FFF;
    transition: all .3s ease-in-out;
}
.tile-stats .icon {
    width: 20px;
    height: 20px;
    color: #BAB8B8;
    position: absolute;
    right: 53px;
    top: 22px;
    z-index: 1;
}
.tile-stats .icon {
    width: 20px;
    height: 20px;
    color: #BAB8B8;
    position: absolute;
    right: 53px;
    top: 22px;
    z-index: 1;
}



</style>
</head>
<body>


<div class="container">
	<br>
	<br>
<div class="row top_tiles">
					<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-ticket"></i></div>
                          <div class="count"> </div>
                           <button  id="btnirusuarios" type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal">Usuarios</button>
                          <hr>
                          <img src="../img/Usuarios.png" height="240" width="300">
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-list-alt"></i></div>
                          <div class="count"></div>
                        <button  id="btndoctores" type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal">Doctores</button>
                          <hr>
                          <img src="../img/iconodentista3.png" height="240" width="300">
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-list-alt"></i></div>
                          <div class="count"></div>
                          <button  id="btnpacientes" type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal">Pacientes</button>
                          <hr>
                          <img src="../img/paciente.png" height="240" width="300" >
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-list-alt"></i></div>
                          <div class="count"></div>
                           <button  id="btncalendario" type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal">Calendario</button>
                          <hr>
                          <img src="../img/calendario.jpg">
                        </div>
                    </div>
	
</div>
<hr>
</div>


</body>
</html>

<script type="text/javascript">
  
$(document).ready(function(){
  $('#btnirusuarios').click(function(){

    window.location="Usuarios.php";
  });
  $('#btndoctores').click(function(){

    window.location="Medicos.php";
  });
  $('#btnpacientes').click(function(){ //btncalendario

    window.location="Pacientes.php";
  });
  $('#btncalendario').click(function(){ //btncalendario

    window.location="Vista3.php";
  });
});

</script>
<?php 
	}else
	{
		header("location:../index.php");
	}
 ?>
