<html>
<head>
<title></title>
</head>
<body>
<?php
include_once ("clase.php"); // incluye las clases
	$nombre="";
	$apellido="";
	$fecha="";
	$peso="";//modifique cliente por peso
	$id="";

if (isset($_GET['md'])) // si la operacion es modificar, este valor viene seteado y ejecuta el siguiente codigo
{
	$cliente=new Cliente($_GET['md']);  // instancio la clase cliente pasandole el nro de cliente, de esta forma lo busca
	$nombre=$cliente->getNombre();		// obtengo el nombre
	$apellido=$cliente->getApellido();	// obtengo el apellido
	$fecha=$cliente->getFecha();		// obtengo la fecha de nacimiento
	$peso=$cliente->getPeso();			// obtengo su peso 
	$id=$cliente->getID();				// obtengo el id
}
?>

<div >
<form method="POST" action="index.php"> 
<input type="hidden" name="id" value="<?php print $id ?>">
<table border=1>

<tr>
	<td>Nombre</td>
	<td><input type="text" name="nombre" value = "<?php print $nombre ?>"></td>
</tr>
<tr>
	<td>Apellido</td>
	<td><input type="text" name="apellido"value = "<?php print $apellido ?>"></td>
</tr>
<tr>
	<td>Fecha Nacimiento</td>
	<td><input type="text" name="fecha"value = "<?php print $fecha ?>">'yyyy-mm-dd'</td>
</tr>
<tr>
	<td>Peso</td>
	<td><input type="text" name="peso"value = "<?php print $peso ?>"></td>
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
	$cliente=new Cliente();
	//print_r($_POST);
	$cliente->setNombre($_POST['nombre']); // setea los datos
	$cliente->setApellido($_POST['apellido']);	
	$cliente->setFecha($_POST['fecha']);	
	$cliente->setPeso($_POST['peso']);	
	print " Consulta ejecutada: ". $cliente->insertCliente(); // inserta y muestra el resultado
}
if (isset($_POST['submit'])&&is_numeric($_POST['id'])) // si presiono el boton y es modificar
{
	$cliente=new Cliente($_POST['id']);  // instancio la clase pasandole el nro de cliente para cargar los datos
	$cliente->setNombre($_POST['nombre']); // setea los datos nuevos
	$cliente->setApellido($_POST['apellido']);	
	$cliente->setFecha($_POST['fecha']);	
	$cliente->setPeso($_POST['peso']);	
	print " Consulta ejecutada: ". $cliente->updateCliente(); // inserta y muestra el resultado
}
if (isset($_GET['br'])&&is_numeric($_GET['br'])) // si presiono el boton y es eliminar
{
	$cliente=new Cliente();
	print " Consulta ejecutada: ". $cliente->deleteCliente($_GET['br']); // elimina el cliente y muestra el resultado
}



$cliente=new Cliente();
$clientes= $cliente->getClientes(); // obtiene todos los clientes para despues mostrarlos

print '<br/><br/><table border=1>'
		  .'<tr><td>Nombre:</td>'
		  .'<td>Apellido:</td>'
		  .'<td>Fecha Nacimiento</td>'
		  .'<td>peso</td>'
		  .'<td>Modificar</td>'
		  .'<td>Borrar</td></tr>';

while ($row=mysql_fetch_Array($clientes)) // recorre los clientes uno por uno hasta el fin de la tabla
{
	print '<tr>'
		  .'<td>'.$row['nombre'] .'</td>'
		  .'<td>'.$row['apellido'] .'</td>'
		  .'<td>'.$row['fecha_nac'] .'</td>'
		  .'<td>'.$row['peso'] .'</td>'
		  .'<td><a href="index.php?md='.$row['id'].'">Modificar</a></td>'   // en este ejemplo para simplificar se envian los parametros por get utilizando un href
		  .'<td><a href="index.php?br='.$row['id'].'">Borrar</a></td>'		// lo correcto seria enviarlos por post con un submit por ejem.
		  .'</tr>';
}
print '</table>';
?>
</body>
</html>