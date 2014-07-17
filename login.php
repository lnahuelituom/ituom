<?php

$mail = $_POST ["mail"];
$pass = $_POST ["pass"];
require "conexion.php";
$sql= "SELECT nombre FROM usuarios WHERE mail = '".$mail."' AND pass= '".$pass."' "; 
// En este select no necesito mostrar nada, solo necesito comparar que los datos esten correctos.
$resultado=mysqli_query ($link,$sql);
$cantidad= mysqli_num_rows ($resultado);
// si el usuario se loguea mal, la cantidad de registros sera 0
// si el usuario se registra bien, la cantidad de registros seran 1

if($cantidad ==0){

	      //redireccion si logueo mal

	      header ("location:index.php?error=1");
}
else {

	// rutina de autenticacion, te deja entrar solo si te logueas bien.

	session_start();
	$_SESSION ["login"] = "ok";

	// redireccion para ingresar al sistema

	header ("location:panel-alumnos.php");
}

?>



