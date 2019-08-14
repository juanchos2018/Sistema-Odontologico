
<?php 
session_start();



if(isset($_GET['txtd'])) 
	$txtdnic =strtoupper($_GET['txtd']);
	 else $txtdnic="";

if (isset($_SESSION['codigo'])) {

 ?>

<?php 

require_once("../../Clases/Conexion.php"); 
	$c= new Conectar();
	$conexion=$c->conexion();
	$sqldienteenfermedad="SELECT Diente,Enfemedad from enfermedadiente  where Dni =$txtdnic";
		$resultadoenfermedadienete=mysqli_query($conexion,$sqldienteenfermedad);

?>
<!DOCTYPE html>
<html>
<head>


	

<select class="form-control input-sm"  id="cbmproceso" name="cbmproceso">     	 		
						 	
				<?php while($verenfermedaddiente=mysqli_fetch_row($resultadoenfermedadienete)): ?>
					<option value="<?php echo $verenfermedaddiente[0] ?>"> <?php echo $verenfermedaddiente[0]."-".$verenfermedaddiente[1]; ?> </option>
				<?php endwhile; ?>      	 	

      	 	</select>  

</head>
<body>




</body>
</html>






<?php 
}else
{
	header("location:../index.php");
}
 ?>


