<?php
// Realizamos la conexión con la base de datos

$db_host = "localhost";                    // Servidor donde está alojada la base de datos
$db_name = "proyectosarcadprueba";                    // Nombre de la base de datos
$db_user = "root";                    // Usuario de la base de datos
$db_password = "mysql";                // Contraseña de la base de datos
$db_table = "noticias";           // Nombre de la tabla de la base de datos
$conexion = mysql_connect($db_host, $db_user, $db_password) or die("No se ha podido realizar la conexión con la base de datos. Error: ".mysql_error());
mysql_select_db($db_name, $conexion);
