
<?php 

require_once("../../Clases/Conexion.php"); 
	$c= new Conectar();
		$conexion=$c->conexion();
	$sql="SELECT Codigo,Nombre,Clave,Nivel from usuarios ";
	

$resultado=mysqli_query($conexion,$sql);

?>
<link href="../Librerias/DataTables/Buttons-1.5.6/css/buttons.dataTables.min.css" rel="stylesheet" />   <!--DataTabl-->
    <link href="../Librerias/DataTables/datatables.min.css" rel="stylesheet" />

    <link href="../Librerias/DataTables/DataTables-1.10.18/css/dataTables.semanticui.min.css" rel="stylesheet" />
    <link href="../Librerias/DataTables/DataTables-1.10.18/css/dataTables.foundation.min.css" rel="stylesheet" />


<br>
<table  class="table table-hover table-condensed table-bordered"   id="datatable3" style="text-align: center; ">
	<thead >
		
	
	<tr>
		
		<td>Codigo</td>
		<td>Nombre</td>
		<td>Clave</td>
		<td>Nivel</td>
		

	</tr>
	</thead>


<tbody>
		<?php 

	while ($ver=mysqli_fetch_row($resultado)) :
	 	# code...
	  ?>
	<tr>
		<td><?php echo  $ver[0]; ?></td>
		<td><?php echo $ver[1]; ?></td>
		<td><?php  echo $ver[2]; ?></td>
		<td><?php echo $ver[3]; ?></td>
	

	</tr>
<?php endwhile ?>
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