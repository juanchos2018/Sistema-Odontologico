
<?php 
session_start();



if(isset($_GET['txtd1'])) 
	$txtdnic =strtoupper($_GET['txtd1']);
	 else $txtdnic="";



 ?>

<?php 

require_once("../../Clases/Conexion.php"); 
	$c= new Conectar();
	$conexion=$c->conexion();
	$sqlconsul="SELECT Dni,Diente,Procedimiento,Costo,Fecha from procepaciente where Dni=$txtdnic ";

	$resultadoconsul=mysqli_query($conexion,$sqlconsul);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Procedimieno</title>

	

</head>
<body>

<div class="">
	

	<div class="row">
		
		<div  class="col-sm-2"></div>
			<table class="table" style="text-align: center;" id="miTabla">

	
	 <thead>
        <tr class="">
           
            <th>Diente 2</th>
            <th>Procedimieno</th>
            <th>Costo</th>
            <th>Fecha</th>
           
        </tr>
    </thead>

	<?php 

	while ($ver=mysqli_fetch_row($resultadoconsul)):
	 	# code...
	  ?>
	 <tbody>
	 	
	 
	<tr>
		<td><?php echo  $ver[1]; ?></td>
		<td><?php echo  $ver[2]; ?></td>
		<td><?php echo  $ver[3]; ?></td>
		<td><?php echo  $ver[4]; ?></td>
		
		
	</tr>

	<?php 


endwhile


	 ?>
	 	</tbody> 
</table>

	</div>
</div>

 
  			<br>


</body>
</html>

<?php 

 ?>


