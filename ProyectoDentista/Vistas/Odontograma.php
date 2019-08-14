
<?php 
session_start();

if(isset($_GET['txtdnic'])) 
	$txtdnic =strtoupper($_GET['txtdnic']);
	 else $txtdnic="";

if (isset($_GET['txtidcita'])) 
	$txtidcita=strtoupper($_GET['txtidcita']);
	else $txtidcita="";


if (isset($_SESSION['codigo'])) {
	# code...
//	echo $_SESSION;
	 //window.location="Odontograma.php?txtdnic="+txtdnic+"&txtidcita="+ic

 ?>


 <?php require_once("../Clases/Conexion.php");

		$c= new Conectar();
		$conexion=$c->conexion();
		$sql="SELECT Codigo,Descripcion from enfermedades ";
		$resultado= mysqli_query($conexion,$sql);

//$q=$conexion->real_escape_string($_GET['txtdnic']);	
		$sqlconsul="SELECT Numero,Estado,Partes from consulta  where Dni =$txtdnic";
		$resultadoconsul=mysqli_query($conexion,$sqlconsul);
			
	$sqlprocedimiento="SELECT t.idta,p.nombre,c.descrip,t.costo from tarifas t
			inner join procedimiento  p
			on t.procedimiento =p.idproc
			inner join categoria c
			on t.categoria =c.idca
			  ";	
	$resultadoprocedimiento=mysqli_query($conexion,$sqlprocedimiento);


	$sqldienteenfermedad="SELECT Diente,Enfemedad from enfermedadiente  where Dni =$txtdnic";
		$resultadoenfermedadienete=mysqli_query($conexion,$sqldienteenfermedad);


	 ?>
<!DOCTYPE html>
<html>


<head>
	<title>Ondtograma</title>
	<?php require_once("menu.php") ?>
</head>

<style type="text/css">

			*{
				margin: 0;
				padding: 0;
			}
				html, body, .container1{
				height: 100%;
			}
		
		
			.context-menu{
				width: 200px;
				height: auto;
				box-shadow: 0 0 20px 0 #ccc;
				position: absolute;
				display: none;
			}
		
			.context-menu ul{
				list-style: none;
				padding: 5px 0px 5px 0px;
			}

			.context-menu ul li:not(.separator){
				padding: 10px 5px 10px 5px;
				border-left: 4px solid transparent;
				cursor: pointer;
			}

			.context-menu ul li:hover{
				background: #eee;
				border-left: 4px solid #666;
			}

			.separator{
				height: 1px;
				background: #dedede;
				margin: 2px 0px 2px 0px;
			}
			#menu{
			background-color: white;
			border:2px solid #6A6A6A;
			border-radius: 5px;
			box-shadow: 5px 5px 10px #474747;
		
			padding.top: 5px;
			padding-bottom: 5px;
			display: none;
			position: absolute; 
		}
		.menuItem{
			padding-left: 5px;
			padding-right: 5px;
			font-family: Arial, Helvetica,sans-serif;
			cursor: default;
		}
		.menuItem:hover{
			background-color: #EBEBEB;
		}
		.linrBreak{
			width: 95%;
			height: 1px;
			background-color: #626262;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 2px;
		}
		#trees{
			margin-left: 4px;
			margin-right: 5px;

		}
		#trees1{
			margin-left: 4px;
			margin-right: 5px;

		}
		.conteinerTeeh{
			display: flex;
			justify-content: space-around;
		}


.checkbox {
  margin: 0 0 1em 2em;
}
.checkbox .tag {
  color: #595959;

}
.checkbox label {
  display: inline;
}
.checkbox .input-assumpte {
  display: none;
}
.input-assumpte + label:after {
  background-color: #fafafa;
  border: 1px solid #cacece;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
  display: inline-block;
  transition-duration: 0.3s;
  width: 16px;
  height: 16px;
  content: '';
  margin-left: 10px;
}
.input-assumpte:checked + label:after {
  background-color: #595959;
}
.color{
	background-color: #595959;
	color: red;
}
</style>

<style type="text/css">

.img-side{
background: #FFFFFF;
color: #000000;
margin-top:-30px;

opacity: 0;
-webkit-transition:all .2s ease-in-out; }
.img-side:hover{
opacity:7
}
.fondo{
background: #D1FAFD      ; 
}

</style>
<body class="fondo">

