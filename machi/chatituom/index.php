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

 <!-- Comienzo del contenedor div #header-->

     	<div id="header">
     		<div ><img src="imagenes/logo.png" alt="Logo Ituom" border= "0"/></div>
     		<div><img src="imagenes/red.png" alt="Logo Ituom" border= "0"/></div>
            
     	
        <div><form method="post" action="http://www.proyectosarcadius.com.ar"> 

       <input type="text" placeholder= "Buscar contactos, materias y mas"  name="buscar" id="buscar"/>
     <input type="submit" id="buttom4" value = "Buscar"/>                 
    
    </form> 
</div>
	
    <div > <img src="imagenes/perfil.png" alt="Perfil" border= "0"></div>
    <div > <a href= "chat.php"> <img src="imagenes/mensajes.png" alt="Privados" border= "0"></a></div>
    <div > <img src="imagenes/configurar.png" alt="Configuración" border= "0"></div>
    <div > <img src="imagenes/log.png" alt="Cerrar" border= "0"></div>


	   </div>
   
    <!-- Fin del contenedor div #header-->

    <!-- Comienzo del contenedor div .left-->
<div id="left">
    

</style>

<script src="ajax.js"></script>
<script>

function mostrar()
{
    loadDoc(null,"mensajes.php",function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
        document.getElementById("historial").innerHTML=xmlhttp.responseText;
        }
      });
}

setInterval(mostrar,3000);

function agregar()
{
    var u=document.getElementById('nombre').value;
    var c=document.getElementById('contenido').value;

    if(u!="" && c!=""){
        loadDoc("usuario="+u+"&cont="+c,"proceso.php",function()
          {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            document.getElementById("historial").innerHTML=xmlhttp.responseText;
            }
          });
          
    }else{ alert("No deje campos vacios"); }

}
</script>
</head>

<body>


<hr />

<div id="historial"><img src="ajax-loader.gif" /></div>
<fieldset>
<input type="text" id="nombre" placeholder="usuario" /><br />
<textarea id="contenido" placeholder="mensaje"></textarea><br />
<button onclick="agregar()">Ok</button>
</fieldset>

  


  
   

    </div>


    </div>
    <!-- Fin del contenedor div .left-->

    <!-- Comienzo del contenedor div .right-->

	<div id="right">
    


	</div>
    <!-- Fin del contenedor div .right-->



</div>


    <!-- Comienzo del contenedor div #footer-->
        <div id="footer">

        © 2014 | Términos y Condiciones | <a href= "Desarrolladores.php">Desarrolladores</a>  | Centro de ayuda

       

        </div>
    <!-- Fin del contenedor div #footer-->




</body>
</html>