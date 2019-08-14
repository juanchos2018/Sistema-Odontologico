<?php 
/**
 * 
 */
class Citas 
{
	
public	function RegistrarCita($datos)
	{
		$c= new Conectar();
		$conexion=$c->conexion();
		$sql="INSERT INTO citasmedicas (Medico,Paciente,Hora,Fecha,Observacion,Estado)
		values ('$datos[0]',
				'$datos[1]',
				'$datos[2]',
				'$datos[3]',
				'$datos[4]',
				'$datos[5]')";

			return mysqli_query($conexion,$sql);
			
	}

  public function EliminarCitaMedica($datos)
	{
		$c= new Conectar();
		$conexion=$c->conexion();
	
		$sql="DELETE FROM citasmedicas2
		where id='$datos'";
	

		return mysqli_query($conexion,$sql);

	}

	public function ObtenDatosCitas($codigo){
		$c= new Conectar();
		$conexion=$c->conexion();

		$sql="SELECT c.id,me.Nombres as medic,c.Paciente,p.Nombres, c.start,c.Observacion,c.Estado  FROM citasmedicas2  as c
		inner join pacientes as p
		on c.Paciente=p.Dni
		inner join medicos as me 
		on c.Medico=me.id 
		where c.id='$codigo'";

		$resultado =mysqli_query($conexion,$sql);

		$ver=mysqli_fetch_row($resultado);

		$datos=array(
			'Medico'=>$ver[1],
			'Paciente'=>$ver[3],
			'Fecha'=>$ver[4],
			'Estado'=>$ver[5],
			'Estado1'=>$ver[6]
		);

		return $datos;
		
	}
	
	public function ObtenDatosDiente($codigo){
		$c= new Conectar();
		$conexion=$c->conexion();

		$sql ="SELECT Diente,Enfemedad from enfermedadiente  where Dni ='$codigo'";


		$resultado =mysqli_query($conexion,$sql);

		$ver=mysqli_fetch_row($resultado);

		$datos=array(
			'Diente'=>$ver[0],
			'Enfemedad'=>$ver[1]
		);

		return $datos;
		
	}
  
	public	function RegistrarCita2($datos)
	{
		$c= new Conectar();
		$conexion=$c->conexion();
		$sql="INSERT INTO citasmedicas2 (title,Medico,Paciente,Color,Textcolor,Observacion,start,Estado)
		values ('$datos[0]',
				'$datos[1]',
				'$datos[2]',
				'$datos[3]',
				'$datos[4]',
				'$datos[5]',
				'$datos[6]',
				'$datos[7]')";

			return mysqli_query($conexion,$sql);
			
	}

public	function RegistrarConsulta($datos)
	{
		$c= new Conectar();
		$conexion=$c->conexion();
		$sql="INSERT INTO consulta (Dni,Numero,Estado,Partes,Fecha)
		values ('$datos[0]',
				'$datos[1]',
				'$datos[2]',
				'$datos[3]',
					now())";

			return mysqli_query($conexion,$sql);
			
	}

	


public	function RegistrarEnfermedadPaciente($datos)
	{
		$c= new Conectar();
		$conexion=$c->conexion();
		$sql="INSERT INTO enfermedadiente (Dni,Diente,Enfemedad,Fecha,Ncita)
		values ('$datos[0]',
				'$datos[1]',
				'$datos[2]',
				 now(),
			 '$datos[3]')";

			return mysqli_query($conexion,$sql);
			
	}
	public function EliminarDientes($datos)
	{
		$c= new Conectar();
		$conexion=$c->conexion();
		$dni=$datos[0];
		$diente=$datos[1];
		$sql="DELETE FROM consulta
		where dni=$dni and numero=$diente";
		//alert($dato1,$dato2);

		return mysqli_query($conexion,$sql);

	}
	public function BorrarEnfermedadDiente($datos)
	{
		$c= new Conectar();
		$conexion=$c->conexion();
		$dni=$datos[0];
		$diente=$datos[1];
		$sql="DELETE FROM enfermedadiente
		where Dni=$dni and Diente=$diente";
		

		return mysqli_query($conexion,$sql);

	}
	public function BorrarProcesoDiente($datos)
	{
		$c= new Conectar();
		$conexion=$c->conexion();
		$dni=$datos[0];
		$diente=$datos[1];
		$sql="DELETE FROM procepaciente
		where Dni=$dni and Diente=$diente";
		

		return mysqli_query($conexion,$sql);

	}
	public	function RegistrarProcesodiente($datos)
	{
		$c= new Conectar();
		$conexion=$c->conexion();
		$sql="INSERT INTO procepaciente (Dni,Diente,Procedimiento,Costo,Fecha,Ncita)
		values ('$datos[0]',
				'$datos[1]',
				'$datos[2]',
				'$datos[3]',
					now(),
				'$datos[4]')";

			return mysqli_query($conexion,$sql);
			
	}
	public function ActualizaCita($datos) {

			$c= new Conectar();
		$conexion=$c->conexion();

		$sql ="UPDATE citasmedicas2
		SET Estado='$datos[1]'

		where id='$datos[0]'";

	return mysqli_query($conexion,$sql);// e mysqli_query($conexion,$sql);
		 
	}
	public function ActualizaFechaCita($datos) {

			$c= new Conectar();
		$conexion=$c->conexion();

		$sql ="UPDATE citasmedicas2
		SET start='$datos[1]'

		where id='$datos[0]'";

	return mysqli_query($conexion,$sql);// e mysqli_query($conexion,$sql);
		 
	}


	public function obtenDatosProducto($idproducto){
		$c= new Conectar();
		$conexion=$c->conexion();


		$sql="SELECT t.idta,p.nombre,c.descrip,t.costo from tarifas t
			inner join procedimiento  p
			on t.procedimiento =p.idproc
			inner join categoria c
			on t.categoria =c.idca
			where t.idta='$idproducto'";
		$result=mysqli_query($conexion,$sql);

		$ver=mysqli_fetch_row($result);

		$data=array(
			'nombre' => $ver[1],
			'descripcion' => $ver[2],
			'costo' => $ver[3]
		);		
		return $data;
	}
	
}
 ?>