<!-- AQUI ESTAN  LOS DIENTES WEY   #B0F6FC -->
<div class="container"  >	

	<div class="conteinerTitle">
		<h2> Odontograma Pacientes</h2>
		<form id="frmeliminar">
			<input type="text" hidden="" name="txtd" id="txtd" value="<?php  echo $txtdnic ?>"> 			<input type="text"  hidden="" name="txtidiente" id="txtidiente">
		</form>
		<input type="text"   hidden="" name="txtidcia" id="txtidcia"	value="<?php  echo $txtidcita ?>"  > 
		<?php // echo $txtidcita ?> 
	</div>

	<div class="row conteinerTeeh" >
		<div class="space" >

			<img id="trees"   name="18"  src="../img/18.png" alt="" width="46px" height="60px"  >
				
			<!-- <h5  FACE="arial" SIZE=0 COLOR=#000000 class="img-side">Diente <br>ocipital</h5>
 -->
			<div  class="" >

				<input id="chk-t1" type="checkbox" name="" class="" > <br>
				<input id="chk-l1" type="checkbox" name="" class="op-r"  style="margin-left:-15px;" >
				<input id="chk-c1" type="checkbox" name="" class="op-r" >
				<input id="chk-r1" type="checkbox" name="" class="op-b" ><br>
				<input id="chk-b1" type="checkbox" name="" class="op-l" >
				 <br>
				 <br>
				 <label>3er<br>Molar</label>
			</div>
					
						
			

		</div>

		<div class="space" >
			<img  id="trees1"  	class="" src="../img/17.png" alt="" width="50px" height="60px" >
				<!-- <h5  FACE="arial" SIZE=0 COLOR=#000000 class="img-side">Diente <br>ocipital</h5> -->

			<div class="op" >
				<input id="chk-t2" type="checkbox" name="" class="op-t" > <br>

				<input id="chk-l2" type="checkbox" name="" class="op-r" style="margin-left:-15px;" >
				<input id="chk-c2" type="checkbox" name="" class="op-l" >
				<input id="chk-r2" type="checkbox" name="" class="op-b" > <br>
				<input id="chk-b2" type="checkbox" name="" class="op-l" >

			</div>
			
				 <br>
				 <label>2do<br>Molar</label>
		</div>

		<div class="space" >
			<img id="trees2"  class="" src="../img/16.png" alt="" width="50px" height="60px" >
			<div class="op" >
				<input id="chk-t3" type="checkbox" name="" class="op-t" > <br>
				<input id="chk-l3" type="checkbox" name="" class="op-r"  style="margin-left:-15px;"  >
				<input id="chk-c3" type="checkbox" name="" class="op-c" >
				<input id="chk-r3" type="checkbox" name="" class="op-b" ><br>
				<input id="chk-b3" type="checkbox" name="" class="op-l" >
			</div>

		 <br>
				 <label>1er<br>Molar</label>
		</div>

		<div class="space" >
			<img id="trees3"  class="" src="../img/15.png" alt="" width="35px" height="60px" >
			<div class="op" >
				<input id="chk-t4" type="checkbox" name="" class="op-t" > <br>
				<input id="chk-l4" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
				<input id="chk-c4" type="checkbox" name="" class="op-c" >
				<input id="chk-r4" type="checkbox" name="" class="op-b" > <br>
				<input id="chk-b4" type="checkbox" name="" class="op-l" >
			</div>
				
					 <br>
				 <label>2do<br>PreMolar</label>
		</div>
		
		<div class="space" >
			<img id="trees4"  class="" src="../img/14.png" alt="" width="35px" height="60px" >
			<div class="op" >
				<input id="chk-t5" type="checkbox" name="" class="op-t" > <br>
				<input id="chk-l5" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
				<input id="chk-c5" type="checkbox" name="" class="op-c" >
				<input id="chk-r5" type="checkbox" name="" class="op-b" > <br>
				<input id="chk-b5" type="checkbox" name="" class="op-l" >
			</div>
			
				 <br>
				 <label>1er<br>PreMolar</label>

		</div>

		<div class="space" >
			<img id="trees5"  class="" src="../img/13.png" alt="" width="35px" height="60px" >
				<div class="op" >
				<input id="chk-t6" type="checkbox" name="" class="op-t" > <br>
				<input id="chk-l6" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
				<input id="chk-c6" type="checkbox" name="" class="op-c" >
				<input id="chk-r6" type="checkbox" name="" class="op-b" ><br>
				<input id="chk-b6" type="checkbox" name="" class="op-l" >
			</div>
		
				 <br>
				 <label>Canino</label>
		</div>	

		<div class="space" >
			<img id="trees6"  class="" src="../img/12.png" alt="" width="35px" height="60px" >
				<div class="op" >
				<input id="chk-t7" type="checkbox" name="" class="op-t" > <br>
				<input id="chk-l7" type="checkbox" name="" class="op-r"  style="margin-left:-15px;">
				<input id="chk-c7" type="checkbox" name="" class="op-c" >
				<input id="chk-r7" type="checkbox" name="" class="op-b" > <br>
				<input id="chk-b7" type="checkbox" name="" class="op-l" >
			</div>
	
			 <br>
				 <label>Incisivo<br>Lateral</label>
		</div>

		<div class="space" >
				<img id="trees7"  class="" src="../img/11.png" alt="" width="35px" height="60px" >
			<div class="op" >
				<input id="chk-t8" type="checkbox" name="" class="op-t" > <br>
				<input id="chk-l8" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
				<input id="chk-c8" type="checkbox" name="" class="op-c" >
				<input id="chk-r8" type="checkbox" name="" class="op-b" > <br>
				<input id="chk-b8" type="checkbox" name="" class="op-l" >
			</div>
			
				 <br>
				 <label>Incisivo<br>Central</label>
		</div>

		
		<div class="space" >
			<img  id="trees8"  class="" src="../img/21.png" alt="" width="40px" height="60px" >
			<div class="op" >
				<input id="chk-t9" type="checkbox" name="" class="op-t" > <br>
				<input id="chk-l9" type="checkbox" name="" class="op-r" style="margin-left:-15px;" >
				<input id="chk-c9" type="checkbox" name="" class="op-c" >
				<input id="chk-r9" type="checkbox" name="" class="op-b" ><br>
				<input id="chk-b9" type="checkbox" name="" class="op-l" >
			</div> <br>
			<label>Incisivo <br> Central</label>
		</div>
				
	<div class="space" >
		<img id="trees9"  class="" src="../img/22.png" alt="" width="40px" height="60px" >	
		<div class="op" >
				<input id="chk-t10" type="checkbox" name="" class="op-t" > <br>
				<input id="chk-l10" type="checkbox" name="" class="op-r" style="margin-left:-15px;"  >
				<input id="chk-c10" type="checkbox" name="" class="op-c" >
				<input id="chk-r10" type="checkbox" name="" class="op-b" ><br>
				<input id="chk-b10" type="checkbox" name="" class="op-l" >
			</div> <br>
			<label>Incisivo <br> Lateral</label>
	</div>					
			
	<div class="space" >
		<img id="trees10"  class="" src="../img/23.png" alt="" width="40px" height="60px"  >
		<div class="op" >
				<input id="chk-t11" type="checkbox" name="" class="op-t" > <br>
				<input id="chk-l11" type="checkbox" name="" class="op-r"  style="margin-left:-15px;">
				<input id="chk-c11" type="checkbox" name="" class="op-c" >
				<input id="chk-r11" type="checkbox" name="" class="op-b" > <br>
				<input id="chk-b11" type="checkbox" name="" class="op-l" >
			</div> <br>
			<label>Canino </label>
	</div>					

	<div class="space" >
		<img id="trees11"  class="" src="../img/24.png" alt="" width="40px" height="60px"  >
		<div class="op" >
				<input id="chk-t12" type="checkbox" name="" class="op-t" > <br>
				<input id="chk-l12" type="checkbox" name="" class="op-r"  style="margin-left:-15px;">
				<input id="chk-c12" type="checkbox" name="" class="op-c" >
				<input id="chk-r12" type="checkbox" name="" class="op-b" ><br>
				<input id="chk-b12" type="checkbox" name="" class="op-l" >
			</div> <br>
			<label>1er<br>Pre-Molar</label>
	</div>														
											
	<div  class="" >
		<img id="trees12"  class="" src="../img/25.png" alt="" width="40px" height="60px" >
		<div class="op" >
				<input id="chk-t13" type="checkbox" name="" class="op-t" > <br>
				<input id="chk-l13" type="checkbox" name="" class="op-r"  style="margin-left:-15px;">
				<input id="chk-c13" type="checkbox" name="" class="op-c" >
				<input id="chk-r13" type="checkbox" name="" class="op-b" > <br>
				<input id="chk-b13" type="checkbox" name="" class="op-l" >
			</div> <br>
			<label>2do<br>Pre-Molar</label>
	</div>												
												
	<div class="space" >
		<img  id="trees13"  class="" src="../img/26.png" alt="" width="40px" height="60px" >
		<div class="op" >
				<input id="chk-t14" type="checkbox" name="" class="op-t" > <br>
				<input id="chk-l14" type="checkbox" name="" class="op-r" style="margin-left:-15px;" >
				<input id="chk-c14" type="checkbox" name="" class="op-c" >
				<input id="chk-r14" type="checkbox" name="" class="op-b" ><br>
				<input id="chk-b14" type="checkbox" name="" class="op-l" >
			</div> <br>
			<label>1er<br>Molar</label>
	</div>										
													
	<div class="">
		<img id="trees14"  class="" src="../img/27.png" alt="" width="40px" height="60px"  >
		<div class="op" >
				<input id="chk-t15" type="checkbox" name="" class="op-t" > <br>
				<input id="chk-l15" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
				<input id="chk-c15" type="checkbox" name="" class="op-c" >
				<input id="chk-r15" type="checkbox" name="" class="op-b" ><br>
				<input id="chk-b15" type="checkbox" name="" class="op-l" >
			</div> <br>
			<label>2do<br>Molar</label>
	</div>												
	
	<div class="space" >
		<img id="trees15"  class="" src="../img/28.png" alt="" width="40px" height="60px" >
		<div class="op" >
				<input id="chk-t16" type="checkbox" name="" class="op-t" > <br>
				<input id="chk-l16" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
				<input id="chk-c16" type="checkbox" name="" class="op-c" >
				<input id="chk-r16" type="checkbox" name="" class="op-b" > <br>
				<input id="chk-b16" type="checkbox" name="" class="op-l" >
			</div> <br>
			<label>3er<br>Molar</label>
	</div>												
													
		
	<!--  AQUI COMIENZA LOS DIENTES DE ABAJO PO  -->				
	<br>
						
												
	</div>
	<hr>
	<div class="row conteinerTeeh" >
		<div class="space">
			<img id="trees16"  class=""  src="../img/48.png" alt="" width="50px" height="60px">

			<div class="op" >
					<input id="chk-t17" type="checkbox" name="" class="op-t" > <br>
					<input id="chk-l17" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
					<input id="chk-c17" type="checkbox" name="" class="op-c" >
					<input id="chk-r17" type="checkbox" name="" class="op-b" > <br>
					<input id="chk-b17" type="checkbox" name="" class="op-l" >
				</div>
			 <br>
				 <label>3er<br>Molar</label>
			
		</div>
		
		<div class="space">
			<img  id="trees17"  class="" src="../img/47.png" alt="" width="50px" height="60px">
			
			<div class="op" >
					<input id="chk-t18" type="checkbox" name="" class="op-t" > <br>
					<input id="chk-l18" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
					<input id="chk-c18" type="checkbox" name="" class="op-c" >
					<input id="chk-r18" type="checkbox" name="" class="op-b" > <br>
					<input id="chk-b18" type="checkbox" name="" class="op-l" >
				</div>
			 <br>
			<label>2do<br>Molar</label>
		</div>
			
		<div  class="space">
				<img id="trees18"  class="" src="../img/46.png" alt="" width="50px" height="60px">
				<div class="op" >
					<input id="chk-t19" type="checkbox" name="" class="op-t" > <br>
					<input id="chk-l19" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
					<input id="chk-c19" type="checkbox" name="" class="op-c" >
					<input id="chk-r19" type="checkbox" name="" class="op-b" > <br>
					<input id="chk-b19" type="checkbox" name="" class="op-l" >
				</div>
			 <br>
			<label>1er<br>Molar</label>
		</div>		

		<div   class="space" >
				<img id="trees19"  class="" src="../img/45.png" alt="" width="35px" height="60px">
				<div class="op" >
					<input id="chk-t20" type="checkbox" name="" class="op-t" > <br>
					<input id="chk-l20" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
					<input id="chk-c20" type="checkbox" name="" class="op-c" >
					<input id="chk-r20" type="checkbox" name="" class="op-b" > <br>
					<input id="chk-b20" type="checkbox" name="" class="op-l" >
				</div>
				<br>
			<label>2do<br>Pre-Molar</label>
		</div>
	
		<div class="space" >
			<img id="trees20"  class="" src="../img/44.png" alt="" width="35px" height="60px">
			<div class="op" >
					<input id="chk-t21" type="checkbox" name="" class="op-t" > <br>
					<input id="chk-l21" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
					<input id="chk-c21" type="checkbox" name="" class="op-c" >
					<input id="chk-r21" type="checkbox" name="" class="op-b" > <br>
					<input id="chk-b21" type="checkbox" name="" class="op-l" >
				</div>
				<br>
			<label>1er<br>Pre-Molar</label>
		</div>	
			
		<div   class="space" >
			<img id="trees21"  class="" src="../img/43.png" alt="" width="35px" height="60px">
			<div class="op" >
					<input id="chk-t22" type="checkbox" name="" class="op-t" > <br>
					<input id="chk-l22" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
					<input id="chk-c22" type="checkbox" name="" class="op-c" >
					<input id="chk-r22" type="checkbox" name="" class="op-b" > <br>
					<input id="chk-b22" type="checkbox" name="" class="op-l" >
				</div>
				<br>
			<label>Canino </label>
		</div>	
			
		<div  class="space"  >
			<img id="trees22"  class="" src="../img/42.png" alt="" width="35px" height="60px">
			<div class="op" >
					<input id="chk-t23" type="checkbox" name="" class="op-t" > <br>
					<input id="chk-l23" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
					<input id="chk-c23" type="checkbox" name="" class="op-c" >
					<input id="chk-r23" type="checkbox" name="" class="op-b" > <br>
					<input id="chk-b23" type="checkbox" name="" class="op-l" >
				</div>
				 <br>
			<label>Incisivo <br> Lateral</label>
		</div>	
			
		<div class="space">
			<img id="trees23"  class="" src="../img/41.png" alt="" width="40px" height="60px">
			<div class="op" >
					<input id="chk-t24" type="checkbox" name="" class="op-t" > <br>
					<input id="chk-l24" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
					<input id="chk-c24" type="checkbox" name="" class="op-c" >
					<input id="chk-r24" type="checkbox" name="" class="op-b" > <br>
					<input id="chk-b24" type="checkbox" name="" class="op-l" >
				</div>
				 <br>
			<label>Incisivo <br> Central</label>
		</div>	
			

		<div class="space">
			<img id="trees24"  class="" src="../img/31.png" alt="" width="40px" height="60px">
			<div class="op" >
					<input id="chk-t25" type="checkbox" name="" class="op-t" > <br>
					<input id="chk-l25" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
					<input id="chk-c25" type="checkbox" name="" class="op-c" >
					<input id="chk-r25" type="checkbox" name="" class="op-b" > <br>
					<input id="chk-b25" type="checkbox" name="" class="op-l" >
				</div>
				 <br>
			<label>Incisivo <br> Central</label>
		</div>

		<div class="space" >
			<img id="trees25"  class="" src="../img/32.png" alt="" width="40px" height="60px">
			<div class="op" >
					<input id="chk-t26" type="checkbox" name="" class="op-t" > <br>
					<input id="chk-l26" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
					<input id="chk-c26" type="checkbox" name="" class="op-c" >
					<input id="chk-r26" type="checkbox" name="" class="op-b" > <br>
					<input id="chk-b26" type="checkbox" name="" class="op-l" >
				</div>	
				<br>
			<label>Incisivo <br> Lateral</label>	
		</div>
				
		<div class="space" >
			<img id="trees26"  class="" src="../img/33.png" alt="" width="40px" height="60px">
			<div class="op" >
					<input id="chk-t27" type="checkbox" name="" class="op-t" > <br>
					<input id="chk-l27" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
					<input id="chk-c27" type="checkbox" name="" class="op-c" >
					<input id="chk-r27" type="checkbox" name="" class="op-b" > <br>
					<input id="chk-b27" type="checkbox" name="" class="op-l" >
				</div>
				<br>
			<label>Canino </label>
		</div>										
								
		<div  class="space" >
			<img id="trees27"  class="" src="../img/34.png" alt="" width="40px" height="60px">
			<div class="op" >
					<input id="chk-t28" type="checkbox" name="" class="op-t" > <br>
					<input id="chk-l28" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
					<input id="chk-c28" type="checkbox" name="" class="op-c" >
					<input id="chk-r28" type="checkbox" name="" class="op-b" > <br>
					<input id="chk-b28" type="checkbox" name="" class="op-l" >
				</div>	
				<br>
			<label>1er<br>Pre-Molar</label>
		</div>									
		
		<div  class="space">
			<img id="trees28"  class="" src="../img/35.png" alt="" width="40px" height="60px">
			<div class="op" >
					<input id="chk-t29" type="checkbox" name="" class="op-t" > <br>
					<input id="chk-l29" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
					<input id="chk-c29" type="checkbox" name="" class="op-c" >
					<input id="chk-r29" type="checkbox" name="" class="op-b" > <br>
					<input id="chk-b29" type="checkbox" name="" class="op-l" >
				</div>
				<br>
			<label>2do<br>Pre-Molar</label>
		</div>									
				
		<div  class="space">
			<img id="trees29"  class="" src="../img/36.png" alt="" width="45px" height="60px">
			<div class="op" >
					<input id="chk-t30" type="checkbox" name="" class="op-t" > <br>
					<input id="chk-l30" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
					<input id="chk-c30" type="checkbox" name="" class="op-c" >
					<input id="chk-r30" type="checkbox" name="" class="op-b" > <br>
					<input id="chk-b30" type="checkbox" name="" class="op-l" >
				</div>
				 <br>
			<label>1er<br>Molar</label>
		</div>							
											
		<div class="space">
			<img id="trees30"  class="" src="../img/37.png" alt="" width="45px" height="60px">
			<div class="op" >
					<input id="chk-t31" type="checkbox" name="" class="op-t" > <br>
					<input id="chk-l31" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
					<input id="chk-c31" type="checkbox" name="" class="op-c" >
					<input id="chk-r31" type="checkbox" name="" class="op-b" > <br>
					<input id="chk-b31" type="checkbox" name="" class="op-l" >
				</div>
				 <br>
			<label>2do<br>Molar</label>
		</div>									
		
		<div class="space" >
			<img id="trees31"  class="" src="../img/38.png" alt="" width="45px" height="60px">
			<div class="op" >
					<input id="chk-t32" type="checkbox" name="" class="op-t" > <br>
					<input id="chk-l32" type="checkbox" name="" class="op-r" style="margin-left:-15px;">
					<input id="chk-c32" type="checkbox" name="" class="op-c" >
					<input id="chk-r32" type="checkbox" name="" class="op-b" > <br>
					<input id="chk-b32" type="checkbox" name="" class="op-l" >
				</div>	
					 <br>
			<label>3er<br>Molar</label>
		</div>									
																																																
							
	</div>
