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




class Empresas
{
	var $usuario_id;     //se declaran los atributos de la clase, que son los atributos del cliente
	var $nombre;
	var $descripcion;
	Var $direccion;
    Var $url_logo;
	Var $id;
	function Empresas($nro=0) // declara el constructor, si trae el numero de cliente lo busca , si no, trae todos los clientes
	{
		if ($nro!=0)
		{
			$obj_empresas=new sQuery();
			$result=$obj_empresas->executeQuery("select * from empresas where id = $nro"); // ejecuta la consulta para traer al cliente
			$row=mysql_fetch_array($result);
			$this->id=$row['id'];
			$this->usuario_id=$row['usuario_id'];
            $this->nombre=$row['nombre'];
            $this->descripcion=$row['descripcion'];
			$this->direccion=$row['direccion'];
			$this->url_logo=$row['url_logo'];
		}
	}
	function getEmpresas() // este metodo podria no estar en esta clase, se incluye para simplificar el codigo, lo que hace es traer todos los clientes
		{
			$obj_empresas=new sQuery();
			$result=$obj_empresas->executeQuery("select e.*, u.nombre as usuario_a_cargo
                                                from empresas e
                                                inner join usuarios u on e.usuario_id = u.id
                                                where e.deleted_at is null"); // ejecuta la consulta para traer al cliente
			return $result; // retorna todos los clientes
		}
		
		// metodos que devuelven valores
	function getID()
	 { return $this->id;}
	function getUsuario_id()
	 { return $this->usuario_id;}
	function getNombre()
	 { return $this->nombre;}
    function getDescripcion()
    { return $this->descripcion;}
	function getDireccion()
	 { return $this->direccion;}
	function getUrl_logo()
	 { return $this->url_logo;}
	 
		// metodos que setean los valores
	function setUsuario_id($val)
	 { $this->usuario_id=$val;}
	function setNombre($val)
	 {  $this->nombre=$val;}
    function setDescripcion($val)
    {  $this->descripcion=$val;}
	function setDireccion($val)
	 {  $this->direccion=$val;}
	function setUrl_logo($val)
	 {  $this->url_logo=$val;}

	function updateEmpresas()	// actualiza el cliente cargado en los atributos
	{
			$obj_empresas=new sQuery();
			$query="update empresas set usuario_id='$this->usuario_id',
			nombre='$this->nombre' ,
			descripcion='$this->descripcion',
			direccion='$this->direccion',
			url_logo='$this->url_logo' where id = $this->id";

			$obj_empresas->executeQuery($query); // ejecuta la consulta para traer al cliente
			return $query .'<br/>Registros afectados: '.$obj_empresas->getAffect(); // retorna todos los registros afectados
	
	}
	function insertEmpresas()	// inserta el cliente cargado en los atributos
	{
			$obj_empresas=new sQuery();
			$query="insert into empresas( usuario_id,nombre, descripcion, direccion,url_logo)
			values('$this->usuario_id','$this->nombre', '$this->descripcion','$this->direccion','$this->url_logo')";
			
			$obj_empresas->executeQuery($query); // ejecuta la consulta para traer al cliente
			return $query .'<br/>Registros afectados: '.$obj_empresas->getAffect(); // retorna todos los registros afectados
	
	}	
	function deleteEmpresas($val)	// elimina el cliente
	{
			$obj_empresas=new sQuery();
			$query="delete from empresas where id=$val";
			$obj_empresas->executeQuery($query); // ejecuta la consulta para  borrar el cliente
			return $query .'<br/>Registros afectados: '.$obj_empresas->getAffect(); // retorna todos los registros afectados
	
	}	
	
}

