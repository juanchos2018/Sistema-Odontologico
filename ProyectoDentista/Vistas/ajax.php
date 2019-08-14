<?php
$connect = mysqli_connect("localhost", "root", "", "dentista1");//Configurar los datos de conexion
$columns = array('id','documento', 'cliente', 'producto', 'precio', 'iva','estado', 'fecha');

$query = "SELECT * FROM fechas WHERE ";

if($_POST["is_date_search"] == "yes")
{
 $query .= 'fecha BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
}

if(isset($_POST["search"]["value"]))
{
 $query .= '
  (id LIKE "%'.$_POST["search"]["value"].'%" 
  OR cliente LIKE "%'.$_POST["search"]["value"].'%" 
  OR producto LIKE "%'.$_POST["search"]["value"].'%" 
  OR documento LIKE "%'.$_POST["search"]["value"].'%"
  OR precio LIKE "%'.$_POST["search"]["value"].'%")
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $fecha=date("d/m/Y", strtotime($row["fecha"]));			
 $sub_array = array();
 $sub_array[] = $row["id"];
  $sub_array[] = $row["documento"];
 $sub_array[] = $row["cliente"];
 $sub_array[] = $row["producto"];
 $sub_array[] = $row["precio"];
 $sub_array[] = $row["iva"];
  $sub_array[] = $row["estado"];
 $sub_array[] = $fecha;
 
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM fechas";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>