



<?php 
session_start();



if(isset($_GET['txtd'])) 
	$txtdnic =strtoupper($_GET['txtd']);
	 else $txtdnic="";

if (isset($_SESSION['codigo']) ) {

 ?>

<?php 

require_once("../../Clases/Conexion.php"); 
	$c= new Conectar();
	$conexion=$c->conexion();
	$sqlconsul="SELECT Dni,Diente,Procedimiento,Costo from procepaciente where Dni=$txtdnic ";

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
           
            <th>Diente</th>
            <th>Procedimieno</th>
            <th>Costo</th>
            <th>Borrar</th>
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
		
		<td>
			<span class="btn btn-danger btn-xs"  onclick="BorrarPrce('<?php echo $ver[0] ?>','<?php echo $ver[1] ?>')">
				<span class="glyphicon glyphicon-remove"></span>
			</span>
		</td>
	</tr>

	<?php 


endwhile


	 ?>
	 	</tbody> 
</table>

	</div>
</div>
 <br>
 <br>
 <div class="col-lg-4">     	
    <label>Total a Cancelar</label>
    
		<div class="input-group">
                     <span class="input-group-addon">S/.</span>
                      <input type="text" name="txtpaga" id="txtpaga"  class="form-control"  >
                  </div>
  			</div>
  			<br>


</body>
</html>
<script type="text/javascript">
	
  $(document).ready(function()
{
  //Defino los totales de mis 2 columnas en 0
  // var total_col1 = 0;
  var total_col2 = 0;
  //Recorro todos los tr ubicados en el tbody
  $('#miTabla tbody').find('tr').each(function (i, el) {
             
        //Voy incrementando las variables segun la fila ( .eq(0) representa la fila 1 )     
        // total_col1 += parseFloat($(this).find('td').eq(0).text());
        total_col2 += parseFloat($(this).find('td').eq(2).text());
                
    });
    //Muestro el resultado en el th correspondiente a la columna
    // $('#ejemplo tfoot tr th').eq(0).text("Total " + total_col1);
   // $('#ejemplo tfoot tr th').eq(1).text("Total " + total_col2);
  		$('#txtpaga').val(total_col2);

     // document.write(total_col2);

});
</script>






<?php 
}else
{
	header("location:../index.php");
}
 ?>