</div>

<input type="button" name="btn" hidden="" name="btn" onclick="myFunction();" value="boton">
</form>
<?php 

// $c= new Conectar();
// 		$conexion=$c->conexion();

	// $sqlconsul="SELECT Numero,Estado,Partes from consulta  where Dni ='$txtdnic'";

	// $resultadoconsul=mysqli_query($conexion,$sqlconsul);

 ?>

<div  class="container">
<div class="col-sm-10" id="tablaEstados">
	
</div>
	
	<div>
	 <button  id="btEnfermedad" type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#ModalEnfermedad" >Enfermedad</button>
       
        <button   type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#ModalProcedimiento" onclick="ObtenerDAtos();" >Procedimiento</button>
        <hr>
</div>
</div>


<!-- Modal  ENFERMEDAD -->
<div class="modal fade" id="ModalEnfermedad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-xs" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close" id="closemodal" name="closemodal"><span aria-hidden="true" >&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Enfermedad</h4>
      </div>
      <div class="modal-body">       
			<?php 

		// $sqlconsu2="SELECT Numero from consulta  where Dni =$txtdnic";
		// $resultadoconsul2=mysqli_query($conexion,$sqlconsu2);
	
			 ?>
      	  <form id="frmenfermedadiente">
      	  	
     		<input type="text"  hidden="" name="txtdnicliente" id="txtdnicliente"> <br>
     		<input type="text" hidden="" id="txtidcita2" name="txtidcita2"> <br>

      	 	
      	 	<div id="selecestado">
      	 		
      	 	</div>
      	 	<br>
      	 	<label>Enfermedad</label> 
      	 	
				<select class="form-control input-sm " id="cboenfermedad" name="cboenfermedad">
						<option value="A" >Seleccione Enfermedad</option>
						 	
						<?php while($ver=mysqli_fetch_row($resultado)): ?>
						<option value="<?php echo $ver[1] ?>"> <?php echo $ver[1]; ?> </option>
						<?php endwhile; ?>									
				</select> <br>

      	 	 <button  type="button" class="btn btn-primary btn-lg btn-block" id="btagregarEnfermedad" >Agregar</button><br>
      	 	
      	 	 <label>Diagnostico</label>     	 
     																
		</form>	
		<div class="modal-body">
      	 	 	<div  id="TablaEnfermedadDiente" >     

     		</div>
      	 	 </div>
      </div>
      <div class="modal-footer">
        <button  id="btnabremodalprocedimiento"    type="button" class="btn btn-primary btn-lg btn-block"  data-toggle="modal" data-target="#ModalProcedimiento"  >Procedimiemto</button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal -->

