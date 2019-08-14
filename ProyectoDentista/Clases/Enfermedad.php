<?php 
/**
 * 
 */
class Enfermedad 
{
	
public	function RegistrarEnfermedad($datos)
	{
		$c= new Conectar();
		$conexion=$c->conexion();
		$sql="INSERT INTO Enfermedades (Codigo,Descripcion,Estado)
		values('$datos[0]',
			'$datos[1]',
			'$datos[2]')";

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





		

	public function ObtenDatosEnfer($codigo){
		$c= new Conectar();
		$conexion=$c->conexion();

		$sql ="SELECT Codigo,Descripcion,Estado from Enfermedades 
		where Codigo='$codigo'";

		$resultado =mysqli_query($conexion,$sql);

		$ver=mysqli_fetch_row($resultado);

		$datos=array(
			'Codigo'=>$ver[0],
			'Descripcion'=>$ver[1],
			'Estado'=>$ver[2]
		);

		return $datos;
		
	}

	public function ActualizaEnfermedad($datos) {

			$c= new Conectar();
		$conexion=$c->conexion();

		$sql ="UPDATE Enfermedades 
		SET Descripcion='$datos[1]',
		    Estado ='$datos[2]' 
		where Codigo='$datos[0]'";

	return mysqli_query($conexion,$sql);// e mysqli_query($conexion,$sql);
		 
	}

	public function EliminarUsuario($datos)
	{
		$c= new Conectar();
		$conexion=$c->conexion();

		$sql="DELETE FROM usuarios2
		where Codigo='$datos'";

		return mysqli_query($conexion,$sql);

	}
}
 ?>