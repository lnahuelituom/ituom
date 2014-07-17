<?php
	$titulo = "Buscador de productos";
	require "conexion.php";
   $sql = "SELECT cat_id, cat_nombre FROM categorias";
   $resultado = mysqli_query ($link, $sql);

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

		<form action="resultado.php" method="post">
        <table class = "paneles">


         <!-- <tr>
          	<td class="lista">Ingrese criterio de búsqueda:</td> </br>
			<td class="lista"><select id="categoria" name= "categoria">
			<option value ="a"> Elija su categoria </option>
            <option value ="b"> Telefonos Celulares </option>
            <option value ="c"> Televisores </option>
            <option value ="d"> Sistemas de Audio y Video </option>
            <option value ="e"> GPS </option>
            <option value ="f"> Tablets </option>
		</select>-->
		<tr>
          	<td class="lista">Ingrese criterio de búsqueda:</td> 
          	<td class="lista"><select name="cat_id" id="cat_id">

	<?php
		while($fila = mysqli_fetch_array($resultado)){
	?>
		<option value="<?php echo $fila['cat_id']; ?>"><?php echo $fila['cat_nombre']; ?></option>
	<?php
		}
		mysqli_close($link)
	?>

	</select></td>


			</tr>
			<tr>
			<td colspan="2" align="center" class="lista"><input type="submit" value="Buscar" class="botones" /></td>
			 </tr>



	</table>
		
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>