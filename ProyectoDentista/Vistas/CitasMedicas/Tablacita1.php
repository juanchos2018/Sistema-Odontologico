<?php 
$mysqli= new mysqli("localhost","root","","dentista2");

$salida="";
// $query="SELECT n.id,n.titulo,n.texto,c.Descripcion,a.Nombre,n.fecha from noticias  as n
// 	inner join categoria as c 
// 	on c.Idcategoria= n.idcategoria
// 	inner join autor as a
// 	on n.idautor=a.Idautor
// 	order by n.titulo";

$fecha=date("Y-m-d");

$query="SELECT c.id,me.Nombres as medic,c.Paciente,p.Nombres, c.start,c.Observacion,c.Estado  FROM citasmedicas2  as c
	inner join pacientes as p
	on c.Paciente=p.Dni
	inner join medicos as me 
	on c.Medico=me.id
	order by p.Nombres";
	


if (isset($_POST['consulta'])) {
	$q=$mysqli->real_escape_string($_POST['consulta']);
	$query="SELECT c.id,me.Nombres as medic,c.Paciente,p.Nombres, c.start,c.Observacion,c.Estado  FROM citasmedicas2  as c
	inner join pacientes as p
	on c.Paciente=p.Dni
	inner join medicos as me 
	on c.Medico=me.id
	where c.start like '%".$q."%'";
	# code...
}
$resultado =$mysqli->query($query);



if ($resultado->num_rows>0) {
	$salida.="<table class='table table-hover table-condensed table-bordered'>
			<thead>
			<tr>
			<td>Codigo</td>
			<td>Medico</td>
			<td>DniPaciente</td>
			<td>Nombres</td>
			<td>Fecha</td>
			<td>Observacion</td>
			<td>Estado</td>
			<td>Visualizar</td>
			
			</tr>
			</thead>
			<tbody>";
		while($fila=mysqli_fetch_row($resultado)){
			$salida.="<tr>
			<td>".$fila[0]."</td>
			<td>".$fila[1]."</td>
			<td>".$fila[2]."</td>
			<td>".$fila[3]."</td>
			<td>".$fila[4]."</td>
			<td>".$fila[5]."</td>
			<td>".$fila[6]."</td>
		<td align='center' >	<span class='btn btn-warning btn-xs' >
				<span data-toggle='modal' data-target='#ModaObervacion' class='glyphicon glyphicon-eye-open'   onclick=AgregaDdni($fila[2],$fila[0]);></span>
			</span>
	
			</td>


			</tr>";

			}
			$salida.="</tbody></table>";
}
else{
$salida.="No hya datos";
}

echo $salida;
$mysqli->close();
 ?>
