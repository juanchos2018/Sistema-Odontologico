<?php 
/**
 * 
 */
class Procedimiento 
{
	
public	function RegistrarProcedimiento($datos)
	{
		$c= new Conectar();
		$conexion=$c->conexion();
		$sql="INSERT INTO procedimiento (nombre,grupo)
		values('$datos[0]',
			'$datos[1]')";

			return mysqli_query($conexion,$sql);
			
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

		$sql="SELECT Nivel FROM usuarios2
		 where Codigo='$datos[0]'";
		$resultado=mysqli_query($conexion,$sql);
		return mysqli_fetch_row($resultado)[0];

	}

	public function ObtenDatosUsuarios($codigo){
		$c= new Conectar();
		$conexion=$c->conexion();

		$sql ="SELECT Codigo,Nombre,Nivel from usuarios2 
		where Codigo='$codigo'";

		$resultado =mysqli_query($conexion,$sql);

		$ver=mysqli_fetch_row($resultado);

		$datos=array(
			'Codigo'=>$ver[0],
			'Nombre'=>$ver[1],
			'Nivel'=>$ver[2]
		);

		return $datos;
		
	}

	public function ActualizaUsuario($datos) {

			$c= new Conectar();
		$conexion=$c->conexion();

		$sql ="UPDATE usuarios2 
		SET Nombre='$datos[1]',
		    Nivel ='$datos[2]' 
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