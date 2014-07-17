<?php

class ConectarBaseDatosService
{
	public static function connect()
	{
		$host = 'localhost';
		$puerto = '3306';
		$usuario = 'proyectosarcad05';
		$contrasenia = '123';
		$link = mysql_connect($host.':'.$puerto, $usuario, $contrasenia) or die ("Error mysql_connect");
		mysql_select_db('proyectosarcad05',$link) or die ("Error mysql_select_db");
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