<!-- Modal  PROCEDIMIENTO -->
<div class="modal fade" id="ModalProcedimiento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-xs" role="document">
    <div class="modal-content">
      <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Procedimiento</h4>
      </div>
      <div class="modal-body"> 
			<?php 

		// $sqldienteenfermedad="SELECT Diente,Enfemedad from enfermedadiente  where Dni =$txtdnic";
		// $resultadoenfermedadienete=mysqli_query($conexion,$sqldienteenfermedad);
			 ?>
      	  <form id="frmprocedimiento" >
      	  	
     		<input type="text"  hidden="" name="txtdnicliente1" id="txtdnicliente1"> 
			<input type="text"  hidden="" name="txidcitas" id="txidcitas"> 
      	 	<label>Diente-Enfermedad</label> <br>
      	 
		    

      	 	<div id="selectable">
      	 		
      	 	</div>   	 	

      	 	<input type="text" hidden="" name="txtnada" id="txtnada"> 	
      	 	<br>
      	 	<label>Procedimiento</label> 
      	 	
				<select class="form-control " id="cbmprocesopro" name="cbmprocesopro">
						<option value="A" >Seleccione Procedimiento</option>
						 	
						<?php while($verprocedimiento=mysqli_fetch_row($resultadoprocedimiento)): ?>
						<option value="<?php echo $verprocedimiento[0] ?>"> <?php echo $verprocedimiento[1]."-".$verprocedimiento[2]."- S/. ".$verprocedimiento[3]; ?> </option>
						<?php endwhile; ?>									
				</select> <br>
				<input type="text" hidden=""  name="txtpno" id="txtpno">
				<input type="text" hidden="" name="txtde" id="txtde">
				<input type="text" hidden="" name="txtco" id="txtco">


      	 	 <button   type="button" class="btn btn-primary btn-lg btn-block" id="btAgregaProcedimiento"  name="btAgregaProcedimiento">Agregar</button><br>

      	 	 <label>Procedimientos Agregados</label>    	 	 
     		<input type="text" hidden="" name="txtfinal" id="txtfinal" value="Finalizado">											
		</form>	
		<div class="modal-body">
      	 	 	<div  id="TablaProcedimiento" >     			
     		</div>
      	 	 </div>
      </div>
          
      <div class="modal-footer">
        <button  id="btnfinalizar"   name="btnfinalizar" type="button" class="btn btn-success btn-lg btn-block" data-dismiss="modal">Finalizar</button>
       
      </div>
    </div>
  </div>
</div>

<!-- FINAL MODAL PROCEDIMIENTO -->


<!-- Modal  PIEZAS  -->
<div class="modal fade" id="Piezas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Seleccione Pieza</h4>
      </div>
      <div class="modal-body">
        

      	  <form id="frmCheck" name="frmCheck">      	  	
      	  	<div >
      	  		<input hidden="" type="text" id="txtdni" name="txtdni" value=" <?php echo $txtdnic ?>">
      	  		<input hidden="" type="text" name="txt" id="txt">
      	  		
      	  		<input hidden="" type="text" name="txtestado" id="txtestado"> 
      	  		
      	  		<input type="checkbox" name="" value="PiezaCompleta"> PiezaCompleta<br>

      	  	<input onclick="" type="checkbox" name="h[]" id="chmesial" value="Mesial">Mesial<br>	
      	  	<input type="checkbox" name="h[]" id="chdistal" value="Distal">Distal<br>	
      	  	<input type="checkbox" name="h[]" id="chincisal" value="Incisal">Incisal<br>	
      		<input type="checkbox" name="h[]" id="chplatino" value="Platino">Platino<br>		
      	  	<input type="checkbox" name="h[]" id="chvestibular" value="Vestibular">Vestibular<br>	
      	  	</div>
										
		</form>	
      </div>
      <div class="modal-footer">
        <button  id="btnAceptar" type="button"  class="btn btn-primary btn-lg btn-block" data-dismiss="modal">Aceptar</button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal -->


</body>

		
<div id="menu">
	<form name="frmEstados">

		<span  onclick="LimpiarCheck()"  data-toggle="modal" data-target="#Piezas" class="menuItem" id="Cariado">C=Cariado	 </span><br>
		<span   onclick="LimpiarCheck()" data-toggle="modal" data-target="#Piezas" id="Incrustacion" class="menuItem">INC=Incrustacion</span><br>
		
		<span  onclick="LimpiarCheck()" data-toggle="modal" data-target="#Piezas" id="cp" class="menuItem">CP=Caries Penetrante</span><br>
		<span  onclick="LimpiarCheck()" data-toggle="modal" data-target="#Piezas" id="fd" class="menuItem">FD=Fractura dentaria</span><br>

		<span   onclick="LimpiarCheck()" data-toggle="modal" data-target="#Piezas" id="do"  class="menuItem">DO=Diente obturado</span><br>

		<!-- <label class="menuItem"  data-toggle="modal" data-target="#Piezas" id="Sanos" name="Sanos">=Sano</label> -->
		
	
		<span class="menuItem" >-=Faltante</span><br>
		
	
		
		<span class="menuItem">R=Retenido</span><br>
		<span class="menuItem">FD=Fractura dentaria</span><br>
		<div class="linrBreak"></div><br>
	
		
		</form>
	</div>



</html>
<script type="text/javascript">
	

//document.getElementById('chk-t1').disabled=true;
document.getElementById('chk-l1').disabled=true;
document.getElementById('chk-c1').disabled=true;
document.getElementById('chk-b1').disabled=true;
document.getElementById('chk-r1').disabled=true;

// para sombrear algo.. ()
$('#idboton').prop('disabled',false);

</script>

<script type="text/javascript">
function myFunction() {
	  var checkBox = document.getElementById("chk-t1");
	  var text = document.getElementById("text");
	  if (checkBox.checked == true){
	    //document.getElementById("text").value = valor;
	    alert("chekeado");
	  } else {
	    // document.getElementById("text").value = valor;
	     alert("no chekeado");
	  }


}




</script>


