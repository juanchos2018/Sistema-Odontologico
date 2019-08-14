<?php 
/**
 * `id`			 INT(100) NOT NULL AUTO_INCREMENT primary key,
	`Nombres`		 VARCHAR(100) NOT NULL,
	`Apellido`		 VARCHAR(100) NOT NULL,
	`Dni` 		VARCHAR(100) NOT NULL,
	`Ruc` 		VARCHAR(100) NOT NULL,
	`Colegiatura`		 VARCHAR(100) NOT NULL,
	`NumeroTelefono`	 VARCHAR(250) NOT NULL,
	`Direccion`		 VARCHAR(250) NOT NULL,
	`Email` 			VARCHAR(250) NULL DEFAULT NULL,
	`Sexo			` VARCHAR(250) NULL DEFAULT NULL,
	`Fechanaci` VARCHAR(250) NOT NULL
 */
class Medicos 
{
	
public	function RegistrarMedico($datos)
	{
		$c= new Conectar();
		$conexion=$c->conexion();
		$sql="INSERT INTO Medicos (Nombres,Apellido,Dni,Ruc,Colegiatura,NumeroTelefono,Direccion,Email,Sexo,Fechanaci)
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

	public function ObtenDatosMedicos($codigo){
		$c= new Conectar();
		$conexion=$c->conexion();

		$sql ="SELECT id,Nombres,Apellido,Dni,Ruc,Colegiatura,NumeroTelefono,Direccion,Email,Sexo from medicos
		where id='$codigo'";

		$resultado =mysqli_query($conexion,$sql);

		$ver=mysqli_fetch_row($resultado);

		$datos=array(
			'id'=>$ver[0],
			'Nombre'=>$ver[1],
			'Apellido'=>$ver[2],
			'Dni'=>$ver[3],
			'Ruc'=>$ver[4],
			'Colegiatura'=>$ver[5],
			'NumeroTelefono'=>$ver[6],
			'Direccion'=>$ver[7],
			'Email'=>$ver[8],
			'Sexo'=>$ver[9]
		);

		return $datos;
		
	}

	public function ActualizaMedico($datos) {

		$c= new Conectar();
		$conexion=$c->conexion();

		$sql ="UPDATE medicos
		SET Nombres='$datos[1]',
		    Apellido ='$datos[2]',
			Dni='$datos[3]',
		    Ruc ='$datos[4]',
		    Colegiatura='$datos[5]',
		    NumeroTelefono='$datos[6]',
		    Direccion='$datos[7]',
		    Email ='$datos[8]',
		    Sexo ='$datos[9]'
		where id='$datos[0]'";

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