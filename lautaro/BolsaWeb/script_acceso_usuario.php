<?php 
//Proceso de conexi�n con la base de datos
$conex = mysql_connect("localhost", "proyectosarcad06", "123")
		or die("No se pudo realizar la conexion");
	mysql_select_db("proyectosarcad06",$conex)
		or die("ERROR con la base de datos");

//Inicio de variables de sesi�n
if (!isset($_SESSION)) {
  session_start();
}

//Recibir los datos ingresados en el formulario
$usuario= $_POST['usuario'];
$contrasena= $_POST['contrasena'];

//Consultar si los datos son est�n guardados en la base de datos
$consulta= "SELECT * FROM usuarios WHERE usuario='".$usuario."' AND contrasena='".$contrasena."'";
$resultado= mysql_query($consulta,$conex) or die (mysql_error());
$fila=mysql_fetch_array($resultado);


if (!$fila[0]) //opcion1: Si el usuario NO existe o los datos son INCORRRECTOS
{
	echo '<script language = javascript>
	alert("Usuario o Password errados, por favor verifique.")
	self.location = "formulario.html"
	</script>';
}
else //opcion2: Usuario logueado correctamente
{
	//Definimos las variables de sesi�n y redirigimos a la p�gina de usuario
	$_SESSION['id'] = $fila['id'];
	$_SESSION['nombre'] = $fila['nombre'];

	header("Location: pagina_usuario.php");
}
