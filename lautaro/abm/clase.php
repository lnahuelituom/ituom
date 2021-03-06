<?php
class Conexion  // se declara una clase para hacer la conexion con la base de datos
{
	var $con;
	function Conexion()
		   	 
	{
		// se definen los datos del servidor de base de datos 
		$conection['server']="localhost";  //host
		$conection['user']="proyectosarcad06";         //  usuario
		$conection['pass']="123";		//password
		$conection['base']="proyectosarcad06";			//base de datos
		
		
		// crea la conexion pasandole el servidor , usuario y clave
		$conect= mysql_pconnect($conection['server'],$conection['user'],$conection['pass']);


			
		if ($conect) // si la conexion fue exitosa , selecciona la base
		{
			mysql_select_db($conection['base']);			
			$this->con=$conect;
		}
	}
	function getConexion() // devuelve la conexion
	{
		return $this->con;
	}
	function Close()  // cierra la conexion
	{
		mysql_close($this->con);
	}	

}




class sQuery   // se declara una clase para poder ejecutar las consultas, esta clase llama a la clase anterior
{

	var $pconeccion;
	var $pconsulta;
	var $resultados;
	function sQuery()  // constructor, solo crea una conexion usando la clase "Conexion"
	{
		$this->pconeccion= new Conexion();
	}
	function executeQuery($cons)  // metodo que ejecuta una consulta y la guarda en el atributo $pconsulta
	{
		$this->pconsulta= mysql_query($cons,$this->pconeccion->getConexion());
		return $this->pconsulta;
	}	
	function getResults()   // retorna la consulta en forma de result.
	{return $this->pconsulta;}	
	
	function Close()		// cierra la conexion
	{$this->pconeccion->Close();}	
	
	function Clean() // libera la consulta
	{mysql_free_result($this->pconsulta);}
	
	function getResultados() // debuelve la cantidad de registros encontrados
	{return mysql_affected_rows($this->pconeccion->getConexion()) ;}
	
	function getAffect() // devuelve las cantidad de filas afectadas
	{return mysql_affected_rows($this->pconeccion->getConexion()) ;}
}




class Cliente
{
	var $nombre;     //se declaran los atributos de la clase, que son los atributos del cliente
	var $apellido;
	var $fecha;
	Var $peso;
	Var $id;
	function Cliente($nro=0) // declara el constructor, si trae el numero de cliente lo busca , si no, trae todos los clientes
	{
		if ($nro!=0)
		{
			$obj_cliente=new sQuery();
			$result=$obj_cliente->executeQuery("select * from clientes where id = $nro"); // ejecuta la consulta para traer al cliente 
			$row=mysql_fetch_array($result);
			$this->id=$row['id'];
			$this->nombre=$row['nombre'];
			$this->apellido=$row['apellido'];
			$this->fecha=$row['fecha_nac'];
			$this->peso=$row['peso'];
		}
	}
	function getClientes() // este metodo podria no estar en esta clase, se incluye para simplificar el codigo, lo que hace es traer todos los clientes 
		{
			$obj_cliente=new sQuery();
			$result=$obj_cliente->executeQuery("select * from clientes"); // ejecuta la consulta para traer al cliente 
			return $result; // retorna todos los clientes
		}
		
		// metodos que devuelven valores
	function getID()
	 { return $this->id;}
	function getNombre()
	 { return $this->nombre;}
	function getApellido()
	 { return $this->apellido;}
	function getFecha()
	 { return $this->fecha;}
	function getPeso()
	 { return $this->peso;}
	 
		// metodos que setean los valores
	function setNombre($val)
	 { $this->nombre=$val;}
	function setApellido($val)
	 {  $this->apellido=$val;}
	function setFecha($val)
	 {  $this->fecha=$val;}
	function setPeso($val)
	 {  $this->peso=$val;}

	function updateCliente()	// actualiza el cliente cargado en los atributos
	{
			$obj_cliente=new sQuery();
			$query="update clientes set nombre='$this->nombre', apellido='$this->apellido',fecha_nac='$this->fecha',peso='$this->peso' where id = $this->id";
			$obj_cliente->executeQuery($query); // ejecuta la consulta para traer al cliente 
			return $query .'<br/>Registros afectados: '.$obj_cliente->getAffect(); // retorna todos los registros afectados
	
	}
	function insertCliente()	// inserta el cliente cargado en los atributos
	{
			$obj_cliente=new sQuery();
			$query="insert into clientes( nombre, apellido, fecha_nac,peso)values('$this->nombre', '$this->apellido','$this->fecha','$this->peso')";
			
			$obj_cliente->executeQuery($query); // ejecuta la consulta para traer al cliente 
			return $query .'<br/>Registros afectados: '.$obj_cliente->getAffect(); // retorna todos los registros afectados
	
	}	
	function deleteCliente($val)	// elimina el cliente
	{
			$obj_cliente=new sQuery();
			$query="delete from clientes where id=$val";
			$obj_cliente->executeQuery($query); // ejecuta la consulta para  borrar el cliente
			return $query .'<br/>Registros afectados: '.$obj_cliente->getAffect(); // retorna todos los registros afectados
	
	}	
	
}


?>