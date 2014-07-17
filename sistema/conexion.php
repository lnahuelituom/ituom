<?php
$server="localhost";
$usuario_db="proyectosarcad01";
$clave_db="123456";
$base="proyectosarcad01";
$link=mysqli_connect($server,$usuario_db,$clave_db,$base);
mysqli_set_charset($link, "utf8");
/*

if (!$link) {
    die('Error de Conexion (' . mysqli_connect_errno() . ') ' . mysqli_connect_error() );
}

*/

?>