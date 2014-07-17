<?php

class ConectarBaseDatosService
{
	public static function connect()
	{
		$host = 'localhost';
		$puerto = '3306';
		$usuario = 'root';
		$contrasenia = 'mysql';
		$link = mysql_connect($host.':'.$puerto, $usuario, $contrasenia) or die ("Error mysql_connect");
		mysql_select_db('tutorial',$link) or die ("Error mysql_select_db");
	}
	public static function querySql($query)
	{
		$mysqlQuery = "$query";
		$linkQuery = @mysql_query($mysqlQuery);
		if($linkQuery == false)
		{
			$error = mysql_error();
			die ("Error mysql_query: ".$error." / Query: ".$mysqlQuery);
		}
		return $linkQuery;
	}
}
?>