<script type="text/javascript">

	$(document).ready(function(){
		$('#chmesial').click(function(){
			var idd=$('#txt').val();

			if (idd=='1') {
				$('#chk-t1').attr( "checked", true );
				$('#chk-t1').addClass("color");
			}
			if (idd=='2') {
				$('#chk-t2').attr( "checked", true );
			}
			if (idd=='3') {
				$('#chk-t3').attr( "checked", true );
			}
			if (idd=='4') {
				$('#chk-t4').attr( "checked", true );
			}
			if (idd=='5') {
				$('#chk-t5').attr( "checked", true );
			}
			if (idd=='6') {
				$('#chk-t6').attr( "checked", true );
			}
			if (idd=='7') {
				$('#chk-t7').attr( "checked", true );
			}
			if (idd=='8') {
				$('#chk-t8').attr( "checked", true );
			}
			if (idd=='9') {
				$('#chk-t9').attr( "checked", true );
			}
			if (idd=='10') {
				$('#chk-t10').attr( "checked", true );
			}
			if (idd=='11') {
				$('#chk-t11').attr( "checked", true );
			}
			if (idd=='12') {
				$('#chk-t12').attr( "checked", true );
			}
			if (idd=='13') {
				$('#chk-t13').attr( "checked", true );
			}
			if (idd=='14') {
				$('#chk-t14').attr( "checked", true );
			}
			if (idd=='15') {
				$('#chk-t15').attr( "checked", true );
			}
			if (idd=='16') {
				$('#chk-t16').attr( "checked", true );
			}

			if (idd=='17') {
				$('#chk-t17').attr( "checked", true );
			}
			if (idd=='18') {
				$('#chk-t18').attr( "checked", true );
			}
			if (idd=='19') {
				$('#chk-t19').attr( "checked", true );
			}
			if (idd=='20') {
				$('#chk-t20').attr( "checked", true );
			}
			if (idd=='21') {
				$('#chk-t21').attr( "checked", true );
			}
			if (idd=='22') {
				$('#chk-t22').attr( "checked", true );
			}
			if (idd=='23') {
				$('#chk-t23').attr( "checked", true );
			}
			if (idd=='24') {
				$('#chk-t24').attr( "checked", true );
			}
			if (idd=='25') {
				$('#chk-t25').attr( "checked", true );
			}
			if (idd=='26') {
				$('#chk-t26').attr( "checked", true );
			}
			if (idd=='27') {
				$('#chk-t27').attr( "checked", true );

			}
			if (idd=='28') {
				$('#chk-t28').attr( "checked", true );
			}
			if (idd=='29') {
				$('#chk-t29').attr( "checked", true );
			}
			if (idd=='30') {
				$('#chk-t30').attr( "checked", true );
			}
			if (idd=='31') {
				$('#chk-t31').attr( "checked", true );
			}
			if (idd=='32') {
				$('#chk-t32').attr( "checked", true );
			}
		});

		$('#chdistal').click(function(){
			var idd=$('#txt').val();
			if (idd=='1') {
				$('#chk-l1').attr( "checked", true );
			}
			if (idd=='2') {
				$('#chk-l2').attr( "checked", true );
			}
			if (idd=='3') {
				$('#chk-l3').attr( "checked", true );
			}
			if (idd=='4') {
				$('#chk-l4').attr( "checked", true );
			}
			if (idd=='5') {
				$('#chk-l5').attr( "checked", true );
			}
			if (idd=='6') {
				$('#chk-l6').attr( "checked", true );
			}
			if (idd=='7') {
				$('#chk-l7').attr( "checked", true );
			}
			if (idd=='8') {
				$('#chk-l8').attr( "checked", true );
			}
			if (idd=='9') {
				$('#chk-l9').attr( "checked", true );
			}
			if (idd=='10') {
				$('#chk-l10').attr( "checked", true );
			}
			if (idd=='11') {
				$('#chk-l11').attr( "checked", true );
			}
			if (idd=='12') {
				$('#chk-l12').attr( "checked", true );
			}
			if (idd=='13') {
				$('#chk-l13').attr( "checked", true );
			}
			if (idd=='14') {
				$('#chk-l14').attr( "checked", true );
			}
			if (idd=='15') {
				$('#chk-l15').attr( "checked", true );
			}
			if (idd=='16') {
				$('#chk-l16').attr( "checked", true );
			}

			
			if (idd=='17') {
				$('#chk-l17').attr( "checked", true );
			}
			if (idd=='18') {
				$('#chk-l18').attr( "checked", true );
			}
			if (idd=='19') {
				$('#chk-l19').attr( "checked", true );
			}
			if (idd=='20') {
				$('#chk-l20').attr( "checked", true );
			}
			if (idd=='21') {
				$('#chk-l21').attr( "checked", true );
			}
			if (idd=='22') {
				$('#chk-l22').attr( "checked", true );
			}
			if (idd=='23') {
				$('#chk-l23').attr( "checked", true );
			}
			if (idd=='24') {
				$('#chk-l24').attr( "checked", true );
			}
			if (idd=='25') {
				$('#chk-l25').attr( "checked", true );
			}
			if (idd=='26') {
				$('#chk-l26').attr( "checked", true );
			}
			if (idd=='27') {
				$('#chk-l27').attr( "checked", true );
			}
			if (idd=='28') {
				$('#chk-l28').attr( "checked", true );
			}
			if (idd=='29') {
				$('#chk-l29').attr( "checked", true );
			}
			if (idd=='30') {
				$('#chk-l30').attr( "checked", true );
			}
			if (idd=='31') {
				$('#chk-l31').attr( "checked", true );
			}
			if (idd=='32') {
				$('#chk-l32').attr( "checked", true );
			}

		});


		$('#chincisal').click(function(){
			var idd=$('#txt').val();
			if (idd=='1') {
				$('#chk-c1').attr( "checked", true );
			}
			if (idd=='2') {
				$('#chk-c2').attr( "checked", true );
			}
			if (idd=='3') {
				$('#chk-c3').attr( "checked", true );
			}
			if (idd=='4') {
				$('#chk-c4').attr( "checked", true );
			}
			if (idd=='5') {
				$('#chk-c5').attr( "checked", true );
			}
			if (idd=='6') {
				$('#chk-c6').attr( "checked", true );
			}
			if (idd=='7') {
				$('#chk-c7').attr( "checked", true );
			}
			if (idd=='8') {
				$('#chk-c8').attr( "checked", true );
			}
			if (idd=='9') {
				$('#chk-c9').attr( "checked", true );
			}
			if (idd=='10') {
				$('#chk-c10').attr( "checked", true );
			}
			if (idd=='11') {
				$('#chk-c11').attr( "checked", true );
			}
			if (idd=='12') {
				$('#chk-c12').attr( "checked", true );
			}
			if (idd=='13') {
				$('#chk-c13').attr( "checked", true );
			}
			if (idd=='14') {
				$('#chk-c14').attr( "checked", true );
			}
			if (idd=='15') {
				$('#chk-c15').attr( "checked", true );
			}
			if (idd=='16') {
				$('#chk-c16').attr( "checked", true );
			}

			
			if (idd=='17') {
				$('#chk-c17').attr( "checked", true );
			}
			if (idd=='18') {
				$('#chk-c18').attr( "checked", true );
			}
			if (idd=='19') {
				$('#chk-c19').attr( "checked", true );
			}
			if (idd=='20') {
				$('#chk-c20').attr( "checked", true );
			}
			if (idd=='21') {
				$('#chk-c21').attr( "checked", true );
			}
			if (idd=='22') {
				$('#chk-c22').attr( "checked", true );
			}
			if (idd=='23') {
				$('#chk-c23').attr( "checked", true );
			}
			if (idd=='24') {
				$('#chk-c24').attr( "checked", true );
			}
			if (idd=='25') {
				$('#chk-c25').attr( "checked", true );
			}
			if (idd=='26') {
				$('#chk-c26').attr( "checked", true );
			}
			if (idd=='27') {
				$('#chk-c27').attr( "checked", true );
			}
			if (idd=='28') {
				$('#chk-c28').attr( "checked", true );
			}
			if (idd=='29') {
				$('#chk-c29').attr( "checked", true );
			}
			if (idd=='30') {
				$('#chk-c30').attr( "checked", true );
			}
			if (idd=='31') {
				$('#chk-c31').attr( "checked", true );
			}
			if (idd=='32') {
				$('#chk-c32').attr( "checked", true );
			}

		});

		$('#chplatino').click(function(){
			var idd=$('#txt').val();
			if (idd=='1') {
					$('#chk-r1').attr( "checked", true );
			}
			if (idd=='2') {
					$('#chk-r2').attr( "checked", true );
			}
			if (idd=='3') {
					$('#chk-r3').attr( "checked", true );
			}
			if (idd=='4') {
					$('#chk-r4').attr( "checked", true );
			}
			if (idd=='5') {
					$('#chk-r5').attr( "checked", true );
			}
			if (idd=='6') {
					$('#chk-r6').attr( "checked", true );
			}
			if (idd=='7') {
					$('#chk-r7').attr( "checked", true );
			}
			if (idd=='8') {
					$('#chk-r8').attr( "checked", true );
			}
			if (idd=='9') {
					$('#chk-r9').attr( "checked", true );
			}
			if (idd=='10') {
					$('#chk-r10').attr( "checked", true );
			}
			if (idd=='11') {
					$('#chk-r11').attr( "checked", true );
			}
			if (idd=='12') {
					$('#chk-r12').attr( "checked", true );
			}
			if (idd=='13') {
					$('#chk-r13').attr( "checked", true );
			}
			if (idd=='14') {
					$('#chk-r14').attr( "checked", true );
			}
			if (idd=='15') {
					$('#chk-r15').attr( "checked", true );
			}
			if (idd=='16') {
					$('#chk-r16').attr( "checked", true );
			}
			
			if (idd=='17') {
				$('#chk-r17').attr( "checked", true );
			}
			if (idd=='18') {
				$('#chk-r18').attr( "checked", true );
			}
			if (idd=='19') {
				$('#chk-r19').attr( "checked", true );
			}
			if (idd=='20') {
				$('#chk-r20').attr( "checked", true );
			}
			if (idd=='21') {
				$('#chk-r21').attr( "checked", true );
			}
			if (idd=='22') {
				$('#chk-r22').attr( "checked", true );
			}
			if (idd=='23') {
				$('#chk-r23').attr( "checked", true );
			}
			if (idd=='24') {
				$('#chk-r24').attr( "checked", true );
			}
			if (idd=='25') {
				$('#chk-r25').attr( "checked", true );
			}
			if (idd=='26') {
				$('#chk-r26').attr( "checked", true );
			}
			if (idd=='27') {
				$('#chk-r27').attr( "checked", true );
			}
			if (idd=='28') {
				$('#chk-r28').attr( "checked", true );
			}
			if (idd=='29') {
				$('#chk-r29').attr( "checked", true );
			}
			if (idd=='30') {
				$('#chk-r30').attr( "checked", true );
			}
			if (idd=='31') {
				$('#chk-r31').attr( "checked", true );
			}
			if (idd=='32') {
				$('#chk-r32').attr( "checked", true );
			}

		});
		$('#chvestibular').click(function(){
			var idd=$('#txt').val();
			if (idd=='1') {
				$('#chk-b1').attr( "checked", true );
			}
			if (idd=='2') {
				$('#chk-b2').attr( "checked", true );
			}
			if (idd=='3') {
				$('#chk-b3').attr( "checked", true );
			}
			if (idd=='4') {
				$('#chk-b4').attr( "checked", true );
			}
			if (idd=='5') {
				$('#chk-b5').attr( "checked", true );
			}
			if (idd=='6') {
				$('#chk-b6').attr( "checked", true );
			}
			if (idd=='7') {
				$('#chk-b7').attr( "checked", true );
			}
			if (idd=='8') {
				$('#chk-b8').attr( "checked", true );
			}
			if (idd=='9') {
				$('#chk-b9').attr( "checked", true );
			}
			if (idd=='10') {
				$('#chk-b10').attr( "checked", true );
			}
			if (idd=='11') {
				$('#chk-b11').attr( "checked", true );
			}
			if (idd=='12') {
				$('#chk-b12').attr( "checked", true );
			}
			if (idd=='13') {
				$('#chk-b13').attr( "checked", true );
			}
			if (idd=='14') {
				$('#chk-b14').attr( "checked", true );
			}
			if (idd=='15') {
				$('#chk-b15').attr( "checked", true );
			}
			if (idd=='16') {
				$('#chk-b16').attr( "checked", true );
			}
			
			if (idd=='17') {
				$('#chk-b17').attr( "checked", true );
			}
			if (idd=='18') {
				$('#chk-b18').attr( "checked", true );
			}
			if (idd=='19') {
				$('#chk-b19').attr( "checked", true );
			}
			if (idd=='20') {
				$('#chk-b20').attr( "checked", true );
			}
			if (idd=='21') {
				$('#chk-b21').attr( "checked", true );
			}
			if (idd=='22') {
				$('#chk-b22').attr( "checked", true );
			}
			if (idd=='23') {
				$('#chk-b23').attr( "checked", true );
			}
			if (idd=='24') {
				$('#chk-b24').attr( "checked", true );
			}
			if (idd=='25') {
				$('#chk-b25').attr( "checked", true );
			}
			if (idd=='26') {
				$('#chk-b26').attr( "checked", true );
			}
			if (idd=='27') {
				$('#chk-b27').attr( "checked", true );
			}
			if (idd=='28') {
				$('#chk-b28').attr( "checked", true );
			}
			if (idd=='29') {
				$('#chk-b29').attr( "checked", true );
			}
			if (idd=='30') {
				$('#chk-b30').attr( "checked", true );
			}
			if (idd=='31') {
				$('#chk-b31').attr( "checked", true );
			}
			if (idd=='32') {
				$('#chk-b32').attr( "checked", true );
			}
		});
	});

