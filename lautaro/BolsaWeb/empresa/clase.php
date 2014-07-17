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




class Bolsa
{
	var $empresa;     //se declaran los atributos de la clase, que son los atributos del cliente
	var $desc_empresa;
	var $puesto;
	Var $dispo;
	Var $id_bolsa;
	function Bolsa($nro=0) // declara el constructor, si trae el numero de cliente lo busca , si no, trae todos los clientes
	{
		if ($nro!=0)
		{
			$obj_bolsa=new sQuery();
			$result=$obj_bolsa->executeQuery("select * from bolsa where id_bolsa = $nro"); // ejecuta la consulta para traer al cliente 
			$row=mysql_fetch_array($result);
			$this->id_bolsa=$row['id_bolsa'];
			$this->empresa=$row['empresa'];
			$this->desc_empresa=$row['desc_empresa'];
			$this->puesto=$row['puesto'];
			$this->dispo=$row['dispo'];
		}
	}
	function getBolsa() // este metodo podria no estar en esta clase, se incluye para simplificar el codigo, lo que hace es traer todos los clientes 
		{
			$obj_bolsa=new sQuery();
			$result=$obj_bolsa->executeQuery("select * from bolsa"); // ejecuta la consulta para traer al cliente 
			return $result; // retorna todos los clientes
		}
		
		// metodos que devuelven valores
	function getID_bolsa()
	 { return $this->id_bolsa;}
	function getEmpresa()
	 { return $this->empresa;}
	function getDesc_empresa()
	 { return $this->desc_empresa;}
	function getPuesto()
	 { return $this->puesto;}
	function getDispo()
	 { return $this->dispo;}
	 
		// metodos que setean los valores
	function setEmpresa($val)
	 { $this->empresa=$val;}
	function setDesc_empresa($val)
	 {  $this->desc_empresa=$val;}
	function setPuesto($val)
	 {  $this->puesto=$val;}
	function setDispo($val)
	 {  $this->dispo=$val;}

	function updateBolsa()	// actualiza el cliente cargado en los atributos
	{
			$obj_bolsa=new sQuery();
			$query="update bolsa set empresa='$this->empresa', desc_empresa='$this->desc_empresa',puesto='$this->puesto',dispo='$this->dispo' where id_bolsa = $this->id_bolsa";
			$obj_bolsa->executeQuery($query); // ejecuta la consulta para traer al cliente 
			return $query .'<br/>Registros afectados: '.$obj_bolsa->getAffect(); // retorna todos los registros afectados
	
	}
	function insertBolsa()	// inserta el cliente cargado en los atributos
	{
			$obj_bolsa=new sQuery();
			$query="insert into bolsa( empresa, desc_empresa, puesto,dispo)values('$this->empresa', '$this->desc_empresa','$this->puesto','$this->dispo')";
			
			$obj_bolsa->executeQuery($query); // ejecuta la consulta para traer al cliente 
			return $query .'<br/>Registros afectados: '.$obj_bolsa->getAffect(); // retorna todos los registros afectados
	
	}	
	function deleteBolsa($val)	// elimina el cliente
	{
			$obj_bolsa=new sQuery();
			$query="delete from bolsa where id_bolsa=$val";
			$obj_bolsa->executeQuery($query); // ejecuta la consulta para  borrar el cliente
			return $query .'<br/>Registros afectados: '.$obj_bolsa->getAffect(); // retorna todos los registros afectados
	
	}	
	
}


?>