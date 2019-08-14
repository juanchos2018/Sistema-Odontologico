
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
		$sqlconsu2="SELECT Numero from consulta  where Dni =$txtdnic";
		$resultadoconsul2=mysqli_query($conexion,$sqlconsu2);

?>
<!DOCTYPE html>
<html>
<head>

<label>Diente</label> <br>
      	 	<select class="form-control" style="width: 70px;" id="cboiddiente" name="cboiddiente">     	 		
						 	
				<?php while($ver3=mysqli_fetch_row($resultadoconsul2)): ?>
					<option value="<?php echo $ver3[0] ?>"> <?php echo $ver3[0]; ?> </option>
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


