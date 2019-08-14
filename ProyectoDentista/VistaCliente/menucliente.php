


<?php require_once "dependencias2.php" ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <!-- Begin Navbar -->
  <div id="nav">
    <div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav navbar-right">

            <li ><a id="boton1"><span class="glyphicon glyphicon-list-alt"></span>Mi Historial</a>

            </li>

          </li>

         

           <li><a href="Enfermedades.php"><span class="glyphicon glyphicon-user"></span> Ermenades</a>
            </li>
      


             <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Tratamientos <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="Limpieza.php">Limpieza Dental</a></li>
              <li><a href="Estetica.php">Estetica Dental </a></li>
               <li><a href="Ortodoncia.php">Ortodoncia</a></li>
                <li><a href="Curaciones.php">Curaciones</a></li>
                 <li><a href="#">Endodoncia</a></li>
                  <li><a href="#">Cirugia Oral</a></li>
            </ul>
          </li>


  <li ><a href="#"><span class="glyphicon glyphicon-list-alt"></span>Staff MEdico</a>
            </li>
          


          <li class="dropdown" >
            <a href="#" style="color: red"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Usuario: <?php echo $_SESSION['dni']; ?>  <span class="caret"></span></a>
            <input type="text" name="txt1" id="txt1" hidden="" value="<?php echo $_SESSION['dni'] ?>">
            <ul class="dropdown-menu">
              <li> <a style="color: red" href="../Procesos/Salir.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
              
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.contatiner -->

  </div>
</div>
<!-- Main jumbotron for a primary marketing message or call to action -->


<!-- /container -->        


</body>
</html>

<script type="text/javascript">
  $(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
      $('.logo').height(200);

    }
    else {
      $('.logo').height(100);
    }
  }
  );
</script>


<script type="text/javascript">
  $(document).ready(function(){

    $('#boton1').click(function(){
      var txt1 = $("#txt1").val();

      window.location="TablaCliente.php?txt1="+txt1;
     // window.location="TablaCliente.php";
    });
  });
</script>