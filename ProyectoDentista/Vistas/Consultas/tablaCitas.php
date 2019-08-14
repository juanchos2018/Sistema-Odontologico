 
<?php 
session_start();

if (isset($_SESSION['codigo'])) {
	# code...
//	echo $_SESSION;


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
	



	<?php require_once("../../Clases/Conexion.php");
	
		$c= new Conectar();
		$conexion=$c->conexion();
		$sql="SELECT id,Nombres from medicos ";

		$resultado= mysqli_query($conexion,$sql);

		$sql2="SELECT Dni,Nombres,Apellido from pacientes";
		$resultado2=mysqli_query($conexion,$sql2);


	 ?>


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
.sinborde {
    border: 0;
  }


textarea:focus{
    border-color: rgb(255, 144, 0);
    box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075)inset, 0 0 8px rgba(255,144,0,0.6);
    outline: 0 none;
}
.redondeadonorelieve {
    border-radius: 5px;
    border: 1px solid #008f39;
  }

  .transpa  {
    background-color: transparent;
 border: 0;

</style>

    <link href="../Librerias/DataTables/Buttons-1.5.6/css/buttons.dataTables.min.css" rel="stylesheet" />   <!--DataTabl-->
    <link href="../Librerias/DataTables/datatables.min.css" rel="stylesheet" />

    <link href="../Librerias/DataTables/DataTables-1.10.18/css/dataTables.semanticui.min.css" rel="stylesheet" />
    <link href="../Librerias/DataTables/DataTables-1.10.18/css/dataTables.foundation.min.css" rel="stylesheet" />
</head>
<body>
	<br>
<div class="container">
	<div align="center">
		
	</div>
	 			
		
	<div class="col-lg-4">
                                <!-- <div class="input-group">
                                  <span class="input-group-addon" >Fecha</span>
                                <input type="date" name="start_at" value="" class="form-control" id="txtfiltro">
                                </div> -->
                            </div>
<div class="col-md-3">
                                    <!-- <button type="button" class="btn btn-default" onclick="" id="btnfecha">
                                        <span class="glyphicon glyphicon-search"></span> Buscar</button> -->
                                    <!-- <span id="loader"></span> -->
                                </div>
      <div class="col-md-4">

      		<span  
				id="btnlistar"	name="btnlistar"	 class="btn btn-success btn-sm"">Listar Citas
				
			</span>        
             </div>
                               


<br> <br> <br> 
	<div class="row" align=" center">
		<div class="col-sm-10">
				


				
			</div>
		
	</div>
</div>


<hr>





<!--  AQUI  MODAL DE ODONTOGRAMA  COÑO -->

<div class="modal fade" id="ModalHistorial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Historial</h4>
      </div>
      <div class="modal-body">

      	<form id="frmDatos">
      		<input type='text' id='txtdniotro' name='txtdniotro'>
      		<button id="b" name="b">buscar</button>
      	</form>
      	
       
<script type="text/javascript">

	$('#fechai').val(date.format());
	$(document).ready(function(){
		$('#btnVerHistorial').click(function(){
			var idd=$('#txtdnic').val();			
			});
		});

</script>

	 <?php 

	if(isset($_POST['b'])) {
		$code=$_POST['txtdniotro'];
		$consu="SELECT Dni,Nombre,Fecha,Doctor,Procedimientos,Estado,Costo from Historial
		where = '$code'";
		$rs=mysqli_query($consu,$conexion);

	}
	//$txtdnic =strtoupper($_GET['txtdnic']);
	 else $txtdnic="";
	 echo $txtdnic;
	 echo "no hay"; 
	$consulta="SELECT Dni,Nombre,Fecha,Doctor,Procedimientos,Estado,Costo from Historial";

		$resultado3=mysqli_query($conexion,$consulta);
	
				?>
		      	<table class="table table-hover table-condensed table-bordered" id="datatable2" style="text-align: center;">
				
				<thead >
					<tr>
						
						<td>Codigo</td>
						<td>Procedimiento</td>
						<td>Categoria</td>
						<td>Costo</td>
						<td>Editar</td>
						<td>Eliminar</td>

				</tr>
			</thead>
			<tbody>
					<?php 

				while ($ver5=mysqli_fetch_row($resultado3)):
				 	
				  ?>

					<tr>
						<td><?php echo $ver5[0]; ?></td>
						<td><?php echo $ver5[1]; ?></td>
						<td><?php echo $ver5[2]; ?></td>
						<td><?php echo $ver5[3]; ?></td>
						<td><?php echo $ver5[4]; ?></td>
						<td><?php echo $ver5[5]; ?></td>			
						
					</tr>
					<?php endwhile; ?>
				</tbody>
				</table>
      
				     </div>
				      <div class="modal-footer">
				    <button  id="btnAgrega" type="button" class="btn btn-warning" data-dismiss="modal">Agregar CAtgoria</button>
			       
			      </div>
			    </div>
			  </div>
</div>


<!--  AQUI  TEmina modal  COÑO -->


</body>






<script >

$(document).ready(function(){
	$('#btnVerHistorial').click(function(){

	});
});
		

</script>


<!-- <script type="text/javascript">
	$(document).ready(function(){
		$('#tablaCitas').load("CitasMedicas/TablaConsultaCita.php");
		// para MOSTRAR LA TABLA CITAS btnlistar
	});
	
</script>
 -->



    <script src="../Librerias/DataTables/datatables.min.js"></script>
    <script src="../Librerias/DataTables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="../Librerias/DataTables/Buttons-1.5.6/js/buttons.flash.min.js"></script>
    <script src="../Librerias/DataTables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="../Librerias/DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="../Librerias/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="../Librerias/DataTables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
    <script src="../Librerias/DataTables/Buttons-1.5.6/js/buttons.print.min.js"></script>

<script type="text/javascript">
	







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
        });
    </script>


<?php 
}else
{
	header("location:../index.php");
}
 ?>
