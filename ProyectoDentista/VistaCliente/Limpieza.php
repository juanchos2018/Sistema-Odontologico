

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
	

element.style {
}
.contenedor {
    width: 92%;
    max-width: 1200px;
    margin: 0 auto;
    padding-bottom: 8px;
}

.encabezado {
    padding-top: 10px;
    padding-bottom: 15px;
}
.boxslogan {
    display: block;
    width: 100%;
    padding-top: 36px;
    padding-bottom: 36px;
    background: #13bfb1;
}
h1 {
    display: block;
    font-size: 2em;
    margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
.contenthead {
    display: block;
    max-height: 500px;
    overflow: hidden;
    width: 100%;
}
.imgtratamiento {
    display: block;
    width: 100%;
}
.whiteline {
    border-bottom: solid 0 #fff;
    margin-bottom: 1px;
    border: none;
    position: relative;
}
.grenline {
    border-bottom: solid 2px #13bfb1;
    position: relative;
    margin-bottom: 55px;
}
.letterbig {
    font-size: 39px;
}
.texto-moderna {
    color: #555;
    font-size: 15px;
    font-family: 'Roboto';
    line-height: 23px;
    text-align: center;
    display: block;
    width: 67%;
    margin: 0 auto;
}
.boxnosotros {
    display: block;
    margin-bottom: 60px;
    margin-top: 67px;
}
.hr-grislinetwo {
    border-bottom: solid 3px #dedede;
    position: relative;
    margin-bottom: 55px;
}
.left-nosotros {
    display: block;
    float: left;
    width: 45%;
    margin-right: 5%;
}
.titulo-two {
    padding-top: 38px;
    padding-left: 13px;
    margin-bottom: 16px;
}
.texto {
    font-size: 15px;
    font-family: 'Roboto';
    line-height: 24px;
    color: #555;
    display: block;
    text-align: justify;
}
.right-nosotros {
    display: block;
    float: left;
    width: 45%;
    margin-left: 5%;
}
.boxslogan {
    display: block;
    width: 100%;
    padding-top: 36px;
    padding-bottom: 36px;
    background: #13bfb1;
}
.boxslogan p, .boxslogan h1 {
    display: block;
    text-align: left;
    font-size: 34px;
    font-family: 'Roboto';
    font-weight: 400;
    font-style: italic;
    color: #fff;
    float: left;
}
</style>
<body>
<div class=" boxslogan encabezado">
	

<div class="contenedor">
	<h1> Profilaxis Dental - Limpieza de Sarro</h1>
	
</div>
<div class="contenthead">
	<picture><img src="../img/profilaxia.jpg" class="imgtratamiento" alt=" profilaxis dental" itemprop="image"></picture>
</div>


</div>

<div class="whiteline" >
	
</div>
<div class="grenline"></div>

<div>
	<h2 align="center">
	<span class="letterbig">P</span>
	rofilaxis
	<span class="letterbig">D</span>
	ental
	</h2>
	<p class="texto-moderna">
		La profilaxis o limpieza dental profesional es uno de los tratamientos más sencillos en odontología pero no por eso menos importante, con este procedimiento se elimina el sarro dental y la placa bacteriana que se va acumulando en el tiempo sobre la superficie de los dientes, surcos gingivales y en los espacios entre los dientes, también se eliminan las manchas producidas por pigmentación debido a la ingesta de algunos alimentos y bebidas con coloración muy intensa, así como del consumo de cigarrillos. Una profilaxis cada seis meses puede prevenir las enfermedades periodontales.
	</p>
	<br>
	

</div>
<div class="contenedor">
	
<div class="boxnosotros">
	<div class="hr-grislinetwo">
	</div>
	<div class="left-nosotros">
		<h3 class="titulo-two">
			IMPORTANCIA DE LA PROFILAXIS
		</h3>
		<p class="texto">
			Es muy importante someterse a una profilaxis regularmente, lo ideal es que se realice dos veces al año (cada 6 meses) pero nunca debe dejar pasar más de un año, ya que usted va a prevenir enfermedades en las encías (enfermedad periodontal) como la  <strong>Gingivitis</strong> y la <strong>Periodontitis</strong>  que producen lesiones muchas veces irreparables a nivel de las encías y del hueso que soporta a los dientes.
			<br>
			 También lo ayudara a prevenir problemas como la <a title="Halitosis mal olor de boca" target="_self" href="#">Halitosis</a>  que es el mal olor en la boca producido por la acumulación de bacterias que se encuentran en el <a title="sarro dental" target="_self" href="#">sarro</a>  y la <a title="placa bacteriana dental" target="_self" href="#">placa bacteriana</a>
			 . La Limpieza Dental Profesional también le ayudara a disminuir la formación de <a title="Caries" target="_self" href="#">caries</a>
		</p>
	</div>


	<div>
		<picture><img src="../img/limpieza.jpg" alt="profilaxis sarro dental" itemprop="image"></picture>
	</div>
	
</div>
</div>


<div class="boxslogan">
	
<div class="contenedor">
	<p>En solo en 45 minutos Sus dientes Limpios...</p>
</div>
</div>

</body>
</html>
<?php 
	}else
	{
		header("location:../index.php");
	}
 ?>
