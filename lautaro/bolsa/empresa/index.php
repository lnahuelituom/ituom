<html>
<head>
<title></title>
</head>
<body>
<?php
include_once ("clase.php"); // incluye las clases
	$empresa="";
	$desc_empresa="";
	$puesto="";
	$dispo="";//modifique cliente por peso
	$id_bolsa="";

if (isset($_GET['md'])) // si la operacion es modificar, este valor viene seteado y ejecuta el siguiente codigo
{
	$bolsa=new bolsa($_GET['md']);  // instancio la clase cliente pasandole el nro de cliente, de esta forma lo busca
	$empresa=$bolsa->getEmpresa();		// obtengo el nombre
	$desc_empresa=$bolsa->getDesc_empresa();	// obtengo el apellido
	$puesto=$bolsa->getPuesto();		// obtengo la fecha de nacimiento
	$dispo=$bolsa->getDispo();			// obtengo su peso 
	$id_bolsa=$bolsa->getID_bolsa();				// obtengo el id
}
?>

<div >
<form method="POST" action="index.php"> 
<input type="hidden" name="id" value="<?php print $id_bolsa ?>">
<table border=1>

<tr>
	<td>Empresa</td>
	<td><input type="text" name="empresa" value = "<?php print $empresa ?>"></td>
</tr>
<tr>
	<td>Descipcion de empresa</td>
	<td><input type="text" name="desc_empresa"value = "<?php print $desc_empresa ?>"></td>
</tr>
<tr>
	<td>Puesto</td>
	<td><input type="text" name="puesto"value = "<?php print $puesto ?>"></td>
</tr>
<tr>
	<td>Disponibilidad</td>
	<td><input type="text" name="dispo"value = "<?php print $dispo ?>"></td>
</tr>
<tr>
	<td></td>
	<td align =right><input type="submit" name="submit" value ="<?php if(is_numeric($id_bolsa)) print "Modificar"; else print "Ingresar";?>"></td>
</tr>
</table>
</form>
</div>
<?php




if (isset($_POST['submit'])&&!is_numeric($_POST['id_bolsa'])) // si presiono el boton ingresar
{
	$bolsa=new Bolsa();
	//print_r($_POST);
	$bolsa->setEmpresa($_POST['empresa']); // setea los datos
	$bolsa->setDesc_empresa($_POST['desc_empresa']);	
	$bolsa->setPuesto($_POST['puesto']);	
	$bolsa->setDispo($_POST['dispo']);	
	print " Consulta ejecutada: ". $bolsa->insertBolsa(); // inserta y muestra el resultado
}
if (isset($_POST['submit'])&&is_numeric($_POST['id_bolsa'])) // si presiono el boton y es modificar
{
	$bolsa=new Bolsa($_POST['id_bolsa']);  // instancio la clase pasandole el nro de cliente para cargar los datos
	$bolsa->setEmpresa($_POST['empresa']); // setea los datos nuevos
	$bolsa->setDesc_empresa($_POST['desc_empresa']);	
	$bolsa->setPuesto($_POST['puesto']);	
	$bolsa->setDispo($_POST['dispo']);	
	print " Consulta ejecutada: ". $bolsa->updateBolsa(); // inserta y muestra el resultado
}
if (isset($_GET['br'])&&is_numeric($_GET['br'])) // si presiono el boton y es eliminar
{
	$bolsa=new Bolsa();
	print " Consulta ejecutada: ". $bolsa->deleteBolsa($_GET['br']); // elimina el cliente y muestra el resultado
}



$bolsa=new Bolsa();
$bolsa= $bolsa->getBolsa(); // obtiene todos los clientes para despues mostrarlos

print '<br/><br/><table border=1>'
		  .'<tr><td>Empresa:</td>'
		  .'<td>Desc de empresa:</td>'
		  .'<td>Puesto:</td>'
		  .'<td>Disponibilidad</td>'
		  .'<td>Modificar</td>'
		  .'<td>Borrar</td></tr>';

while ($row=mysql_fetch_Array($bolsa)) // recorre los clientes uno por uno hasta el fin de la tabla
{
	print '<tr>'
		  .'<td>'.$row['empresa'] .'</td>'
		  .'<td>'.$row['desc_empresa'] .'</td>'
		  .'<td>'.$row['puesto'] .'</td>'
		  .'<td>'.$row['dispo'] .'</td>'
		  .'<td><a href="index.php?md='.$row['id_bolsa'].'">Modificar</a></td>'   // en este ejemplo para simplificar se envian los parametros por get utilizando un href
		  .'<td><a href="index.php?br='.$row['id_bolsa'].'">Borrar</a></td>'		// lo correcto seria enviarlos por post con un submit por ejem.
		  .'</tr>';
}
print '</table>';
?>
</body>
</html>