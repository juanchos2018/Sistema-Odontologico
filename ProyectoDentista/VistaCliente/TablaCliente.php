
<?php 
session_start();



if(isset($_GET['txt1'])) 
	$txtdnic =strtoupper($_GET['txt1']);
	 else $txtdnic="";

// if (isset($_SESSION['dni'])) {

 ?>

<?php 

require_once("../Clases/Conexion.php"); 
    

require_once("menucliente.php");

	$c= new Conectar();
	$conexion=$c->conexion();
	$sqlconsul="SELECT pro.Dni,die.nombre,pro.Procedimiento,pro.Costo,pro.Ncita from procepaciente as pro  
    inner join nombredientes as die 
    on pro.Diente = die.numero 
     where Dni=$txtdnic ";

	$resultadoconsul=mysqli_query($conexion,$sqlconsul);

?>
<link href="../Librerias/DataTables/Buttons-1.5.6/css/buttons.dataTables.min.css" rel="stylesheet" />   <!--DataTabl-->
    <link href="../Librerias/DataTables/datatables.min.css" rel="stylesheet" />

    <link href="../Librerias/DataTables/DataTables-1.10.18/css/dataTables.semanticui.min.css" rel="stylesheet" />
    <link href="../Librerias/DataTables/DataTables-1.10.18/css/dataTables.foundation.min.css" rel="stylesheet" />
<!DOCTYPE html>
<html>
<head>
	<title>Procedimieno</title>

<style type="text/css">
    
.fondo{
   /* background-color: #61EEF9;*/
 /*   background: url (../img/fondo.jpg);*/
    background: url(../img/fondo3.jpg);
}
.conteinerTeeh{
            display: flex;
            justify-content: space-around;
        }

</style>
</head>
<body  class="fondo">

<div class="container">
    <input type="text" name="dnipa" id="dnipa" value="<?php echo $txtdnic ?>"  >
	<div class="row">		
		<div  class="col-sm-2 "></div>
			<table class="table table-hover table-condensed table-bordered" style="text-align: center;" id="datatable4">
	
	 <thead>
        <tr class="">
           
            <th>Diente</th>
            <th>Procedimieno</th>
            <th>Costo</th>
            <th>Detalle</th>
          
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
            <span  data-toggle="modal" data-target="#modalDetalle" class="btn btn-danger btn-sm"  onclick="Detalle()"  >
                <span class="glyphicon glyphicon-search"></span>
            </span>
        </td>
	</tr>

	<?php 
endwhile
	 ?>
	 	</tbody> 
</table>


<script src="../Librerias/DataTables/datatables.min.js"></script>
    <script src="../Librerias/DataTables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="../Librerias/DataTables/Buttons-1.5.6/js/buttons.flash.min.js"></script>
    <script src="../Librerias/DataTables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="../Librerias/DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="../Librerias/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="../Librerias/DataTables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
    <script src="../Librerias/DataTables/Buttons-1.5.6/js/buttons.print.min.js"></script>
	</div>
</div>

 

<div class="modal fade" id="modalDetalle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-xs" role="document">
    <div class="modal-content">
      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Detalle</h4>
          </div>
          <div class="modal-body">

        <div id="tabladetalleCliente">
            
        </div>
        </div>
       </div>
    </div>
</div>


