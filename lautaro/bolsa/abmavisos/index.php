<html>
<head>
<title></title>
</head>
<body>
<?php
include_once ("clase.php"); // incluye las clases
	$empresa_id="";
	$descripcion="";
	$link="";
	$disponibilidad="";
	$id="";

if (isset($_GET['md'])) // si la operacion es modificar, este valor viene seteado y ejecuta el siguiente codigo
{
	$avisos=new Avisos($_GET['md']);  // instancio la clase cliente pasandole el nro de cliente, de esta forma lo busca
	$empresa_id=$avisos->getEmpresa_id();		// obtengo el nombre
	$descripcion=$avisos->getDescripcion();	// obtengo el apellido
	$link=$avisos->getLink();		// obtengo la fecha de nacimiento
	$disponibilidad=$avisos->getDisponibilidad();			// obtengo su peso
	$id=$avisos->getID();				// obtengo el id
}
?>

<div >
<form method="POST" action="index.php"> 
<input type="hidden" name="id" value="<?php print $id ?>">
<table border=1>

<tr>
	<td>Empresa_id</td>
	<td><input type="text" name="empresa_id" value = "<?php print $empresa_id ?>"></td>
</tr>
<tr>
	<td>Descripcion</td>
	<td><input type="text" name="descripcion"value = "<?php print $descripcion ?>"></td>
</tr>
<tr>
	<td>Link</td>
	<td><input type="text" name="link"value = "<?php print $link ?>"></td>
</tr>
<tr>
	<td>Disponibilidad</td>
	<td><input type="text" name="disponibilidad"value = "<?php print $disponibilidad ?>"></td>
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
	$avisos=new Avisos();
	//print_r($_POST);
	$avisos->setEmpresa_id($_POST['empresa_id']); // setea los datos
	$avisos->setDescripcion($_POST['descripcion']);
	$avisos->setLink($_POST['link']);
	$avisos->setDisponibilidad($_POST['disponibilidad']);
	print " Consulta ejecutada: ". $avisos->insertAvisos(); // inserta y muestra el resultado
}
if (isset($_POST['submit'])&&is_numeric($_POST['id'])) // si presiono el boton y es modificar
{
	$avisos=new Avisos($_POST['id']);  // instancio la clase pasandole el nro de cliente para cargar los datos
	$avisos->setEmpresa_id($_POST['empresa_id']); // setea los datos nuevos
	$avisos->setDescripcion($_POST['descripcion']);
	$avisos->setLink($_POST['link']);
	$avisos->setDisponibilidad($_POST['disponibilidad']);
	print " Consulta ejecutada: ". $avisos->updateAvisos(); // inserta y muestra el resultado
}
if (isset($_GET['br'])&&is_numeric($_GET['br'])) // si presiono el boton y es eliminar
{
	$avisos=new Avisos();
	print " Consulta ejecutada: ". $avisos->deleteAvisos($_GET['br']); // elimina el cliente y muestra el resultado
}



$avisos=new Avisos();
$avisos= $avisos->getAvisos(); // obtiene todos los clientes para despues mostrarlos

print '<br/><br/><table border=1>'
		  .'<tr><td>Empresa:</td>'
		  .'<td>Descripcion:</td>'
		  .'<td>Link</td>'
		  .'<td>Disponibilidad</td>'
		  .'<td>Modificar</td>'
		  .'<td>Borrar</td></tr>';

while ($row=mysql_fetch_Array($avisos)) // recorre los clientes uno por uno hasta el fin de la tabla
{
	print '<tr>'
		  .'<td><a href="index.php?empresa='.$row['empresa_id'].'">'.$row['empresa_nombre'] .'</a></td>'
		  .'<td>'.$row['descripcion'] .'</td>'
		  .'<td>'.$row['link'] .'</td>'
		  .'<td>'.$row['disponibilidad'] .'</td>'
		  .'<td><a href="index.php?md='.$row['id'].'">Modificar</a></td>'   // en este ejemplo para simplificar se envian los parametros por get utilizando un href
		  .'<td><a href="index.php?br='.$row['id'].'">Borrar</a></td>'		// lo correcto seria enviarlos por post con un submit por ejem.
		  .'</tr>';
}
print '</table>';
?>
</body>
</html>