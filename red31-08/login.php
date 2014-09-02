<?php
session_start();
$mail = $_POST ["mail"];
$pass = $_POST ["pass"];
require "conexion.php";
//include "funciones.php";
 $sql = mysqli_query($link, "SELECT * FROM usuarios WHERE mail = '$mail' AND pass = '$pass'");
if(!isset($_SESSION['id_usuario'])){
		if(mysqli_num_rows($sql)){
		$array = mysqli_fetch_array($sql);

		$_SESSION["id_usuario"]= $array["id_usuario"];
/* 
		$_SESSION["nombre"]= $array["nombre"];
 
		$_SESSION["apellido"]= $array["apellido"];
 
		$_SESSION["mail"]= $array["mail"];
*/
		header ("location:perfil5.php");
		} else {
 
		echo "<h2>Login o Password Incorrectos</h2>";
	 
		}
	}
		else {
			header ("location:perfil5.php");
	}

/*


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
*/
?>