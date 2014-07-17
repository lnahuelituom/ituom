<?php
	$titulo = "Listado de productos";

	require "conexion.php"; // esto sirve para algo que es obligatorio. Paso 1. Conexion con la bd
	$sql = "SELECT prd_nombre, prd_descripcion, prd_precio, prd_foto1 FROM productos"; // Paso2. crear la consulta sql
	$resultado = mysqli_query ($link, $sql); //Paso 3. Ejecutar. $link viene de conexion.
	$cantidad = mysqli_num_rows ($resultado); // Funcion para contar cantidades de registros
?>
<?php include "encabezado.php"; ?>
</head>
<body>
	<div id="top"><img src="imagenes/top.png" alt="encabezado" width="980" height="80"></div>
	<div id="nav">
		<?php  include "menu.php"; ?>
	</div>
	<div id="main">
		<h1><?php echo $titulo ; ?></h1>
		<!-- inicio del desarrollo -->
		<table class= "panel">

			<tr> 
                 <th> Nombre </th>
                 <th> Descripción </th>
                 <th> Precio </th>
                 <th> Imagen </th>
                 <th colspan="2"><a href="form-alta.php"><img src="imgs/add.png" title = "Agregar producto"></a></th>
                 
 
			</tr>
			<?php

			//inicio de muestreo

			while ($fila =mysqli_fetch_array($resultado)) {
			?>

             <tr> 
                 <td> <?php echo $fila ["prd_nombre"]?></td>
                 <td> <?php echo $fila ["prd_descripcion"] ?> </td>
                 <td> <?php echo $fila ["prd_precio"] ?> </td>   
                 <td> <img src= "imagenes/<?php echo $fila ['prd_foto1']; ?>" / > </td>
                 <td> <img src="imgs/editar3.png" title ="Editar producto"> </td>
                 <td> <img src="imgs/eliminar.png "title = "Eliminar producto"> </td>
                 


			</tr>
			
           <?php
           }
			//fin de muestreo
			?>

			 <tr> 
                 <td class ="pie" colspan= "6"> Se han encontrado <?php echo $cantidad;?> registros </td>
                
</tr>




		</Table>
		<?php
		
		mysqli_close ($link)

		?>
		
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>