<?php 
/**
 * 
 */
class Clientes 
{
	


	public function LoginCliente($datos)
	{
			$c=new Conectar();
			$conexion=$c->conexion();
			//$password=sha1($datos[1]);

			$_SESSION['dni']=$datos[0];		

			$sql="SELECT * 
					from pacientes
				where Dni='$datos[0]'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
	}
	






	public function ObtenDatosUsuarios($codigo){
		$c= new Conectar();
		$conexion=$c->conexion();

		$sql ="SELECT Codigo,Nombre,Nivel from usuarios
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



	
}
 ?>