  
<?php 
session_start();

if (isset($_SESSION['dni'])) {
  # code...
//  echo $_SESSION;


 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Clientes</title>
  <?php require_once("menucliente.php") ?>
</head>
<body>

<div class="container">
 
  <div class="row">
    <div class="col-sm-2">
  
    </div>
    <div class="col-sm-8">
      <div id ="tablaCliente"></div>
    </div>

  </div>
</div>


<!-- Button trigger modal -->

<!-- Modal -->


</body>
</html>


<script type="text/javascript">
 $(document).ready(function(){

  $('#tablaCliente').load("HistorialCliente/tablaHistorialCliente.php");
  



  });
</script>


<?php 
}else
{
  header("location:../index.php");
}
 ?>
