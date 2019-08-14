

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


.boxslogan {
    display: block;
    width: 100%;
    padding-top: 36px;
    padding-bottom: 36px;
    background: #13bfb1;
}

.boxnosotros {
    display: block;
    margin-bottom: 60px;
    margin-top: 67px;
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

<style type="text/css">
    .x-main {
    width: 69.536945%;


}
.left {
    float: left;
}
.hentry:first-child {
    margin-top: 0;
}
.has-post-thumbnail .entry-featured {
    border-bottom: 1px solid #ddd;
}
.entry-thumb {
    display: block;
    position: relative;
    background-color: #000;
}
.entry-thumb img {
    min-width: 100%;
    -webkit-transition: opacity 0.75s ease;
    transition: opacity 0.75s ease;
}
.entry-wrap {
    display: block;
    padding: 60px;
    background-color: #fff;
    border-radius: 4px;
    box-shadow: 0 0.15em 0.35em 0 rgba(0,0,0,0.135);
}
.has-post-thumbnail .entry-wrap {
    border-radius: 0 0 4px 4px;
}
.entry-header, .entry-content {
    font-size: 18px;
}
.entry-title {
    color: #008da1;
}
.p-meta {
    margin: 8px 0 0;
    font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 85.7%;
    line-height: 1.5;
    text-transform: uppercase;
}
.p-meta>span {
    display: inline-block;
}
[data-x-icon], [class*="x-icon-"] {
    display: inline-block;
    font-family: "FontAwesome";
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
img.wp-smiley,
img.emoji {
    display: inline !important;
    border: none !important;
    box-shadow: none !important;
    height: 1em !important;
    width: 1em !important;
    margin: 0 .07em !important;
    vertical-align: -0.1em !important;
    background: none !important;
    padding: 0 !important;
}

.x-container.max {
    max-width: 1200px;
}
.x-container.width {
    width: 90%;
}
.x-container:before, .x-container:after {
    content: " ";
    display: table;
}
.wplp_container.default .defaultflexslide{
    
}


.wplp_container.default li{ 
    padding: 0px;
}

.insideframe ul li .insideframe{
    background-color: white;
    border-radius: 3px;
    border: 1px solid #EEEEEE;
    margin: 10px;
}

.insideframe span.img_cropper{
    border-radius: 3px;
    height: 200px !important;
}

.wplp_container .title{
    max-width: 100%;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 10px;
}

.wplp_container.default .date{
    text-align: center;
    font-family: "Lato",sans-serif;
    font-size: 1.2rem;
    font-weight: bold;
    text-transform: uppercase;
}

.wplp_container.default .text{
    padding: 15px;
    line-height: 150%;
  font-size: 16px;
    font-family: "Lato",sans-serif !important;
    color: #008da1;
}

.wplp_container.default .category{
    display: none;
}

.wplp_container.default .text{
    text-align: center;
}

#wplp_widget_1360.wplp_container .read-more{
    font-family: "Lato",sans-serif !important;
    font-weight: bold;
    color: white !important;
}

.wplp_container .flex-control-nav{
    margin-bottom: 10px;
  top: 0px;
  background-color: transparent;
}

.wplp_container .flex-control-paging li a{
    background: #666;
  background: rgba(255,255,255,0.5);
}

.wplp_container .flex-control-paging li a.flex-active{
    background: #666;
  background: rgba(255,255,255,0.9);
}

/** Form contacto Home **/
.formulario-home-contenedor{
    background-image: url("wp-content/uploads/2018/05/contacts-background.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    padding-bottom: 20px;
}

.formulario-home-contenedor .subtitulo{
    margin: 25px auto 45px auto;
    width: 90%;
    max-width: 800px;
    text-align: center;
}

.formulario-home .submit-form-content{
    text-align: center;
}

.formulario-home input[type="submit"].wpcf7-submit{
    border: 1px solid #666666;
     background-color: transparent;
     padding: 10px 40px;
     font-weight: bold;
     font-size: 90%;
     text-shadow: none;
}

.formulario-home input[type="submit"].wpcf7-submit:hover{
    border: 1px solid white;
     background-color: white;
    color: #008da1;
}

.formulario-home input[type="text"], .formulario-home input[type="email"], .formulario-home textarea{
    border: 0;
    background-color: transparent;
    box-shadow: none;
    color: white;
    margin-bottom: 0px;
}

.one-half,
.one-third {
    position: relative;
    margin-right: 4%;
    float: left;
    margin-bottom: 20px;
 
}
 
.one-half {
    width: 48%;
    border-bottom: 1px solid #666666;
    display: flex;
    align-items: center;
}
.one-third { width: 30.66%; }
 
.last {
    margin-right: 0 !important;
    clear: right;
}

.form-home-textarea-content{
    margin-bottom: 20px;
    width: 100%;
    border-bottom: 1px solid #666666;
    display: flex;
}

.form-home-textarea-content span.wpcf7-form-control-wrap{
    width: 100%;
}

.formulario-home textarea{
    width: 100%;
    height: 100px;
}
 
@media only screen and (min-width: 900px) {
    .lista-noticias-home .x-recent-posts.cf.horizontal a.x-recent-post3{
        padding: 0px;
        width: 33%;
    }
    
    .formulario-home-contenedor .x-container.max{
        justify-content: center;
    display: flex;
    }
    
    .formulario-home.x-column.x-1-1{
        width:75%;
        margin: auto;
    }
}

@media only screen and (max-width: 767px) {
    .one-half, .one-third {
        width: 100%;
        margin-right: 0;
    }
}

@media only screen and (max-width: 600px) {
    .lista-noticias-home .x-recent-posts.cf.horizontal{
        flex-wrap: wrap;
    }
    
    .lista-noticias-home .x-recent-posts.cf.horizontal a.x-recent-post3{
        padding: 0px;
        width: 100%;
    }
}
.x-breadcrumb-wrap {
    margin: 0;
    border-bottom: 1px solid rgba(0,0,0,0.1);
    padding: 1.05em 0;
    font-size: 10px;
    font-weight: 400;
    letter-spacing: 1px;
    line-height: 1.4;
    text-shadow: 0 1px 0 rgba(255,255,255,0.55);
    text-transform: uppercase;
    background-color: rgba(0,0,0,0.0225);
    box-shadow: 0 1px 0 0 rgba(255,255,255,0.715);
}
</style>
<body>
    <div class="x-breadcrumb-wrap">
      <div class="x-container max width">

        <div class="x-breadcrumbs"><a href="http://simonblas.com"><span class="home"><i class="x-icon-home" data-x-icon=""></i></span></a> <span class="delimiter"><i class="x-icon-angle-right" data-x-icon=""></i></span>    <span class="delimiter"><i class="x-icon-angle-right" data-x-icon=""></i></span> <span class="current">¿Cuáles son las enfermedades dentales más comunes?</span></div>
                  
  <div class="x-nav-articles">

          <a href="" title="" class="prev">
        <i class="x-icon-arrow-left" data-x-icon=""></i>      </a>
    
          <a href="" title="" class="next">
        <i class="x-icon-arrow-right" data-x-icon=""></i>      </a>
    
  </div>

          
      </div>
    </div>
<div class=".x-container.max width offset">
    

        <div class="x-main left" role="main">

                      
        <article id="post-886" class="post-886 post type-post status-publish format-standard has-post-thumbnail hentry category-salud-bucodental tag-cancer-oral tag-caries tag-enfermedades-dentales-mas-comunes tag-gingivitis tag-halitosis tag-mal-aliento tag-periodontitis">
         
          <div class="entry-wrap">
            
        <header class="entry-header">

             <div class="entry-featured">
            <div class="entry-thumb"><img width="650" height="399" src="../img/enfermedades-dentales.jpg" ></div>  </div>
            <h1 class="entry-title">¿Cuáles son las enfermedades dentales más comunes?</h1>
            <p class="p-meta"><span><i class="x-icon-pencil" data-x-icon=""><span><time class="entry-date" datetime="2016-12-24T11:03:18+00:00"><i class="x-icon-calendar" data-x-icon=""> Salud bucodental</a></span></p></header>    


        <div class="entry-content content">


          <div id="cs-content" class="cs-content"><div id="x-section-1" class="x-section" style="margin: 0px;padding: 45px 0px; background-color: transparent;"><div class="x-container max width" style="margin: 0px auto;padding: 0px;"><div class="x-column x-sm x-1-1" style="padding: 0px;"><div class="x-text"><p>Puestos a <strong>identificar cuáles son las enfermedades dentales más comunes, algunos datos nos pueden, incluso, sorprender</strong>.<br>
        Sigue leyendo porque hemos listado el top five de las enfermedades dentales más comunes. Porque la boca necesita los mismos cuidados que cualquier otra parte del cuerpo y es necesario conocerlas.</p>
        </div><div id="toc_container" class="no_bullets"><p class="toc_title">Contenidos: <span class="toc_toggle">[<a href="#"></a>]</span></p><ul class="toc_list"><li><a href="#El_top_five_de_las_enfermedades_dentales"><span class="toc_number toc_depth_1">1</span> El top five de las enfermedades dentales</a></li><li><a href="#La_caries"><span class="toc_number toc_depth_1">2</span> La caries</a></li><li><a href="#Gingivitis"><span class="toc_number toc_depth_1">3</span> Gingivitis</a></li><li><a href="#Periodontitis"><span class="toc_number toc_depth_1">4</span> Periodontitis</a></li><li><a href="#Cancer_bucal"><span class="toc_number toc_depth_1">5</span> Cancer bucal</a></li><li><a href="#Halitosis"><span class="toc_number toc_depth_1">6</span> Halitosis</a></li></ul></div>
        <h2 class="h-custom-headline h3"><span id="El_top_five_de_las_enfermedades_dentales"><span>El top five de las enfermedades dentales</span></span></h2><h2 class="h-custom-headline h4"><span id="La_caries"><span>La caries</span></span></h2><div class="x-text"><p><strong>La caries es la segunda enfermedad común más habitual en España</strong>, tras el resfriado. Y la primera en el grupo de población infantil. Por lo tanto, un dato a tener muy en cuenta.<br>
        <strong>A nivel mundial, se calcula que afecta a más del 90% de la población en algún momento de su vida.</strong></p>
        <p>Se produce por la destrucción de los tejidos del diente, influyendo diversos factores, pero la razón principal es derivada de la <strong>alimentación y las condiciones de la higiene dental.</strong></p>
        <p>Aunque es verdad que hay un índice de personas que tienen predisposición genética a sufrir caries, éste es menor.</p>
        <p>La forma de combatir la caries, una vez producida, está en manos de los dentistas, por medio de los <strong>empastes u obturaciones.</strong></p>
        <p>Pero lo importante es estar atentos/as y acudir a la consulta al menor indicio, bien sea porque observemos una picada en un diente, dolor o molestias, etc.</p>
        <p>Por lo tanto, la prevención es la mejor arma para combatir la caries y en ésta, por supuesto, tienen gran importancia los hábitos de alimentación e higiene.</p>
        <p>No se puede descuidar la caries, si no queremos que se convierta en una enfermedad más grave que produzca infección y derive en que sea necesario realizar algún tipo de intervención de más calado, como una endodoncia o, incluso, la extracción de la pieza.</p>
        </div><img class="x-img x-img-none" src="../img/caries2.jpg" alt="enfermedades-dentales-comunes-caries"><h2 class="h-custom-headline h4"><span id="Gingivitis"><span>Gingivitis</span></span></h2><div class="x-text"><p>La gingivitis ocupa el segundo lugar entre las enfermedades dentales comunes.</p>
        <p><strong>Se estima que un 59,8% de la población adulta en España la sufre</strong>.</p>
        <p><strong>La inflamación y sangrado de encías que produce la gingivitis tiene en gran parte origen también en una deficiente higiene dental</strong>. La acumulación de placa bacteriana provoca que la cantidad de bacterias aumente.</p>
        <p><strong>Es importante que al menor síntoma</strong>, en cuanto se note la inflamación o se sufra el sangrado, <strong>se acuda a la consulta del dentista</strong>. Tratado a tiempo, con un limpieza profesional profunda y una mejora en los hábitos de higiene dental diarios, <strong>se puede curar de forma fácil</strong>.<br>
        Pero el problema de la gingivitis suele ser que si no se remedia a tiempo puede llegar a afectar al hueso y convertirse en una patología grave. Tratamos el tema de las enfermedades periodontales en <a href="" target="_blank">este blog, donde te explicábamos este tipo de casos</a>.</p>
        </div><img class="x-img x-img-none" src="../img/gengitivities.jpg" alt="enfermedades-dentales-comunes-gingivitis"><h2 class="h-custom-headline h4"><span id="Periodontitis"><span>Periodontitis</span></span></h2><div class="x-text"><p><strong>El 25,4% de la población adulta en España sufre periodontitis.</strong> Dato importante, que si lo sumamos al de la gingivitis, da como resultado que <strong>nada más y nada menos que el 85,2% de la población adulta en España sufre algún tipo de enfermedad en las encías. Sólo el 14,8% tiene las encías sanas</strong>. Grave, ¿verdad?</p>
        <p><strong>Este índice además es más grave todavía en la franja de edad mayor de 65 años, en la que sólo el 10,3% de la población se puede considerar sana</strong>.</p>
        <p>Estos datos nos hacen reflexionar sobre qué supone una gingivitis mal curada.</p>
        <p><strong>Aunque la periodontitis también se puede curar, se trata de un tratamiento más complejo que el de la gingivitis</strong>. Hay que realizar análisis y pruebas más profundas para conocer hasta dónde está afectado el diente y después tratarlo por medio de diversas técnicas.</p>
        <p>Por lo tanto, <strong>de nuevo subrayamos la necesidad de acudir al dentista al menor síntoma</strong>. La prevención puede ser la mejor de las curas.</p>
        <p>Si el problema se agrava y la enfermedad progresa, se puede llegar a poner en riesgo la permanencia del diente.</p>
        </div><img class="x-img x-img-none" src="../img/cancer.jpg" alt="enfermedades-dentales-comunes-periodontitis"><h2 class="h-custom-headline h4"><span id="Cancer_bucal"><span>Cancer bucal</span></span></h2><div class="x-text"><p><strong>Desgraciadamente, el cáncer oral o bucal está desbancando a otras enfermedades más comunes y colocándose entre las de más índice en la población.</strong></p>
        <p>Entre los tipos de cáncer oral o bucal, <strong>se produce con mayor frecuencia en los labios y la lengua</strong>. Aunque también puede afectar al paladar, las encías o la garganta. y respecto al grupo de población al que afecta, si bien lo puede sufrir cualquier persona, las estadísticas muestran que afecta en mayor medidas a hombre mayores de 40 años.</p>
        <p>Entre los <strong>factores de riesgo para contraer cáncer de boca, hay que tener en cuenta que la genética </strong>juega un papel importante. Pero <strong>hay otros hábitos de vida que indicen en gran manera en esta enfermedad: el consumo de alcohol y el tabaquismo</strong>.</p>
        <p>Como en el caso de cualquier otro tipo de cáncer, <strong>la detección a tiempo es una de las grandes bazas del éxito del tratamiento </strong>para su cura. Una vez más, <strong>la atención a los síntomas y las visitas periódicas al dentista pueden ser determinantes</strong>.<br>
        Entre los <strong>síntomas </strong>ante los que nos tenemos que poner alerta están:</p>
        <p>:: Úlceras o llagas en la lengua, los labios o cualquier otra parte de la boca.<br>
        :: Úlceras o llagas que tardan en curar o que se repiten a menudo.<br>
        :: Manchas rojas o blancas en la lengua, en las encías o cualquier otra parte de la boca.<br>
        :: Problemas o dolor al masticar o deglutir.<br>
        :: Dolor en alguna parte de la boca, repentino y sin razones.<br>
        :: Dificultades en el habla.</p>
        <p>Ante cualquiera de estos síntomas, lo mejor es consultarnos a los profesionales de manera urgente y no esperar a ver si se trata de algo pasajero.</p>
        </div><img class="x-img x-img-none" src="../img/halitosis.jpg" alt="enfermedades-dentales-comunes-cáncer oral"><h2 class="h-custom-headline h4"><span id="Halitosis"><span>Halitosis</span></span></h2><div class="x-text"><p>Llamamos <strong>mal aliento o la halitosis al conjunto de olores desagradables que se emiten a través de la boca</strong>. A veces se <strong>considera un problema meramente social, pero en realidad puede ser un síntoma de una patología más grave</strong>.</p>
        <p>Existen dos tipos de halitosis: oral y extraoral. En el 90% de los casos, el mal aliento tiene su origen en la propia boca. En estos casos, el olor desagradable se debe fundamentalmente a una higiene deficiente, el tabaco o enfermedades periodontales (gingivitis y periodontitis).</p>
        <p>En el caso de la halitosis extraoral, tiene su origen en problemas sistémicos, como pueden ser aquellos relacionados con el sistema digestivo o las enfermedades hepáticas o renales.</p>
        </div><img class="x-img x-img-none" src="../img/aliento.jpg" alt="enfermedades-dentales-comunes-halitosis"></div></div></div></div>
          

        </div>

          </div>
          
          <footer class="entry-footer cf">
            <div class="boxslogan">
    
<div class="contenedor">
    <p>Cuide su higiene Bucal</p>
</div>
             </footer>
        </article>        
              
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
