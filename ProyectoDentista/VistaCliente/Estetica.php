

<?php 
session_start();

if (isset($_SESSION['dni'])) {
	# code...
//	echo $_SESSION;


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php require_once("menucliente.php") ?>
</head>
<style type="text/css">

a{
    margin:0;padding:0;color:#ff4d8e;text-decoration:none
}
ul{
    list-style:none
    }
    p
    {color:gray;font-size:14px
        }
     strong
   {
            color:#000
    }
 .clear{clear:both}
@font-face {font-family: 'Roboto', sans-serif; font-display: swap}


.boxtratamiento h2{
    color:#777;font-size:35px;
    line-height:45px;
    display:block;text-align:center;
    font-family:'Roboto';
    font-weight:700;width:800px;
    margin:0 auto;margin-top:69px;
    margin-bottom:40px
    }
    .box-servicios{
        display:block;margin-top:40px;
        }
        .box-servicios:after
        {
            content:"";display:block;clear:both;
            }
            .box-servicios li{
                display:block;
                float:left;margin:0 1%;
                width:23%;max-width:270px;
            }
.box-servicios li img{
    display:block;width:100%;
    border-radius:3px}
    .box-servicios h3{
        color:#00b091;
        font-size:15px;
        display:block;
        text-align:center;
        font-family:'Roboto';
        font-weight:700;
        margin-bottom:15px;
        margin-top:10px}

        .box-servicios h3,.texto-moderna a
        {color:#fff;
            text-decoration:none;
            font-weight:700
        }
            .box-servicios h3{
                background:#ff4d8e;
                border-radius:3px;
                display:block;
                width:100%;
                padding-top:9px;
                padding-bottom:9px
            }
.footer a{
    color:#81fbe5;
    font-size:16px;
    text-decoration:none;
    font-weight:700}

    .footer a:hover{
        font-size:17px
        }
    .telfblog a{
            color:#ff4d8e}
     .nrotelef a{
        color:#ef0707;
        text-decoration:none;
        font-weight:700;
        text-shadow:2px 0 0 #ef0707
        }
        .box-servicios p{
            font-size:14px;
            line-height:20px;
            font-weight:400;
            font-family:'Roboto';
            text-align:justify;
            display:block
        }
    .infoser{
                display:block;
                padding:5%;
                background:#fcfcfc;
                box-sizing:border-box}
          .boxdown{
                    width:92%;
                    margin:0 auto;
                    max-width:900px;
                    margin-top:50px}.boxdown li{margin:0 1.5%;width:30%;max-width:270px}.boxexpertos{background:#13bfb1;width:100%;height:80px;margin:80px 0;padding-top:20px}.boxexpertos p{text-align:left;color:#fff;font-size:34px;font-style:italic;font-family:'Roboto';display:block;line-height:60px;padding-left:40px}.center{text-align:center}.boxnosotros{display:block;margin-bottom:60px;margin-top:67px}.boxnosotros:after{content:"";display:block;clear:both}
 
    
.boxtitcli{background:#13bfb1;width:100%;height:80px;margin:0;padding-top:20px}.boxtitcli p{text-align:left;color:#fff;font-size:34px;font-style:italic;font-family:'Roboto';display:block;line-height:60px;padding-left:40px}.sub-tituloclinic{width:53%;color:#555;font-size:35px;font-weight:400;font-family:'roboto';display:block;width:75%;margin:0 auto;text-align:center;padding:0 30px;margin-bottom:40px;margin-top:50px}.sub-tituloclinic span{color:#13bfb1;font-style:italic;text-decoration:none;font-weight:700}
.hr-grisindex {
    border-bottom: solid 3px #dedede;
    position: relative;
    margin-bottom: 41px;
    margin-top: 41px;
}

</style>
<body>
    <div class="boxtitcli">


    <div class="contenedor">
    	<p>Comestica Dental</p>
    	
    </div>

</div>
<div class="contenedor">
    <h1 class="sub-tituloclinic">
        Tratamientos de 
        <span>Cosmética Dental</span>
    </h1>
   <ul class="box-servicios boxdown">
                <li><a href="DisenoSonrisa.php"> 
                <img src="../img/sonrisa.jpg" alt="Diseño de Sonrisa">
                <h3 class="texto-moderna a">Diseño de Sonrisas</h3>
              </a></li>
              <li><a href="Blanqueamiento.php"> 
                <img src="../img/sonrisablanca.jpg" alt="Blanqueamiento Dental">
                <h3 class="texto-moderna a">Blanqueamiento Dental</h3>
              </a></li>
              <li><a href="Cirugia.php"> 
                <img src="../img/cirugia.jpg" alt="Cirugia de Encias">
                <h3 class="texto-moderna a">Cirugía de Encías</h3>
              </a></li>
 
        </ul>

        <ul class="box-servicios boxdown">
            
                <li><a href="https://www.dentalkrebs.com/carillas-resina-bonding"> 
                <img src="https://www.dentalkrebs.com/imgs/carilla-resina.jpg" alt="carillas de resina">
                <h3 class="texto-moderna a">Carillas de Resina</h3>
              </a></li>
              <li><a href="https://www.dentalkrebs.com/carillas-de-porcelana-dental"> 
                <img src="https://www.dentalkrebs.com/imgs/carillas-porcelana.jpg" alt="Carillas de Porcelana">
                <h3 class="texto-moderna a">Carillas de Porcelana</h3>
              </a></li>
              
              <li><a href="https://www.dentalkrebs.com/tratamientos-dentales"> 
                <img src="https://www.dentalkrebs.com/imgs/tratamientos-dentales.jpg" alt="Tratamientos Dentales">
                <h3 class="texto-moderna a">Todos los Tratamientos</h3>
              </a></li>
             </ul>
</div>



<div class="hr-grisindex"></div>

</body>
</html>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-594249-15', 'auto');ga('send', 'pageview');
</script>
<?php 
	}else
	{
		header("location:../index.php");
	}
 ?>
