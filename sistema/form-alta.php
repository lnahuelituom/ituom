<?php
	$titulo = "Formulario de Alta";
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
			<form action ="alta.php" method="post" enctype= "multipart/form-data">
				<table class="paneles">
					<tr>
						<td> Nombre: </td>
	                    <td><input type= "text" id= "prd_nombre" name="prd_nombre"/></td>
	                </tr>
	                <tr>
						<td> Descripción: </td>
	                    <td><textarea type= "text" id= "prd_descripcion" name="prd_descripcion" rows ="6"></textarea></td>
	                </tr>
	                 <tr>
						<td> Precio: </td>
	                    <td><input type= "text" id= "prd_precio" name="prd_precio"/></td>
	                </tr>
	                <tr>
						<td> Categoria: </td>
	                    <td><select type= "text" id= "cat_id" name="cat_id"/>
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
						<td> Miniatura: </td>
	                    <td><input type= "file" id= "prd_foto1" name="prd_foto1"/></td>
	                </tr>
	                <tr>
						<td> Ampliada: </td>
	                    <td><input type= "file" id= "prd_foto2" name="prd_foto2"/></td>
	                </tr>
	                <td colspan ="2"  class="centrar">
	                	<input type="submit" value = "Agregar producto"/>
	                </td>
	            </table>
	
	</form>
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>