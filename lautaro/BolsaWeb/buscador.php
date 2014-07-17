<?php
	
	$titulo = "Bradax Computación";

	require "conexion.php";
	$sql= "SELECT * FROM aviso";
	$res= mysqli_query($link,$sql);

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

</head>
<body>
	
	<div id="main">
		
		<!-- inicio del desarrollo -->
			
			<form style="margin-left: 300px" action="resultado.php" method="post">			
				Ingrese criterio de busqueda: <br/>
				<input type="text" id="buscar" name="buscar" placeholder= "-- Especifique su producto --"> <br/><br/>				
				<select name="categorias" id="categorias">
					<option selected>-- Elige una categoria --</option>	
				<?php
					while ($fila=mysqli_fetch_array($res)){								
				?>			
						<option value="<?php echo $fila['cat_id'] ?>"><?php echo $fila['cat_nombre']?></option>
				<?php
					}
				?>	
				</select>
				<input type="submit" value="Buscar">	
			</form>				
	
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>