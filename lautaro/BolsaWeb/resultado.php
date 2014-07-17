<?php
	$titulo = "Bradax Computación";
	require "conexion.php";
	
	$buscador=$_POST['buscar'];		
	$combo=$_POST['link'];
	
/*	
	$sql="SELECT prd_nombre,prd_descripcion,prd_precio,prd_foto1 FROM productos
		  WHERE prd_nombre like '%". $buscador ."%' AND cat_id= ".$combo." ";
	$sql2="SELECT prd_nombre,prd_descripcion,prd_precio,prd_foto1 FROM productos
		  WHERE prd_nombre like '%".$buscador."%'";
	//die($sql);
//	die($sql2);
	if ($combo == "-- Elige una categoria --"){ // Si no se elige ninguna categoria, muestra todos los productos
		$res=mysqli_query($link,$sql2);
	}else{
		$res=mysqli_query($link,$sql);
	}
*/
  	$sql="SELECT prd_marca,prd_descripcion,prd_precio,prd_foto1 
 			FROM productos
		  		WHERE prd_marca like '%". $buscador ."%'";
	
	if($combo != "-- Elige una categoria --"){  // Se eligio alguna categoria
		$sql .=  "  AND cat_id= ".$combo;	// Con el .= CONCATENA sin necesidad de hacer otro sql
	}
 
	$res=mysqli_query($link,$sql);
	$cant=mysqli_num_rows($res);
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta http-equiv="content-type" charset="utf-8">
	<meta name="keywords" content="" >
<meta name="description" content="" >


	<title><?php echo($titulo); ?></title>
	<link rel="stylesheet" href="panel.css" />
	<link href="css/lightbox.css" rel="stylesheet" />
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

	<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="jquery/jquery.gallerax-0.2.js"></script>
<style type="text/css">
@import "gallery.css";
</style>

</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><?php echo($titulo); ?></h1>
			<p>Distribuidor de Informática</a></p>
		</div>
	</div>

	
<div id="menu">
		<?php  include "menu.php"; ?>
	</div>

	<div id="main">
	
		<!-- inicio del desarrollo -->
		<table class="panel">
				<tr>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Precio</th>
					<th>Imagen</th>
				</tr>
				<?php
					//INICIO DE MUESTREO
					while ($fila=mysqli_fetch_array($res)){						
				?>
				<tr>
					<td><?php echo $fila['prd_marca'] ?></td>
					<td><?php echo $fila['prd_descripcion'] ?></td>
					<td><?php echo "$".$fila['prd_precio'] ?></td>
					<td><img src="imagenes/<?php echo $fila['prd_foto1'] ?>"</td>
				</tr>
				<?php
					} //FIN DE MUESTREO
					mysqli_close($link);
				?>
				<tr>
					<td class="pie" colspan="4"> Se han encontrado <?php echo $cant ?> registros.</td>
				</tr>
		</table>
		
		
		
	</div>
	<div id="pie" >
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>