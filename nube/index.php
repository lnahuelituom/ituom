<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="Author" content="Alumnos tercer año de Análisis de Sistemas - ITUOM - 2014." />
	<link rel="shortcut icon" type="image/png" href="imagenes/favicon.png" />
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/> <!--llama al archivo css le da la grafica-->
	<title>Red Social ITUOM</title>
</head>
<body>

<!-- Comienzo del contenedor div #header-->
        <div id="header">
            <div ><img src="imagenes/logo.png" alt="Logo Ituom" border= "0"/></div>
            <div><img src="imagenes/red.png" alt="Logo Ituom" border= "0"/></div>
                  
        <div><form method="post" action="http://www.proyectosarcadius.com.ar"> 

       <input type="text" placeholder= "Buscar contactos, materias y mas"  name="buscar" id="buscar"/>
     <input type="submit" id="buttom4" value = "Buscar"/>                 
    
    </form> 
</div>
    
          <div ><a href= "chat.php"> <img src="imagenes/mensajes.png" alt="Privados" border= "0"></a></div>
       <div > <img src="imagenes/configurar.png" alt="Configuración" border= "0"></div> <!--un desplegable-->
       <div > <img src="imagenes/log.png" alt="Cerrar" border= "0"></div>



       </div>


 <!-- Fin del contenedor div #header-->


  <!-- Comienzo del contenedor div .left-->
    <div id="left">
			<label>  <font size="6">Portafolio</font>  </label>
                  
                    
                    <form action="enviar_file.php" method="post" target ="secciones" enctype="multipart/form-data">
                    <input type="hidden" name="limite" value="500000" >
                                    <p><strong>Archivo a transferir</strong><br />
                      <input type="file" name="archivo">
                      <br>
                       </p>
                       <br>
                    <p><input type="submit" name="submit" value="Aceptar"></p>

                    <p><a href="portafolio.php"> <br>Tu Portafolio</a>
                   
                    <p><a href="papelera.php"> <br> Papelera </a><p>
<br>

<a href="https://drive.google.com/folderview?id=0ByOXn2jfQjRkdzUxWVVveUoyU3c&usp=sharing rel=author"> Google Drive </a><BR>
  </hr>
  <br>

               <!-- <form action="bajar_archivos.php" method="post">
       <input type="submit" value="Bajar" name="Ajoba" />
        </form>   -->
        <<form action="mostrar_archivos.php" target= "secciones" method="post">
       <input type="submit" value="Archivos cargados" name="hola" />
        </form>
          <iframe src="mostrar_archivos.php" width="950" height="350" marginheight="0" marginwidth="0" noresize scrolling="Si" frameborder="0" name= "secciones"> 
            </iframe>
       

</p>
      <br>
      <br>
      <br>

    </div>
    <!-- Fin del contenedor div .left-->

     <!-- Comienzo del contenedor div .right-->

		<div id="right">
			 	      <br>
        <SELECT NAME="Acciones" SIZE=1 onChange="javascript:alert('prueba');">
                    
    <OPTION VALUE="Acciones" target="secciones" >Acciones</OPTION>
    <OPTION VALUE="Descargar" action="mostrar_archivos.php" method="post" width="950" height="350" marginheight="0" marginwidth="0" noresize scrolling="Si" frameborder="0" name= "secciones" target="secciones">Descargar</OPTION>
    <OPTION VALUE="Eliminar" target="secciones">Eliminar</OPTION>
    <OPTION VALUE="Marcar Todos" target="secciones">Marcar Todos</OPTION> 
        </SELECT> 
     		       
             
                      
          
            <!--<iframe src="anillo.html" width="950" height="350" marginheight="0" marginwidth="0" noresize scrolling="Si" frameborder="0" name= "secciones"> 
            </iframe>-->
			 </div>
            
    <!-- Fin del contenedor div .right-->

   <!-- Comienzo del contenedor div #footer-->
        <div id="footer">
          <br>
 <br>

     			© 2014. | Términos y Condiciones | Desarrolladores | Centro de ayuda
     		
       </div>
       <!-- Fin del contenedor div #footer-->


</body>
</html>

<!--lo escrito son funciones denominados contenedores que tienen su codigo en el archivo css-->