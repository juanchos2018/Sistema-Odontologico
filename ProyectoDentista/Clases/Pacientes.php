<?php 
/**
 * 
 *///include ( "Envio/NexmoMessage.php" );

class Pacientes 
{
	
public	function RegistrarPaciente($datos)
	{
		$c= new Conectar();
		$conexion=$c->conexion();
		$sql="INSERT INTO Pacientes (Nombres,Apellido,Dni,NumeroTelefono,Direccion,Email,Enfermedad,Alergia,Sexo,Fechanaci)
		values('$datos[0]',
			'$datos[1]',
			'$datos[2]',
			'$datos[3]',
			'$datos[4]',
			'$datos[5]',
			'$datos[6]',
			'$datos[7]',
			'$datos[8]',
			'$datos[9]')";

			return mysqli_query($conexion,$sql);
			
	}

	public function EnviarMensajes($datos){

	$nexmo_sms = new NexmoMessage('c1f61493', 'a1ZkHVX4pClyCU9u');
	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText($datos[0], 'Roomi', $datos[1] );
	// Step 3: Display an overview of the message
	//echo  $nexmo_sms->displayOverview($info);

//return displayOverview($info);

	}


	public function LoginUser($datos)
	{
			$c=new Conectar();
			$conexion=$c->conexion();
			//$password=sha1($datos[1]);

			$_SESSION['codigo']=$datos[0];

			$_SESSION['Nivel']=self::TraeCodigo($datos);

			$sql="SELECT * 
					from usuarios
				where Codigo='$datos[0]'
				and Clave='$datos[1]'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
	}
	public function TraeCodigo($datos)
	{
			$c=new Conectar();
			$conexion=$c->conexion();

			//$password=sha1($datos[1]);
			$pas=($datos[1]);


			$sql="SELECT Nivel 
					from usuarios
					where Codigo='$datos[0]'";
					 
			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_row($result)[0];

	}





		public function TraeUsuario($datos)
	{
		$c= new Conectar();
		$conexion=$c->conexion();

		$sql="SELECT Nivel FROM usuarios
		 where Codigo='$datos[0]'";
		$resultado=mysqli_query($conexion,$sql);
		return mysqli_fetch_row($resultado)[0];

	}

	public function ObtenDatosPaciente($codigo){
		$c= new Conectar();
		$conexion=$c->conexion();

		$sql ="SELECT Nombres,Apellido,Dni,NumeroTelefono,Direccion,Email,Enfermedad,Alergia,Sexo,Fechanaci from pacientes
		where Dni='$codigo'";


		$resultado=mysqli_query($conexion,$sql);

		$ver=mysqli_fetch_row($resultado);

		$datos=array(
			'Nombres'=>$ver[0],
			'Apellido'=>$ver[1],
			'Dni'=>$ver[2],
			'NumeroTelefono'=>$ver[3],
			'Direccion'=>$ver[4],
			'Email'=>$ver[5],
			'Enfermedad'=>$ver[6],
			'Alergia'=>$ver[7],
			'Sexo'=>$ver[8],
			'Fechanaci'=>$ver[9]);

		return $datos;
		
	}

	public function ActualizaPaciente($datos) {

			
		$c= new Conectar();
		$conexion=$c->conexion();

		$sql ="UPDATE pacientes

		SET Nombres='$datos[0]',
		    Apellido ='$datos[1]',		
		    NumeroTelefono ='$datos[3]',
		    Direccion='$datos[4]',
		    Email='$datos[5]',
		    Enfermedad='$datos[6]',
		    Alergia ='$datos[7]',
		    Sexo ='$datos[8]',
		    Fechanaci ='$datos[9]'
		    
		where Dni='$datos[2]'";

	return mysqli_query($conexion,$sql);// e mysqli_query($conexion,$sql);
		 
	}

	public function EliminarUsuario($datos)
	{
		$c= new Conectar();
		$conexion=$c->conexion();

		$sql="DELETE FROM usuarios
		where Codigo='$datos'";

		return mysqli_query($conexion,$sql);

	}
}
 ?>