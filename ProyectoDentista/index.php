 

<?php require_once "dependecias1.php" ?>



<!DOCTYPE html>
<html>
<head>
  <title></title>

  <style type="text/css">
    @media (min-width: 1600px) {

  .home-slider .content-wrapper {

    top: 25%;

  }

}

@media only screen and (max-width: 340px) {

  .home-testimonial .flexslider-three .flex-direction-nav .flex-next {

    right: 10%;

  }
  .contenedor {
    width: 92%;
    max-width: 1200px;
    margin: 0 auto;
    padding-bottom: 8px;
}
  .boxinfo {
    position: absolute;
    display: block;
    background: rgba(0,180,181,0.88);
    border-radius: 5px;
    padding: 0 3%;
    width: 94%;
    height: 78%;
    max-width: 458px;
    box-sizing: border-box;
    margin-top: 60px;
    padding-top: 55px;
}
  .boxinfo h1 {
    color: #fff;
    font-size: 25px;
    font-family: 'Roboto';
    font-weight: 700;
    font-style: oblique;
    margin-bottom: 36px;
    text-align: left;
    line-height: 43px;
}
  .boxinfo p {
    color: #fff;
    font-size: 14px;
    font-family: 'Roboto';
    margin-bottom: 43px;
    text-align: justify;
    line-height: 27px;
}
  </style>
</head>
<body>

  <!-- Begin Navbar -->
  <div id="nav">  
    <div class="navbar navbar-inverse navbar-fixed-top"  data-spy="affix" data-offset-top="100">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img class="img-circle" src="img/diente.jpg" alt="" width="150px" height="150px"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav navbar-right">

            <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a>
            </li>

            
          </li>
          

           <li><a href="Especialidades.php"><span class="glyphicon glyphicon-user"></span> Especialidades</a>
            </li>
          
       
           <li><a href="#"><span class="glyphicon glyphicon-user"></span> Establecimientos</a>
            </li>
       


           <li><a href="logincliente.php"><span class="glyphicon glyphicon-user"></span> Clientes</a>
          </li>
          <li><a href="Login.php"><span class="glyphicon glyphicon-usd"></span> Iniciar Sesion</a>
          </li>
          
         
              
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
<br>
<br>
<br>

<style type="text/css">
    .carousel-inner{ text-align: center; }
    .carousel .item > img {display: inline-block;}
  </style>
<div class="contenedor">
    <div class="col-sm-20">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
          <img src="img/baner1.jpg"  alt="..." height="400" >
            <div class="carousel-caption">
             <div class="boxinfo">
                <h1>Dentista en Tacna, Especialistas <br>en Implantes y Estética Dental</h1>
                <p>Le damos la bienvenida a la <i>Clínica Dental Krebs</i>, Resolveremos todos sus problemas dentales en Diseño de sonrisa, Blanqueamiento Dental
              </div>
            </div>
          </div>
          <!--empieza item-->
          <div class="item">
            <img src="img/baner2.jpg" alt="..." height="300" >
            <div class="carousel-caption">
              ...
            </div>
          </div>
          <!--termina item-->
          <div class="item">
            <img src="img/baner3.jpg" alt="..." height="300" >
            <div class="carousel-caption">
              <h2>Esto es js</h2>
              <p>Descripcion js</p>
            </div>
          </div>
          ...
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>


  
  <div class="home-features clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="features-intro clearfix">
                    <h2>Multident <span>Su Clínica Dental de Confianza</span></h2>

                    <p>Más de 20 años y miles de sonrisas alrededor del Perú nos respaldan como la primera y mejor Clínica Dental del pais. ¡Compruébalo tu mismo!</p>
                    <a class="read-more" href="#">¡Reserva tu Cita en Línea!</a>                
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 ">
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6 single-feature">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 icon-wrapper">
                                <i class="fa fa-medkit"></i>                            
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <h3>
                                    <a class="home-a" href="#">Conoce nuestras Especialidades</a>                                </h3>
                                <p>Cada uno de nuestros Odontólogos destaca en su especialidad, porque para nosotros es importante brindarte calidez humana junto con tecnología de punta.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 single-feature">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 icon-wrapper">
                                <i class="fa fa-ambulance"></i>                            
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <h3>
                                    <a class="home-a" href="#">Atención 24 Horas</a>                                </h3>
                                <p>Llámanos al (01) 441-3000 y visítanos en Av. Arequipa 4105, Miraflores a toda hora, todos los días.</p>
                            </div>
                        </div>
                    </div>
                    <div class="visible-lg clearfix"></div>
                    <div class="visible-md clearfix"></div>
                    <div class="visible-sm clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 single-feature">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 icon-wrapper">
                                <i class="fa fa-building-o"></i>                            
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <h3>
                                    <a class="home-a" href="#">30+ Sedes y Contando</a>                                </h3>
                                <p>En todo el Perú, crecemos año tras año buscando cada día estar más cerca a ti.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 single-feature">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 icon-wrapper">
                                <i class="fa fa-credit-card"></i>                            
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <h3>
                                    <a class="home-a" href="#">Multident Card</a>                                </h3>
                                <p>Empieza a disfrutar de múltiples beneficios para ti y 6 familiares, inscríbete en todas nuestras sedes.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


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

