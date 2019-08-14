<html>
 <head>
  <title>Filtrar datos por fechas usando datatables con PHP y MySQL</title>
  <link rel="stylesheet" href="../Librerias/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Librerias/bootstrap/css/csscustom.css">  
  <link href="../Librerias/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="../Librerias/plugins/datepicker/datepicker3.css">

  <style>
   body
   {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
   }
   .box
   {
    width:1270px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
  </style>
  

 </head>
 <body>

  <div class="container box">

 

   <h1 align="center"> Filtrar datos por fechas usando datatables con PHP y MySQL</h1>
   <br/>

   <div class="table-responsive"  style="overflow-x: hidden;">
    <br />
    <div class="row">
     <div class="input-daterange">
      <div class="col-md-4">
       <input type="text" name="start_date" id="start_date" class="form-control" />
      </div>
      <div class="col-md-4">
       <input type="text" name="end_date" id="end_date" class="form-control" />
      </div>      
     </div>
     <div class="col-md-4">
      <input type="button" name="search" id="search" value="Buscar" class="btn btn-info active" />
     </div>
    </div>
    <br />
    <table id="order_data" class="table  table-striped  table-hover">
     <thead>
      <tr>
       <th>Orden ID</th>
       <th>Documento</th>
       <th>Cliente</th>
       <th>Producto</th>
       <th>Precio</th>
       <th>Iva</th>
       <th>Estado</th>
       <th>Fecha</th>
      </tr>
     </thead>
    </table>
    
   </div>
  </div>
   <script src="../Librerias/jQuery-3.2.1.min.js"></script>
<script src="../Librerias/bootstrap-3.3.7/js/bootstrap.min.js"></script>
  <script src="../Librerias/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="../Librerias/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../Librerias/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

 </body>
</html>



<script type="text/javascript" language="javascript" >

$(document).ready(function(){
 


 $('.input-daterange').datepicker({
    "locale": {
                "separator": " - ",
        "applyLabel": "Aplicar",
        "cancelLabel": "Cancelar",
        "fromLabel": "Desde",
        "toLabel": "Hasta",
        "customRangeLabel": "Custom",
        "daysOfWeek": [
            "Do",
            "Lu",
            "Ma",
            "Mi",
            "Ju",
            "Vi",
            "Sa"
        ],
        "monthNames": [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "Diciembre"
        ],
        "firstDay": 1
    },
  
  format: "yyyy-mm-dd",
  autoclose: true

 });

 fetch_data('no');

 function fetch_data(is_date_search, start_date='', end_date='')
 {
  var dataTable = $('#order_data').DataTable({

    "language":{
       "lengthMenu":"Mostrar _MENU_ registros por página.",
       "zeroRecords": "Lo sentimos. No se encontraron registros.",
             "info": "Mostrando página _PAGE_ de _PAGES_",
             "infoEmpty": "No hay registros aún.",
             "infoFiltered": "(filtrados de un total de _MAX_ registros)",
             "search" : "Búsqueda",
             "LoadingRecords": "Cargando ...",
             "Processing": "Procesando...",
             "SearchPlaceholder": "Comience a teclear...",
             "paginate": {
     "previous": "Anterior",
     "next": "Siguiente", 
     }
      },

   "processing" : true,
   "serverSide" : true,
   "sort": false,
   "order" : [],
   "ajax" : {
    url:"ajax.php",
    type:"POST",
    data:{
     is_date_search:is_date_search, start_date:start_date, end_date:end_date
    }
   }
  });
 }

 $('#search').click(function(){
  var start_date = $('#start_date').val();
  var end_date = $('#end_date').val();
  if(start_date != '' && end_date !='')
  {
   $('#order_data').DataTable().destroy();
   fetch_data('yes', start_date, end_date);
  }
  else
  {
   alert("Por favor seleccione la fecha");
  }
 }); 
 
});
</script>



