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




class Avisos
{
	var $empresa_id;     //se declaran los atributos de la clase, que son los atributos del cliente
	var $descripcion;
	var $link;
	Var $disponibilidad;
	Var $id;
	function Avisos($nro=0) // declara el constructor, si trae el numero de cliente lo busca , si no, trae todos los clientes
	{
		if ($nro!=0)
		{
			$obj_avisos=new sQuery();
			$result=$obj_avisos->executeQuery("select * from avisos where id = $nro"); // ejecuta la consulta para traer al cliente
			$row=mysql_fetch_array($result);
			$this->id=$row['id'];
			$this->empresa_id=$row['empresa_id'];
			$this->descripcion=$row['descripcion'];
			$this->link=$row['link'];
			$this->disponibilidad=$row['disponibilidad'];
		}
	}
	function getAvisos() // este metodo podria no estar en esta clase, se incluye para simplificar el codigo, lo que hace es traer todos los clientes
		{
			$obj_avisos=new sQuery();
			$result=$obj_avisos->executeQuery("select a.*, e.nombre as empresa_nombre
			                                   from avisos a
			                                   inner join empresas e on a.empresa_id = e.id
                                               where a.deleted_at is null"); // ejecuta la consulta para traer al cliente
			return $result; // retorna todos los clientes
		}
		
		// metodos que devuelven valores
	function getID()
	 { return $this->id;}
	function getEmpresa_id()
	 { return $this->empresa_id;}
	function getDescripcion()
	 { return $this->descripcion;}
	function getLink()
	 { return $this->link;}
	function getDisponibilidad()
	 { return $this->disponibilidad;}
	 
		// metodos que setean los valores
	function setEmpresa_id($val)
	 { $this->empresa_id=$val;}
	function setDescripcion($val)
	 {  $this->descripcion=$val;}
	function setLink($val)
	 {  $this->link=$val;}
	function setDisponibilidad($val)
	 {  $this->disponibilidad=$val;}

	function updateAvisos()	// actualiza el cliente cargado en los atributos
	{
			$obj_avisos=new sQuery();
			$query="update avisos set empresa_id='$this->empresa_id', descripcion='$this->descripcion',link='$this->link',disponibilidad='$this->disponibilidad' where id = $this->id";
			$obj_avisos->executeQuery($query); // ejecuta la consulta para traer al cliente
			return $query .'<br/>Registros afectados: '.$obj_avisos->getAffect(); // retorna todos los registros afectados
	
	}
	function insertAvisos()	// inserta el cliente cargado en los atributos
	{
			$obj_avisos=new sQuery();
			$query="insert into avisos( empresa_id, descripcion, link,disponibilidad)values('$this->empresa_id', '$this->descripcion','$this->link','$this->disponibilidad')";
			
			$obj_avisos->executeQuery($query); // ejecuta la consulta para traer al cliente
			return $query .'<br/>Registros afectados: '.$obj_avisos->getAffect(); // retorna todos los registros afectados
	
	}	
	function deleteAvisos($val)	// elimina el cliente
	{
			$obj_avisos=new sQuery();
			$query="delete from avisos where id=$val";
			$obj_avisos->executeQuery($query); // ejecuta la consulta para  borrar el cliente
			return $query .'<br/>Registros afectados: '.$obj_avisos->getAffect(); // retorna todos los registros afectados
	
	}	
	
}