<div class="modal fade" id="modalOndograma" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Odontograma</h4>
          </div>
         
       <!-- ondotograma -->
  <h4>Dientes Superiores    </h4> 
  <h5>Superior Izquierdo</h5>
   <h5 align="right">Superior Derecho</h5>
       <div class="modal-body">
            <div class="row conteinerTeeh" >
        <div class="space" >

            <img id="trees"   name="18"  src="../img/18.png" alt="" width="46px" height="60px"  >                
            <!-- <h5  FACE="arial" SIZE=0 COLOR=#000000 class="img-side">Diente <br>ocipital</h5>
 --><div>
       <label>3er<br>Molar</label>
 </div>
      
           
        </div>
        <div class="space" >
            <img  id="trees1"   class="" src="../img/17.png" alt="" width="50px" height="60px" >
                <!-- <h5  FACE="arial" SIZE=0 COLOR=#000000 class="img-side">Diente <br>ocipital</h5> -->         
    
            <label>2do<br>Molar</label>
        </div>

        <div class="space" >
            <img id="trees2"  class="" src="../img/16.png" alt="" width="50px" height="60px" >
            
     <label>1er<br>Molar</label>
        </div>

        <div class="space" >
            <img id="trees3"  class="" src="../img/15.png" alt="" width="35px" height="60px" >
            <div style="margin-right: 7px;">
                 <label  >2do<br>PreMolar</label>
            </div>
                
               
        </div>
        
        <div class="space" >
            <img id="trees4"  class="" src="../img/14.png" alt="" width="35px" height="60px" >
           
           <div align="center">
                <label>1er<br>PreMolar</label>
           </div>
           

        </div>

        <div class="space" >
            <img id="trees5"  class="" src="../img/13.png" alt="" width="35px" height="60px" >
               
            
            <label>Canino</label>
        </div>  

        <div class="space" >
          <img id="trees5"  class="" src="../img/12.png" alt="" width="35px" height="60px" >
      
        <label>Incisivo<br>Lateral</label>
        </div>

        <div class="space" >
                <img id="trees7"  class="" src="../img/11.png" alt="" width="35px" height="60px" >
         
           
            <label>Incisivo<br>Central</label>
        </div>

        
        <div class="space" >
            <img  id="trees8"  class="" src="../img/21.png" alt="" width="40px" height="60px" >
       
            <label>Incisivo <br> Central</label>
        </div>
                
    <div class="space" >
        <img id="trees9"  class="" src="../img/22.png" alt="" width="40px" height="60px" >  
        
            <label>Incisivo <br> Lateral</label>
    </div>                  
            
    <div class="space" >
        <img id="trees10"  class="" src="../img/23.png" alt="" width="40px" height="60px"  >
    
            <label>Canino </label>
    </div>                  

    <div class="space" >
        <img id="trees11"  class="" src="../img/24.png" alt="" width="40px" height="60px"  >
        <div style="margin-right: 5px;">
            
        
            <label >1er<br>Pre-Molar</label>
        </div>
    </div>                                                      
                                            
    <div  class="" >
        <img id="trees12"  class="" src="../img/25.png" alt="" width="40px" height="60px" >
       
       <div style="margin-right: 5px;">
            <label>2do<br>Pre-Molar</label>
        </div>
    </div>                                              
                                                
    <div class="space" >
        <img  id="trees13"  class="" src="../img/26.png" alt="" width="40px" height="60px" >
        
            <label>1er<br>Molar</label>
    </div>                                      
                                                    
    <div class="">
        <img id="trees14"  class="" src="../img/27.png" alt="" width="40px" height="60px"  >
        
            <label>2do<br>Molar</label>
    </div>                                              
    
    <div class="space" >
        <img id="trees15"  class="" src="../img/28.png" alt="" width="40px" height="60px" >
       
            <label>3er<br>Molar</label>
    </div>                                              
                                                    
        
    <!--  AQUI COMIENZA LOS DIENTES DE ABAJO PO  -->                
    <br>
                   
                                                
    </div>

    <hr>
     <h4>Dientes Inferiores</h4> 
       <h5>Inferior Izquierdo</h5>
        <h5 align="right">Inferior Derecho</h5>
    <div class="row conteinerTeeh" >
        <div class="space">
            <img id="trees16"  class=""  src="../img/48.png" alt="" width="50px" height="60px">
