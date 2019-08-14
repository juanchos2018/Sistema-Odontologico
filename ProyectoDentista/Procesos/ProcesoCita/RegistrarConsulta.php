<?php 

require_once("../../Clases/Conexion.php");
require_once("../../Clases/CitasMedicas.php");

$obj = new Citas();

$lista=array();

if($_POST['h'] != "")
{
		 if(is_array($_POST['h']))
         {
         		$datos2[0]=$_POST['txtdni'];
         		$datos2[1]=$_POST['txt'];
         		$datos2[2]=$_POST['txtestado'];

       		 // realizamos el ciclo
       		 while(list($key,$value) = each($_POST['h'])) 
        	{
        		echo "$value"."-";
        		$datos2[3]=$value;

				// $sql=mysqli_query("INSERT INTO deporte (pertenece_a, deporte) VALUES ('$id','$value')");
				echo $obj->RegistrarConsulta($datos2);
       	 	}
     //   	 	$datos2=array(
					// $_POST['txtdni'],
					// $_POST['txt'],
					// $_POST['txtestado'],
					// $value);

				//echo $obj->RegistrarConsulta($datos2);
   		 }
}




// $datos2[0]=$_POST['txtdni'];
// $datos2[1]=$_POST['txt'];
// $datos2[2]=$_POST['txtestado'];

// $ch1=$_POST['chmesial'];
// $ch2=$_POST['chdistal'];
// $ch3=$_POST['Incisal'];
// $ch4=$_POST['Platino'];
// $ch5=$_POST['Vestibular'];

// if ($ch1==true) {
// 	$datos2[3]=$_POST['chmesial'];
// }
// else{
// 	$datos2[3]='nulo';
// }


// $datos=array(
// $_POST['txtdni'],
// $_POST['txt'],
// $_POST['txtestado'],
// $_POST['chmesial']
// );

// echo $obj->RegistrarConsulta($datos2);


 ?>