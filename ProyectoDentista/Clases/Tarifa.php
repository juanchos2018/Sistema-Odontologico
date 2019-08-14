<?php 
/**
 * 
 */
class Tarifa 
{
	
public	function RegistrarTarifa($datos)
	{
		$c= new Conectar();
		$conexion=$c->conexion();
		$sql="INSERT INTO  tarifas(procedimiento,categoria,costo)
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


	public function ObtenDatosTarifa($codigo){
		$c= new Conectar();
		$conexion=$c->conexion();

		$sql ="SELECT idta,procedimiento,categoria,costo from tarifas
		where idta='$codigo'";

		$resultado =mysqli_query($conexion,$sql);

		$ver=mysqli_fetch_row($resultado);

		$datos=array(
			'Codigo'=>$ver[0],
			'Procedimiento'=>$ver[1],
			'Categoria'=>$ver[2],
			'Costo'=>$ver[3]
		);

		return $datos;
		
	}

	public function ActualizaTarifa($datos) {

			$c= new Conectar();
		$conexion=$c->conexion();

		$sql ="UPDATE tarifas
		SET procedimiento='$datos[1]',
		    Categoria ='$datos[2]' ,
		    Costo ='$datos[3]' 
		where idta='$datos[0]'";

	return mysqli_query($conexion,$sql);// e mysqli_query($conexion,$sql);
		 
	}

	
}
 ?>