<br>
           
                 <label>3er<br>Molar</label>
            
        </div>
        
        <div class="space">
            <img  id="trees17"  class="" src="../img/47.png" alt="" width="50px" height="60px">
            <br>
           
         <label>2do<br>Molar</label>
        </div>
            
        <div  class="space">
                <img id="trees18"  class="" src="../img/46.png" alt="" width="50px" height="60px">
                <br>
                <label>1er<br>Molar</label>
        </div>      

        <div   class="space" >
                <img id="trees19"  class="" src="../img/45.png" alt="" width="35px" height="60px">
            
                <br>
                <label style="margin-right: 7px;">2do<br>PreMolar</label>
        </div>
    
        <div class="space" >
            <img id="trees20"  class="" src="../img/44.png" alt="" width="35px" height="60px">
           
             <br>
                <label>1er<br>PreMolar</label>
        </div>  
            
        <div   class="space" >
            <img id="trees21"  class="" src="../img/43.png" alt="" width="35px" height="60px">
           <br>
           <div style="margin-right: 4px;">
               
           
                <label>Canino </label>
            </div>
        </div>  
            
        <div  class="space"  >
            <img id="trees22"  class="" src="../img/42.png" alt="" width="35px" height="60px">
           <br>
              <label>Incisivo <br>Lateral </label>
        </div>  
            
        <div class="space">
            <img id="trees23"  class="" src="../img/41.png" alt="" width="40px" height="60px">
           <br>
                 <label>Incisivo <br>Central </label>
        </div>  
            

        <div class="space">
            <img id="trees24"  class="" src="../img/31.png" alt="" width="40px" height="60px">
            
                 <br>
                 <label>Incisivo <br>Central </label>
        </div>

        <div class="space" >
            <img id="trees25"  class="" src="../img/32.png" alt="" width="40px" height="60px">
                   <br>
              <label>Incisivo <br>Lateral </label>    
        </div>
                
        <div class="space" >
            <img id="trees26"  class="" src="../img/33.png" alt="" width="40px" height="60px">
           
                <br>
                <div  style="margin-right: 4px;" >
                <label>Canino </label>
            </div>
        </div>                                      
                                
        <div  class="space" >
            <img id="trees27"  class="" src="../img/34.png" alt="" width="40px" height="60px">
             
               <br>
               <div  style="margin-right: 4px;">
                <label>1er<br>PreMolar</label>
            </div>
        </div>                                  
        
        <div  class="space">
            <img id="trees28"  class="" src="../img/35.png" alt="" width="40px" height="60px">
            
                <br>
                <div  style="margin-right: 4px;">
                <label>2do<br>PreMolar</label>
            </div>
        </div>                                  
                
        <div  class="space">
            <img id="trees29"  class="" src="../img/36.png" alt="" width="45px" height="60px">
           <br>
                <label>1er<br>Molar</label>
        </div>                          
                                            
        <div class="space">
            <img id="trees30"  class="" src="../img/37.png" alt="" width="45px" height="60px">
             <br>
                <label>2do<br>Molar</label>
        </div>                                  
        
        <div class="space" >
            <img id="trees31"  class="" src="../img/38.png" alt="" width="45px" height="60px">     <br>
                <label>3er<br>Molar</label>
        </div>           
    </div>
        
        </div>
       </div>

       <!-- fin -->
       
       </div>
    </div>
</div>





</body>

</html>




<script>
        $(document).ready(function () {
            $("#datatable").DataTable({

                "aLengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "Todos"]],
                "bDestroy": true,
                "language": {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ning?n dato disponible en esta tabla",
                    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "?ltimo",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            });

            $('#datatable2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todos"]]
            });

            $('#vertical').DataTable({
                "scrollY": "200px",
                "scrollCollapse": true,
                "paging": false
            });

            $('#horizontal').DataTable({
                "scrollX": true
            });
            $('#datatable3').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
             $('#datatable4').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
</script>


<script type="text/javascript">
    function Detalle()
        {
            // $('#btn').click(function(){
            var d=$('#dnipa').val();

             $('#tabladetalleCliente').load("HistorialCliente/tablaHistorialCliente.php?txt="+d);

        // });
        }
       function Ondotograma(){

        $('#modalOndograma').modal('show');
       } 
</script>

<script type="text/javascript">
    
    // $(document)ready(function(){

    //     $('#btn').click(function(){
    //         var d=$('#dnipa').val();
    //          $('#tabladetalleCliente').load("TablaDetalleCliente.php?txt="+d);
    //     });
       
    // });

</script>
<?php 
// }else
// {
// 	header("location:iniciocliente.php");
// }
 ?>