</script>


<script type="text/javascript">


	function accionF(){		
		var idd=document.getElementById('txt').text();		
			if (idd=='1') {				
				$('#chk-t1').attr( "checked", true );
			}
		}

	function accionDO(){
			if (idd=='1') {
				$('#chk-r1').attr( "checked", true );
			}
		
	}

	function accionC(){
		if (idd=='1') {
		$('#chk-b1').attr( "checked", true );
	}
	}
	
				
		$(document).ready(function(){	

			document.getElementById('trees').oncontextmenu=function(){

				return false;
			}
			var id=1;
			var estado="asd";
			var esta="";

			//var result=document.frmEstados.Sanos.id;
				//var result=document.getElementById('Sanos').id;
			
				$('#trees').mousedown(function(e){
					if (e.button==2) {
							//$('#menu').show();
						$('#menu').css('left',e.pageX+5);	

						$('#menu').css('top',e.pageY+5);		
						$('#menu').fadeIn(100);
						$('#txt').val(id);
						
						$('#Cariado').click(function(){
								//location.reload();
							$('#txtestado').val("Cariado");
								});
						
						$('#Sanos').click(function(){
								//location.reload();
							$('#txtestado').val("Sano");
								});
						$('#Curado').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Curado");
						});

						$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
						
						$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
						$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
						$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
		
					}
			});

			$(document).click(function(e){

				if (e.button==0) {
		
					$('#menu').fadeOut(80);
					//alert("sdfdf");				
				}
			});
			$('#refresh').click(function(){
				location.reload();

			})
		});

</script>




