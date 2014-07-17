<html>
<head>
<title></title>
</head>
<body>
<?php
include_once ("clase.php"); // incluye las clases
	$usuario_id="";
	$nombre="";
	$descripcion="";
    $direccion="";
	$url_logo="";
	$id="";

if (isset($_GET['md'])) // si la operacion es modificar, este valor viene seteado y ejecuta el siguiente codigo
{
	$empresas=new Empresas($_GET['md']);  // instancio la clase cliente pasandole el nro de cliente, de esta forma lo busca
	$usuario_id=$empresas->getUsuario_id();		// obtengo el nombre
	$nombre=$empresas->getNombre();	// obtengo el apellido
	$descripcion=$empresas->getDescripcion();		// obtengo la fecha de nacimiento
    $direccion=$empresas->getDireccion();
	$url_logo=$empresas->getUrl_logo();			// obtengo su peso
	$id=$empresas->getID();				// obtengo el id
}
?>

<div >
<form method="POST" action="index.php"> 
<input type="hidden" name="id" value="<?php print $id ?>">
<table border=1>

<tr>
	<td>Usuario_id</td>
	<td><input type="text" name="usuario_id" value = "<?php print $usuario_id ?>"></td>
</tr>
<tr>
	<td>Nombre</td>
	<td><input type="text" name="nombre"value = "<?php print $nombre ?>"></td>
</tr>
<tr>
	<td>Descripcion</td>
	<td><input type="text" name="descripcion"value = "<?php print $descripcion ?>"></td>
</tr>
<tr>
	<td>Direccion</td>
	<td><input type="text" name="direccion"value = "<?php print $direccion ?>"></td>
</tr>
    <tr>
        <td>Url_logo</td>
        <td><input type="text" name="url_logo"value = "<?php print $url_logo ?>"></td>
    </tr>
<tr>
	<td></td>
	<td align =right><input type="submit" name="submit" value ="<?php if(is_numeric($id)) print "Modificar"; else print "Ingresar";?>"></td>
</tr>
</table>
</form>
</div>
<?php




if (isset($_POST['submit'])&&!is_numeric($_POST['id'])) // si presiono el boton ingresar
{
	$empresas=new Empresas();
	//print_r($_POST);
	$empresas->setUsuario_id($_POST['usuario_id']); // setea los datos
	$empresas->setNombre($_POST['nombre']);
	$empresas->setDescripcion($_POST['descripcion']);
	$empresas->setDireccion($_POST['direccion']);
    $empresas->setUrl_logo($_POST['url_logo']);
	print " Consulta ejecutada: ". $empresas->insertEmpresas(); // inserta y muestra el resultado
}
if (isset($_POST['submit'])&&is_numeric($_POST['id'])) // si presiono el boton y es modificar
{
	$empresas=new Empresas($_POST['id']);  // instancio la clase pasandole el nro de cliente para cargar los datos
	$empresas->setUsuario_id($_POST['usuario_id']); // setea los datos nuevos
	$empresas->setNombre($_POST['nombre']);
	$empresas->setDescripcion($_POST['descripcion']);
	$empresas->setDireccion($_POST['direccion']);
    $empresas->setUrl_logo($_POST['url_logo']);
	print " Consulta ejecutada: ". $empresas->updateEmpresas(); // inserta y muestra el resultado
}
if (isset($_GET['br'])&&is_numeric($_GET['br'])) // si presiono el boton y es eliminar
{
	$empresas=new Empresas();
	print " Consulta ejecutada: ". $empresas->deleteEmpresas($_GET['br']); // elimina el cliente y muestra el resultado
}



$empresas=new Empresas();
$empresas= $empresas->getEmpresas(); // obtiene todos los clientes para despues mostrarlos

print '<br/><br/><table border=1>'
		  .'<tr><td>Usuario_a_cargo:</td>'
		  .'<td>Nombre:</td>'
		  .'<td>Descripcion</td>'
		  .'<td>Direccion</td>'
          .'<td>Url_logo</td>'
		  .'<td>Modificar</td>'
		  .'<td>Borrar</td></tr>';

while ($row=mysql_fetch_Array($empresas)) // recorre los clientes uno por uno hasta el fin de la tabla
{
    print '<tr>'
        .'<td><a href="index.php?usuario_id='.$row['usuario_id'].'">'.$row['usuario_a_cargo'] .'</a></td>'
        .'<td>'.$row['nombre'] .'</td>'
        .'<td>'.$row['descripcion'] .'</td>'
        .'<td>'.$row['direccion'] .'</td>'
        .'<td>'.$row['url_logo'] .'</td>'

        .'<td><a href="index.php?md='.$row['id'].'">Modificar</a></td>'   // en este ejemplo para simplificar se envian los parametros por get utilizando un href
        .'<td><a href="index.php?br='.$row['id'].'">Borrar</a></td>'		// lo correcto seria enviarlos por post con un submit por ejem.
        .'</tr>';
}
print '</table>';
?>
</body>
</html>