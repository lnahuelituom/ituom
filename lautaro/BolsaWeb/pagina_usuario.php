<?php
//Proceso de conexi�n con la base de datos
$conex = mysql_connect("localhost", "proyectosarcad06", "123")
		or die("No se pudo realizar la conexion");
	mysql_select_db("proyectosarcad06",$conex)
		or die("ERROR con la base de datos");

//Iniciar Sesi�n
session_start();

//Validar si se est� ingresando con sesi�n correctamente
if (!$_SESSION){
echo '<script language = javascript>
alert("usuario no autenticado")
self.location = "formulario.html"
</script>';
}

$id = $_SESSION['id'];


$consulta= "SELECT apellido,mail,perfil FROM usuarios WHERE id='".$id."'";
$resultado= mysql_query($consulta,$conex) or die (mysql_error());
$fila=mysql_fetch_array($resultado);
$apellido = $fila['apellido'];
$mail = $fila['mail'];

$vperfil = $fila['perfil'];
$prueba="empresa";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pagina de Usuario</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<table width="718" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><div align="right">Usuario: <span class="Estilo6"><strong><?php echo $_SESSION['nombre'];?></strong></span></div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="right"><a href="desconectar_usuario.php">Cerrar Sesi&oacute;n</a> </div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><h3>P&Aacute;GINA DE USUARIO</h3></div></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <p>Su apellido es <?php echo $apellido; ?></p>
      <p>Su mail es: <?php echo $mail; ?></p>
    </div></td>
  </tr>
</table>

</body>
</html>
<?php







/*if ($vperfil==$prueba) //opcion1: Si el usuario NO existe o los datos son INCORRRECTOS
{

    echo $vperfil;

    $_SESSION['id'];
    header("Location: abmavisos/index.php");
}
else
{


    echo $vperfil;
}*/


if ($vperfil==='admin')  //esto lo lleva al usuario cuyo perfil sea ADMIN
{

    echo "<a href='www.google.com.ar'> Ir a pagina 2 </a>";
    echo $vperfil;
    echo" Hola admin";

    header("Location: abmempresas/index.php");
}
elseif($vperfil!='empresa')  //esto lo lleva al usuario cuyo perfil no sea NI ADMIN NI EMPRESA
{
/*
    echo"distinto a admin y empresa";
    $consulta= "SELECT id FROM empresas WHERE id='".$id."'";
    $resultado= mysql_query($consulta,$conex) or die (mysql_error());
    $fila=mysql_fetch_array($resultado);
    $vid = $fila['id'];



    $_SESSION['nombre']="Lautaro";
    $nom= $_SESSION['nombre'];
    $_SESSION['id']=$vid;
    $nuevaid=$_SESSION['id'];;
    echo "$nom";
    echo $nuevaid;
    */
}else{ //esto lo lleva al usuario cuyo perfil sea EMPRESA
    $opa= $_SESSION['id']; //tra id usuario
    $consulta= "SELECT id FROM empresas WHERE usuario_id='".$opa."'";
    $resultado= mysql_query($consulta,$conex) or die (mysql_error());
    $fila=mysql_fetch_array($resultado);
    $vid = $fila['id'];

   echo $opa;
    $_SESSION['nombre']="Lautaro";
    $nom= $_SESSION['nombre'];
    $_SESSION['id']=$vid;
    $nuevaid=$_SESSION['id'];;
    echo "$nom";
    echo $nuevaid; //id empresa

    header("Location: abmavisos/index.php");
}


?>