<script type="text/javascript">

		$(document).ready(function(){
			document.getElementById('trees1').oncontextmenu=function(){
				return false;
			}
			var id=2;
			$('#trees1').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

						$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
						$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
						$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
						$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
						$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

			$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});

		$(document).ready(function(){
			document.getElementById('trees2').oncontextmenu=function(){
				return false;
			}
				var id=3;
			$('#trees2').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
						$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

			$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
	    	});

		$(document).ready(function(){
			document.getElementById('trees3').oncontextmenu=function(){
				return false;
			}
				var id=4;
			$('#trees3').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
				    $('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});	
				}
			});

			$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});

		$(document).ready(function(){
			document.getElementById('trees4').oncontextmenu=function(){
				return false;
			}
				var id=5;
			$('#trees4').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});	
				    $('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});	
				}
			});

			$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});

		$(document).ready(function(){
			document.getElementById('trees5').oncontextmenu=function(){
				return false;
			}
				var id=6;
			$('#trees5').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});	
				}
			});

			$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});	

		$(document).ready(function(){
			document.getElementById('trees6').oncontextmenu=function(){
				return false;
			}
				var id=7;
			$('#trees6').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});	
				}
			});

			$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});	

		$(document).ready(function(){
			document.getElementById('trees7').oncontextmenu=function(){
				return false;
			}
				var id=8;
			$('#trees7').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});	
				}
			});

			$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});	

	$(document).ready(function(){
			document.getElementById('trees8').oncontextmenu=function(){
				return false;
			}
				var id=9;
			$('#trees8').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});	
				}
			});

			$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});


	$(document).ready(function(){
			document.getElementById('trees9').oncontextmenu=function(){
				return false;
			}
				var id=10;
			$('#trees9').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});	
				}
			});

			$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});

	$(document).ready(function(){
			document.getElementById('trees10').oncontextmenu=function(){
				return false;
			}
				var id=11;
			$('#trees10').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});	
				}
			});

			$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});

	$(document).ready(function(){
			document.getElementById('trees11').oncontextmenu=function(){
				return false;
			}
				var id=12;
			$('#trees11').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

			$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});	

	$(document).ready(function(){
			document.getElementById('trees12').oncontextmenu=function(){
				return false;
			}
				var id=13;
			$('#trees12').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

			$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});	


	$(document).ready(function(){
			document.getElementById('trees13').oncontextmenu=function(){
				return false;
			}
				var id=14;
			$('#trees13').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

			$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});

	$(document).ready(function(){
			document.getElementById('trees14').oncontextmenu=function(){
				return false;
			}
				var id=15;
			$('#trees14').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

			$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});

	$(document).ready(function(){
			document.getElementById('trees15').oncontextmenu=function(){
				return false;
			}

			var id=16;
			$('#trees15').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

	$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});	

	$(document).ready(function(){
			document.getElementById('trees16').oncontextmenu=function(){
				return false;
			}

			var id=17;
			$('#trees16').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

		$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});	


		$(document).ready(function(){
			document.getElementById('trees17').oncontextmenu=function(){
				return false;
			}

			var id=18;
			$('#trees17').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

		$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});	


		$(document).ready(function(){
			document.getElementById('trees18').oncontextmenu=function(){
				return false;
			}

			var id=19;
			$('#trees18').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

		$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});	


		$(document).ready(function(){
			document.getElementById('trees19').oncontextmenu=function(){
				return false;
			}

			var id=20;
			$('#trees19').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

		$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});	

		$(document).ready(function(){
			document.getElementById('trees20').oncontextmenu=function(){
				return false;
			}

			var id=21;
			$('#trees20').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

		$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});


		$(document).ready(function(){
			document.getElementById('trees21').oncontextmenu=function(){
				return false;
			}

			var id=22;
			$('#trees21').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

		$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});	

		$(document).ready(function(){
			document.getElementById('trees22').oncontextmenu=function(){
				return false;
			}

			var id=23;
			$('#trees22').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

		$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});	

		$(document).ready(function(){
			document.getElementById('trees23').oncontextmenu=function(){
				return false;
			}

			var id=24;
			$('#trees23').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

		$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});	

		$(document).ready(function(){
			document.getElementById('trees24').oncontextmenu=function(){
				return false;
			}

			var id=25;
			$('#trees24').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

		$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});	

		$(document).ready(function(){
			document.getElementById('trees25').oncontextmenu=function(){
				return false;
			}

			var id=26;
			$('#trees25').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

		$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});	

		$(document).ready(function(){
			document.getElementById('trees26').oncontextmenu=function(){
				return false;
			}

			var id=27;
			$('#trees26').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

		$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});	

		$(document).ready(function(){
			document.getElementById('trees27').oncontextmenu=function(){
				return false;
			}

			var id=28;
			$('#trees27').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

		$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});	

		$(document).ready(function(){
			document.getElementById('trees28').oncontextmenu=function(){
				return false;
			}

			var id=29;
			$('#trees28').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

		$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});	

		$(document).ready(function(){
			document.getElementById('trees29').oncontextmenu=function(){
				return false;
			}

			var id=30;
			$('#trees29').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

		$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});	

		$(document).ready(function(){
			document.getElementById('trees30').oncontextmenu=function(){
				return false;
			}

			var id=31;
			$('#trees30').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

		$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});	

		$(document).ready(function(){
			document.getElementById('trees31').oncontextmenu=function(){
				return false;
			}

			var id=32;
			$('#trees31').mousedown(function(e){
				if (e.button==2) {
						//$('#menu').show();
					$('#menu').css('left',e.pageX+5);			
					$('#menu').css('top',e.pageY+5);				
					$('#menu').fadeIn(100);
					$('#txt').val(id);

					$('#Cariado').click(function(){							
							$('#txtestado').val("Cariado");
						});
					$('#Incrustacion').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Incrustacion");
						});
					$('#cp').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Caries Penetrante");
						});
					$('#fd').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Fractura dentaria");
						});
					$('#do').click(function(){
								//location.reload(); Incrustacion
							$('#txtestado').val("Diente obturado");
						});
				}
			});

		$(document).click(function(e){
				if (e.button==0) {
					$('#menu').fadeOut(80);
				}
			});
		});																								
</script>

<script type="text/javascript">
	function ObtenerDAtos(){
		var d = $("#txtd").val();
			var idcita = $("#txtidcia").val();
			
				$('#txtdnicliente1').val(d);
				$('#txidcitas').val(idcita);	
				

				$.ajax({
				type:"POST",
				data:"idcliente="+d,
				url:"../Procesos/ProcesoCita/ObtenerDatosDiente.php",
				success:function(r){

					dato=jQuery.parseJSON(r);
				


					
					$('#cbo').val(dato['Diente']);  
					$('#cbmproceso').val(dato['Diente']);  

					$('#txtnada').val(dato['Diente']+"  "+dato['Enfemedad']);

				
				}
			});	


	}
</script>

<script type="text/javascript">
	document.getElementById('btnabremodalprocedimiento').style.display = 'none';
	//PARA QUE APARESCA EL DNI EN EL MODAL  btnabremodalprocedimiento---------------
	$(document).ready(function(){
		$('#btEnfermedad').click(function(e){
				var d = $("#txtd").val();
				$('#txtdnicliente').val(d);

				var idcita2=$('#txtidcia').val();

				$('#txtidcita2').val(idcita2);
		});

		$('#btnabremodalprocedimiento').click(function(e){

			var d = $("#txtd").val();
			var idcita = $("#txtidcia").val();
			
				$('#txtdnicliente1').val(d);
				$('#txidcitas').val(idcita);			

			// 	$.ajax({
			// 	type:"POST",
			// 	data:"idcliente="+d,
			// 	url:"../Procesos/ProcesoCita/ObtenerDatosDiente.php",
			// 	success:function(r){

			// 		dato=jQuery.parseJSON(r);
					
			// 		$('#cbmproceso').val(dato['Diente']);              
			// 		$('#txtnada').val(dato['Diente']+"  "+dato['Enfemedad']);

				
			// 	}
			// });	

			
		});

		$('#btnfinalizar').click(function(e){
			
		alertify.confirm('Desea finalizar', function()
			{

				datos=$('#frmprocedimiento').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../Procesos/ProcesoCita/ActualizarCita.php",
					success:function(r){
					
		 			if (r==1) {
		 				
		 				alertify.alert("Finalizado");
		 				window.location="CitasMedicas2.php";		 				
		 				
			 			}
		 			else{
		 			
		 				alertify.error("Error");
		 			}
					}
					});

							   },
		 function()
			{ 
					alertify.error('Se Cancelo operacion');
			});

				});

		
	});
</script>


<script type="text/javascript">
	
	function AgregaDdni2(dni){
		$('#txtdni').val(dni);
	}
</script>

<script type="text/javascript">
	function LimpiarCheck(){
		for (i=0;i<document.frmCheck.elements.length;i++) {
			if (document.frmCheck.elements[i].type=="checkbox") {
				document.frmCheck.elements[i].checked=0;
			}
		}
		
	}
</script>

<script type="text/javascript">
	$(document)ready(function(){
		$('#closemodal').click(function(){
			alert("HOLA");

		});

	});

	function btncarrar(){
		alert("HOLA");
	}
</script>
<script type="text/javascript"> 
	$(document).ready(function(){ //------------------------------AGREGAR ENFERMEDAD DE DIENTE -------------------txtdnicliente

		$('#btagregarEnfermedad').click(function()
		{
			
		datos=$('#frmenfermedadiente').serialize();
		var cosa=$('#txtdnicliente').val();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../Procesos/ProcesoCita/RegistrarEnfermedadDiente.php",
			success:function(r){

			
 			if (r==1) {
 			
 				alertify.alert("Registrado");
 			//	 $("#TablaEnfermedadDiente").load("Odontograma.php?txtd="+cosa);
 				 // $("#TablaEnfermedadDiente").load("Odontograma.php");

				 $("#TablaEnfermedadDiente").load("CitasMedicas/TablaEnfermedadDiente.php?txtd="+cosa);

				$('#selectable').load("CitasMedicas/SelectCitas.php?txtd="+cosa);
				//  $("#TablaEnfermedadDiente").load("CitasMedicas/TablaEnfermedadDiente.php?txtd="+cosa);

 				 // $("#frmprocedimiento").reload();

 			}
 			else{
 				//console.log(r);
 				alertify.error("Error");
 			}
			}
			});
		});

	});
	
