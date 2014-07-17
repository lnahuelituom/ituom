<?php
	$titulo = "Alta de producto nuevo";

// declaro las variables

	$prd_nombre =$_POST["prd_nombre"];
	$prd_descripcion =$_POST["prd_descripcion"];
	$prd_precio =$_POST["prd_precio"];
	$cat_id =$_POST["cat_id"];
	$prd_alta= date ("Y-m-d");

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

		<!-- para capturar imagenes y guardarlas -->
<?php

$ruta="imagenes/";

$prd_foto1=$_FILES["prd_foto1"]["name"];
$prd_foto1_tmp= $_FILES ["prd_foto1"] ["tmp_name"];
move_uploaded_file ($prd_foto1_tmp,$ruta.$prd_foto1);

$prd_foto2=$_FILES["prd_foto2"]["name"];
$prd_foto2_tmp= $_FILES ["prd_foto1"] ["tmp_name"];
move_uploaded_file ($prd_foto2_tmp,$ruta.$prd_foto2);



// codigo para dar el alta del producto 


require "conexion.php"; 
$sql="INSERT INTO productos Values (NULL,
	                                '".$prd_nombre."',
	                                '".$prd_descripcion."',
	                                 ".$prd_precio.",
	                                 ".$cat_id.",
	                                '".$prd_alta."',
	                                '".$prd_foto1."',
	                                '".$prd_foto2."')";

// indica si el sql insert esta bien escrito die ($sql); 

mysqli_query ($link, $sql);  // ejecuta y da el alta

$chequeo= mysqli_affected_rows ($link);  /* avisa si algo se modifico, me va a devolver un numero, la cantidad de registros que se dio de alta.
1 si da el alta (dependiendo la cantidad de registros que subamos)
0 si solo hacemos una consulta
-1 si tenemos algun error
*/

mysqli_close ($link)
		
?>
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>