<?php 

	header('Content-Type:application/json');
	$PDO=new PDO("mysql:dbname=dentista2;host=localhost","root","");

$accion =(isset($_GET['accion']))? $_GET['accion']:'leer';

switch($accion){
	case 'agregar':
	
	$sql=$PDO->prepare("INSERT INTO eventos(title,descripcion,color,textcolor,start,end)
		VALUES(:title,:descripcion,:color,:textcolor,:start,:end)");


	$respueta =$sql->execute(array(

		"title"=>$_POST['title'],
		"descripcion"=>$_POST['descripcion'],
		"color"=>$_POST['color'],
		"textcolor"=>$_POST['textcolor'],
		"start"=>$_POST['start'],
		"end"=>$_POST['end']
		));	

	echo json_enconde($respueta);
		break;
	case 'eliminar':
	echo "Eliminando";
		break;

	case 'Modificar';
	echo "modificando";
		break;

	default:

	$sql=$PDO->prepare("SELECT c.id,c.title,me.Nombres as medic,c.color,c.Paciente,p.Nombres, c.start,c.Observacion,c.Estado  FROM citasmedicas2  as c
	inner join pacientes as p
	on c.Paciente=p.Dni
	inner join medicos as me 
	on c.Medico=me.id");
	$sql->execute();

	$resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($resultado);	
	break;
}



 ?>