</script>

<script type="text/javascript">
	$(document).ready(function(){   // para registrar consulta
		$('#btnAceptar').click(function(){
			datos=$('#frmCheck').serialize();
			var cosa=$('#txtd').val();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../Procesos/ProcesoCita/RegistrarConsulta.php",
					success:function(r){				

		 			if (r==1) {
		 				
		 				alertify.alert("Registrado");

		 				// location.reload();
		 				// $("#tablaEstados").load("Odontograma.php");
		 				//poner qui
		 				//$('#tablaEstados').trigger('reset'); 
		 				// $('#tablaEstados').load("CitasMedicas/Tablacitas2.php?txtd="+txtd);

		 			
		 			}
		 			else{
		 				//console.log(r);
		 				alertify.alert("Registrado");
				//	$("#tablaEstados").load("Odontograma.php");
					$('#tablaEstados').load("CitasMedicas/Tablacitas2.php?txtd="+cosa);
					$('#selecestado').load("CitasMedicas/Select2.php?txtd="+cosa);


		 				// alertify.error("Error");
		 			}
					}
				});
		});
	});

</script>

<script type="text/javascript">
	$(document).ready(function(){   // para -------------- registrar Procedimiento
		$('#btAgregaProcedimiento').click(function(){
			

			datos=$('#frmprocedimiento').serialize();
			var cosa=$('#txtdnicliente1').val();
			console.log(datos);
				$.ajax({
					type:"POST",
					data:datos,
					url:"../Procesos/ProcesoCita/RegistrarProcedimientoDiente.php",
					success:function(r){				

		 			if (r==1) {
		 				
		 				alertify.alert("Registrado");
		 				
		 			 // $("#TablaProcedimiento").load("Odontograma.php");
		 			   $("#TablaProcedimiento").load("CitasMedicas/TablaProcedimientos.php?txtd="+cosa);
		 			}
		 			else{	 				

		 				alertify.error("Error WEy");
		 			}
					}
				});
		});
	});

</script>

<script type="text/javascript"> 
	$(document).ready(function(){
		//$('#btnAceptar').click(function(){
			var txtd= $("#txtd").val();
			$('#tablaEstados').load("CitasMedicas/Tablacitas2.php?txtd="+txtd);
		//})
		});
	

</script>


</script>

<script type="text/javascript"> 

	$(document).ready(function(){
		//$('#btnAceptar').click(function(){
			var txtd= $("#txtd").val();
			$('#TablaEnfermedadDiente').load("CitasMedicas/TablaEnfermedadDiente.php?txtd="+txtd);
		//})
				
	});

</script>


<script type="text/javascript">
		$(document).ready(function(){
		//$('#btnAceptar').click(function(){
			var txtd= $("#txtd").val();
			$('#TablaProcedimiento').load("CitasMedicas/TablaProcedimientos.php?txtd="+txtd);
		//})
				
	});
</script>

<script type="text/javascript">
		$(document).ready(function(){
		//$('#btnAceptar').click(function(){
			var txtd= $("#txtd").val();
			$('#selectable').load("CitasMedicas/SelectCitas.php?txtd="+txtd);
		//})
				
	});
</script>

<script type="text/javascript">
	
	$(document).ready(function(){
		//$('#btnAceptar').click(function(){
			var txtd= $("#txtd").val();
			$('#selecestado').load("CitasMedicas/Select2.php?txtd="+txtd);
		//})
				
	});
</script>

<script type="text/javascript">
	//FUNCIONNES ELIMINAR
	function EliminarDiente(Codidi){
		$('#txtidiente').val(Codidi);
		alertify.confirm('Desea Eliminar ', function()
			{
				//var txtd= $("#txtd").val();
				var params={idcli:$('#txtd').val(),iddi:Codidi};
				//datos=$('#frmeliminar').serialize();
				var cosa =$('#txtd').val();
			 	$.ajax({
				type:"POST",
				//data:"idi="+Codidi,
				data:params,
				url:"../Procesos/ProcesoCita/EliminarDiente.php",
				success:function(r){
						if (r==1) {
							alertify.alert("Elimnado con exito");
							// location.reload();
							// $("#tablaEstados").load("Odontograma.php");
							 $('#tablaEstados').load("CitasMedicas/Tablacitas2.php?txtd="+cosa);
							 $('#selecestado').load("CitasMedicas/Select2.php?txtd="+cosa);

							//$('#tablaEstados').load("CitasMedicas/Tablacitas2.php?txtd="+txtd);
							//$('#tablaUsuariosLoad').load("Usuarios/TablaUsuarios.php"); 
						}
						else{
							alertify.error("No se pudo elimnar");
						}
					 }
					});
			   },
		 function()
			{ 
					alertify.error('Se Cancelo operacion');
			});
	}

	function EliminarEnfermedadDiente(d,di){  // -----------------aqui
		
			alertify.confirm('Desea Eliminare ', function()
						{
				
				var params={idcl:d,idd:di};				
				var cosa=$('#txtdnicliente').val();
			 	$.ajax({
				type:"POST",
			
				data:params,
				url:"../Procesos/ProcesoCita/EliminarEnfermedadDiente.php",
				success:function(r){
						if (r==1) {
							alertify.alert("Elimnado con exito");
							// $("#TablaEnfermedadDiente").load("Odontograma.php");
							 $("#TablaEnfermedadDiente").load("CitasMedicas/TablaEnfermedadDiente.php?txtd="+cosa);

				$('#selectable').load("CitasMedicas/SelectCitas.php?txtd="+cosa);
							
						}
						else{
							alertify.error("No se pudo elimnar");
						}
					}
				});
			   },
				 function()
				{ 
					alertify.error('Se Cancelo operacion');
				});
	}

function BorrarPrce(dni,diente){   // parece QU ESTO NO FUNCIONA WEY
		//$('#txtidiente').val(Codidi);
		
		alertify.confirm('Desea Eliminar ', function()
			{
				//var txtd= $("#txtd").val();
				var params={idcli:dni,iddi:diente};
				//datos=$('#frmeliminar').serialize();
				var cosa=$('#txtdnicliente1').val();

			 	$.ajax({
				type:"POST",
				//data:"idi="+Codidi,
				data:params,
				url:"../Procesos/ProcesoCita/EliminarProcesoDiente.php",
				success:function(r){
						if (r==1) {
							alertify.alert("Eliminado con exito");
							//location.reload();
							//TablaProcedimiento
						$("#TablaProcedimiento").load("CitasMedicas/TablaProcedimientos.php?txtd="+cosa);
							//$('#tablaEstados').load("CitasMedicas/Tablacitas2.php?txtd="+txtd);
							//$('#tablaUsuariosLoad').load("Usuarios/TablaUsuarios.php"); 
						}
						else{
							alertify.error("No se pudo elimnar");
						}
					 }
					});
			   },
		 function()
			{ 
					alertify.error('Se Cancelo operacion');
			});
	}



</script>




<script type="text/javascript">
	$(document).ready(function(){

		$('#cbmprocesopro').change(function(){
			// 
			$.ajax({
				type:"POST",
				data:"idproducto=" + $('#cbmprocesopro').val(),
				url:"../Procesos/ProcesoCita/LLenarCosto.php",
				success:function(r){
					dato=jQuery.parseJSON(r);	
					$('#txtpno').val(dato['nombre']);
					$('#txtde').val(dato['descripcion']);
					$('#txtco').val(dato['costo']);
		
				}
			});
		});

		
	});
</script>

<script type="text/javascript">
	
	// para reccorrer e array  btnfinalizar
	$(document).ready(function(){
		$('#btnfinalizar')clik(function(){

			$('#TablaProcedimientos tr').each(function () {
		    var cuotaNo= $(this).find('td').eq(0).html();
		    var interes = $(this).find('td').eq(1).html();
		    var abonoCapital = $(this).find('td').eq(2).html();
		    

		    $.ajax({
		     async: false,
		     type: "POST",
		     url: "../Procesos/ProcesoCita/InsertarCitaTerminada.php",
		        data: "cuotaNo="+cuotaNo+"&interes="+interes+"&abonoCapital="+abonoCapital,
		     data: {valores:valores},
		     success: function(data) { if(data!="");}
		    });
   });



		});
	});


</script>



<?php 
}else
{
	header("location:../index.php");
}
 ?>


