

<?php 
session_start();

if (isset($_SESSION['dni'])) {
    # code...
//  echo $_SESSION;


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
    <picture><img src="../img/ortodoncia.jpg" class="imgtratamiento" alt=" profilaxis dental" itemprop="image"></picture>
</div>


</div>

<div class="whiteline"  >
    
</div>
<div class="grenline"></div>

<div>
 
    

</div>
<div class="contenedor">
    
<div class="boxnosotros">
    <div class="hr-grislinetwo">
    </div>
    <div class="left-nosotros">
        <img src="../img/dienteschuecos.jpg">
    </div>





    <div>
        <p class="texto">La ortodoncia es la especialidad de la odontología que se encarga de prevenir, diagnosticar y corregir la alteración en la posición de los dientes dentro de los arcos maxilares.<br> Cuando el espacio no es suficiente en los maxilares para que se acomoden todos los dientes se produce lo que se llama apiñamiento dental, esto quiere decir que los dientes toman una posición fuera del arco mostrándose torcidos o chuecos lo que afecta la imagen de una persona pero sobre todo afecta a la mordida.<br> Este es el problema más común en la ortodoncia pero con un adecuado diagnóstico y tratamiento se corrige esta mala ubicación de los dientes llevándolos a su nueva posición, de esta manera se obtiene un alineamiento estético y una mordida correcta.  <br><br>En un tratamiento de ortodoncia se puede utilizar aparatos removibles ósea de poner y sacar también llamados placas de ortodoncia o aparatos fijos llamados Brackets que van pegados a la superficie de los dientes, en algunos casos el tratamiento tendrá que ser combinado, primero se utilizan aparatos removibles y luego se colocan los brackets.</p>
    </div>
    
</div>
</div>


<div class="boxslogan">
    
<div class="contenedor">
  <p>Con Ortodoncia puedes alinear tus dientes...</p>
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
