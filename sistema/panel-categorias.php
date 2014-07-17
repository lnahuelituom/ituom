<?php
	$titulo = "Listado de categorias";

	require "conexion.php"; // esto sirve para algo que es obligatorio. Paso 1. Conexion con la bd
	$sql = "SELECT cat_id, cat_nombre FROM categorias"; // Paso2. crear la consulta sql
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

		<table class="paneles">

			<tr> 
                 <th> id </th>
                 <th>Categoría </th>
                 <th colspan="2"> <img src="imgs/add.png" title = "Agregar categoria"> </th>

			</tr>
			<?php

			//inicio de muestreo

			while ($fila =mysqli_fetch_array($resultado)) {
			?>

             <tr> 
                 <td> <?php echo $fila ["cat_id"] ?> </td>   <!-- funciona tanto con la posicion como el nombre del campo -->
                 <td> <?php echo $fila ["cat_nombre"] ?> </td>
                 <td> <img src="imgs/editar3.png" title ="Editar producto"> </td>
                 <td> <img src="imgs/eliminar.png "title = "Eliminar producto"> </td>

			</tr>
			
           <?php
           }
			//fin de muestreo
			?>

			 <tr> 
                 <td class ="pie" colspan= "4"> Se han encontrado <?php echo $cantidad;?> registros </td>
                
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