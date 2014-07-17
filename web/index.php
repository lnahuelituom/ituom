

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="Author" content="Alumnos tercer año de Análisis de Sistemas - ITUOM - 2014." />
	<link rel="shortcut icon" type="image/png" href="imagenes/favicon.png" />
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>Red Social ITUOM</title>
</head>
<body>


	<div id="general">
	

<!-- Comienzo del contenedor div #header-->
	<div id="header">
		<table class="p">
			<td><img src="imagenes/logo.png" alt="Logo Ituom" border= "0"></td>
		<td><h1>Red Social Educativa <h1></td> </table>
		
 <form action="perfil.html" method="post" enctype="multipart/form-data">
			<table class="paneles" >
				
				<tr>
		        	<td><input type="text" placeholder= "Ingrese su e-mail"  name="mail" id="mail" /></td>
				    <td><input type="password" placeholder= "Ingrese su contraseña"  name="contraseña" id="contraseña"/></td>
				    <td><input type="submit" id="buttom1" value = "Iniciar Sesion"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="sesion" id="sesion"> No cerrar sesión </td>
					<td><a href= "recover.php">Recuperar contraseña </a> </td>
				</tr>
</table>
</form>

 
	</div>

<!-- Fin del contenedor div #header-->

<!-- Comienzo del contenedor div #topcenter-->

	<div id="topcenter" >

		<h2>Conecta, comparte ideas y descubre oportunidades.</h2>

	</div>

	<!-- Fin del contenedor div #topcenter-->

	<!-- Comienzo del contenedor div .left-->

		<div class="left">
			

   <div align="center"><img src="imagenes/imagen.png"/></div>

		</div>


 <!-- Fin del contenedor div .left-->	

 <!-- Comienzo del contenedor div .right-->

		<div class="right">
			

		<form action="perfil.php" method="post" class="registro" >
<div><label>Nombre:</label>
<input type="text" name="nombre" placeholder= "Introduzca su Nombre"></div>
<div><label>Apellido:</label>
<input type="text" name="apellido" placeholder= "Introduzca su Apellido"></div>
<div><label>Mail:</label>
<input type="text" name="mail" placeholder= "Introduzca su E-mail"></div>
<div><label>Clave:</label>
<input type="password" name="pass" placeholder= "Introduzca su Contraseña"></div>
<div><label>Carrera o curso al que estas inscripto:</label>
<input type="text" name="carrera" placeholder= "Introduzca su carrrera"></div>



<div>



<input type="submit" name="enviar" value="Registrar"></div>
</form>
       

		</div>


<!-- Fin del contenedor div .right-->

<!-- Comienzo del contenedor div #footer-->

		<div id="footer">

	<p> © <?php echo(date("Y")); ?>. | Términos y Condiciones | <a href= "Desarrolladores.php">Desarrolladores</a>  | Centro de ayuda</p>

			
     <form action="perfil.html" method="post" enctype="multipart/form-data">
			<table class="paneles">
				<tr>
					<td>Encuentra compañeros: </td>
		        	<td><input type="text" placeholder= "Nombre" name="nombre" id="nombre" /></td>
		        	
				    <td><input type="text" placeholder= "Apellido"  name="apellido" id="apellido"/></td>
				    <td ><input id="buttom3" type="submit" value = "Buscar"/></td>
				</tr>
</table>
</form>

		</div>

		<!-- Fin del contenedor div #footer-->

</div>

<!-- Comienzo del contenedor div #general-->
	
</body>
</html>