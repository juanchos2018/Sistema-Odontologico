


<?php require_once "dependencias.php" ?>

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
          <a class="" href="inicio.php"><img class="" src="../img/Diente2.png" alt="" width="80px" height="80px"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav navbar-right">
            <li ><a href="CitasMedicas2.php"><span class="glyphicon glyphicon-list-alt"></span> Citas Medicas</a>
            </li>

          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Consultas <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="ConsultaUsu.php">Usuarios</a></li>
              <li><a href="ConsultaPaci.php">Pacientes</a></li>
               <li><a href="ConsultaCitas.php">Todas las Citas</a></li>
            </ul>
          </li>


        <?php
        if($_SESSION['Nivel']=="Administrador"):
         ?>
           <li><a href="Medicos.php"><span class="glyphicon glyphicon-user"></span> Medicos</a>
            </li>
         <?php 
      endif;
          ?>


             <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Pacientes <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="Pacientes.php">AgregarPaciente</a></li>
              <li><a href="TablaPacientes.php">Lista </a></li>
            </ul>
          </li>


        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Ajustes <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="Tarifas.php">Tafiras</a></li>
              <li><a href="Usuarios.php">Usuarios</a></li>
              <li><a href="#">Clinica</a></li>
               <li><a href="Enfermedades.php">Enfermedades</a></li>
            </ul>
          </li>
          


          <li class="dropdown" >
            <a href="#" style="color: red"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Usuario: <?php echo $_SESSION['Nivel']; ?>  <span class="caret"></span></a>
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

