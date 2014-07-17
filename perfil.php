<?php

include ("conexion.php");


if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	isset($_POST['apellido']) && !empty($_POST['apellido']) &&
	isset($_POST['mail']) && !empty($_POST['mail']) &&
	isset($_POST['id_carrera']) && !empty($_POST['id_carrera']) &&
	isset($_POST['pass']) && !empty($_POST['pass']) )

{

$conexion = mysql_connect($server,$usuario_db,$clave_db) or die ('Ha fallado la conexión: ');
mysql_select_db($base,$conexion)or die ('Problemas de conexion ');



mysql_query("INSERT INTO usuario (nombre, apellido, mail, carrera, pass) VALUES ('$_POST[nombre]','$_POST[apellido]','$_POST[mail]','$_POST[id_carrera]','$_POST[pass]')", $conexion);
echo "sus datos se han insertado correctamente";


} else {

	echo "problemas al insertar datos";
}
?>



