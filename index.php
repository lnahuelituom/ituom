<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<?php
require_once("conexion.php");
mysql_connect("localhost","nuevo","");
	mysql_select_db("nuevo");

	
?>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="Author" content="Alumnos tercer año de Análisis de Sistemas - ITUOM - 2014." />
	<link rel="shortcut icon" type="image/png" href="imagenes/favicon.png" />
	<link type="text/css" rel="stylesheet" href="index.css"/>
	<title>Red Social ITUOM</title>
</head>
<body>




<!-- Comienzo del contenedor div #header-->
	<div id="header">
		<div ><img src="imagenes/logo.png" alt="Logo Ituom" border= "0"/></div>
     		<div><img src="imagenes/red.png" alt="Logo Ituom" border= "0"/></div>
		
  <div>

  	<form action="login.php" method="post" enctype="multipart/form-data">
			<table class="paneles" >
				
				<tr>
		        	<td><input type="text" placeholder= "Ingrese su e-mail"  name="mail" id="mail" /></td>
				    <td><input type="password" placeholder= "Ingrese su contraseña"  name="pass" id="pass"/></td>
				    <td><input type="submit" id="buttom1" value = "Iniciar Sesion"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="sesion" id="sesion"> No cerrar sesión </td>
					<td><a href= "recover.php">Recuperar contraseña </a> </td>
				</tr>
</table>
</form>
</div>
	
    	  <div ><a href= "https://www.facebook.com/pages/CFP-401-Tres-de-Febrero/114238728605316?fref=ts"> <img src="imagenes/face.png" alt="Facebook" border= "0"></a></div>
       <div > <a href= "http://www.youtube.com/user/wesem/videos"><img src="imagenes/youtube.png" alt="Youtube" border= "0"></a></div>
     
	</div>
<!--<?php
	     // if(isset ($_GET ["error"])){    // envia el dato si el valor solamente es uno (si se envio algo).
	      //	$error=$_GET["error"];
	      	//if ($error==1){
	      
	      ?>-->


<!-- Fin del contenedor div #header-->

<!-- Comienzo del contenedor div #topcenter-->

	<div id="topcenter" >

		<h2>Conecta, comparte ideas y descubre oportunidades.</h2>

	</div>

	<!-- Fin del contenedor div #topcenter-->

	<!-- Comienzo del contenedor div .left-->

		<div id="left">
			

   <div  id="up"><a href= "porfolio.html"><img src="imagenes/imagen1.png"/></a>
   <a href= "bolsatrabajo.php"><img src="imagenes/imagen2.png"/></a></div>
   <div  id= "down"><a href= "inscripciones.php"><img src="imagenes/imagen3.png"/></a>
   <a href= "calendario.php"><img src="imagenes/imagen4.png"/></a></div>

		</div>


 <!-- Fin del contenedor div .left-->	

 <!-- Comienzo del contenedor div .right-->

		<div id="right">
			

			<form action="perfil.php" method="post" class="registro" >
		<div><label>Registrate gratuitamente! </br>Forma parte de la Red social Educativa ITUOM</label></div>
	</br>
	<label>Nombre: </label>
<div><input type="text" name="nombre" placeholder= "Introduzca su Nombre"></div>
</br> <label>Apellido: </label>
<div><input type="text" name="apellido" placeholder= "Introduzca su Apellido"></div>
</br> <label>E-mail: </label>
<div><input type="text" name="mail" placeholder= "Introduzca su E-mail"></div>
</br> <label>Contraseña: </label>
<div><input type="password" name="pass" placeholder= "Introduzca su Contraseña"></div>
</br> <label>Carrera o Curso: </label>
</br>

	<?php
	$sql= "SELECT id_carrera, carrera FROM carreras ORDER BY carrera";
	$res= mysqli_query($link,$sql);
	?>
<select name="id_carrera" id="id_carrera">
							<option placeholder= "Introduzca su carrrera" selected disabled hidden value="Introduzca su carrrera">Elige tu carrera</option>
							<?php
							while ($fila=mysqli_fetch_array($res)){								
							?>			
								<option value="<?php echo $fila['id_carrera'] ?>"><?php echo $fila['carrera']?></option>
							<?php
							}
							mysqli_close($link);
							?>	
</select>


<div></br><input type="submit" id="buttom2" value="Unite Ahora"></div>
</form>

</div>





<!-- Fin del contenedor div .right-->

<!-- Comienzo del contenedor div #footer-->

		<div id="footer">

	 © 2014. | Términos y Condiciones | <a href= "Desarrolladores.html">Desarrolladores</a>  | Centro de ayuda

			
  
		</div>

		<!-- Fin del contenedor div #footer-->

	
</body>
</html>


