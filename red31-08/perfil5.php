<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<script type="text/javascript" src="js/jquery.js"></script>


	  <link rel="shortcut icon" type="image/png" href="imagenes/favicon.png" />
<link rel="stylesheet" href="stylesheet.css" type="text/css" />
<link rel="stylesheet" href="css/basic.css" type="text/css" />
    
    <!-- PNG FIX for IE6 -->
    <!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
    <!--[if lte IE 6]>
        <script type="text/javascript" src="login_panel/js/pngfix/supersleight-min.js"></script>
    <![endif]-->

    <?php
    session_start();
    require "conexion.php";
    //require "validar.php";
    $id_usuario = $_SESSION["id_usuario"];
    $sql="SELECT * FROM usuarios WHERE id_usuario = $id_usuario";
    $res=mysqli_query($link,$sql);
    $cant=mysqli_num_rows($res);
    ?>
    
	<title>Ituom</title>
</head>
<body>


</head>
<body>
<!--<img id="bg" src="imagenes/fondo.png"  alt="background" /> -->


<div class="wrapper">
		<div class="nav">
			<a href="/"><div class="icon"></div></a>
			
			<div class="nav_menu"><p class="bold link"><a href="bolsatrabajo.html" title="Ingresa a nuestra bolsa de trabajo"><a href="http://www.proyectosarcadius.com.ar/"><img class="fblogo" src="imagenes/perfil.png"></a></p></div>
			<div class="nav_menu"><p class="bold link"><a href="calendario.html" title="Enterate de nuestras actividades" ><img class="" src="imagenes/mensajes.png"></a></p></div>
			<div class="nav_menu"><p class="bold link"><a href="proyectos.html" title="Enterate de nuestros proyectos"><a href="http://www.proyectosarcadius.com.ar/"><img class="" src="imagenes/configurar.png"></a></a></p></div>
			<div class="nav_menu"><p class="bold link"><a href="press.html" title="Ingresa tus datos e imprime nuestro formulario de Inscripción"><a href="http://www.proyectosarcadius.com.ar/"><img class="" src="imagenes/log.png"></a></p></div>
			

			
		</div>


                        
        <div style="overflow:hidden">

            <div id="page">
            <div id="container">


	<h1><a href="http://www.proyectosarcadius.com.ar/red08-08/">Red Social Educativa</a></h1>
			
<div id="responsive-menu">
	<div id="responsive-menu-title">
		<a href="http://www.proyectosarcadius.com.ar"><img src="imagenes/logo-it.png" class="RMImage" alt="" title="" /></a>
		<a href="http://www.proyectosarcadius.com.ar "></a>
	</div>
	<div class="menu-mainmenu-container">
		<ul id="menu-mainmenu" class="responsive-menu">
			<li id="menu-lista" class="menu-item ">
				<a href="http://www.proyectosarcadius.com.ar">inicio</a>
			</li>
            <li id="menu-lista" class="menu-item ">
           	     <a href="http://www.proyectosarcadius.com.ar/biblioteca.html">Biblioteca</a>
            </li>
            <li id="menu-lista" class="menu-item ">
            	<a href="http://www.proyectosarcadius.com.ar/bolsatrabajo.html">Bolsa de Trabajo</a>
            </li>
            <li id="menu-lista" class="menu-item ">
            	<a href="http://www.proyectosarcadius.com.ar/chat.html">Chat</a>
            </li>
            <li id="menu-lista" class="menu-item ">
             	<a href="http://www.proyectosarcadius.com.ar/foros.html">Foros</a>
            </li>
            <li id="menu-lista" class="menu-item ">
            	<a href="http://www.proyectosarcadius.com.ar/grupos.html">Grupos</a>
            </li>
            <li id="menu-lista" class="menu-item ">
            	<a href="http://www.proyectosarcadius.com.ar/nube.html">Nube</a>
            </li>
            <li id="menu-lista" class="menu-item ">
            	<a href="http://www.proyectosarcadius.com.ar/noticias.html">Noticias</a>
            </li>
            <li id="menu-lista" class="menu-item ">
            	<a href="http://www.proyectosarcadius.com.ar/proyectos.html">Proyectos</a>
            </li>
         </ul>
     </div>
 
       <form action="http://www.proyectosarcadius.com.ar" id="responsiveSearch" method="get" role="search">

            <input type="text" name="s" value="" placeholder="Buscar" id="responsiveSearchInput">

       </form>
   </div>
 
  <div id="click-menu">
            <div class="threeLines" id="RM3Lines">       
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
  </div>

<body>
	<html>

	<style>

	#click-menu {

		display: none;
		font-size: 24px;
		line-height: 15px;
		color: #FFFFFF}

	#click-menu .threeLines{

		width: 33px;
		height: 33px;
		margin: auto}

		#click-menu .threeLines .line {
			height: 5px;
			margin-bottom: 6px;
			background: #FFFFFF;
			width: 100%}

			@media only screen and ( min-width : 0px ) and ( max-width : 2000px ){

				#click-menu{display: block}

				#access{display: none !important}
				#responsive-menu .responsive-menu li li .appendLink,#responsive-menu .responsive-menu li li li{display: none}}
				#site-container{position: relative;left: 0px}


		#responsive-menu{position: fixed;overflow-y: auto;bottom: 0px;width: 25%;top: 0px;left: -25%;background: #4C5157;z-index: 9999;box-shadow: 0px 1px 8px #333333;font-size: 18px;max-width: 999px;display: none;min-width: 240px}#responsive-menu .appendLink{right: 0px;position: absolute;border: 1px solid #3C3C3C;padding: 12px 10px;color: #FFFFFF;background: #4C5157;height: 20px;line-height: 20px;border-right: 0px}#responsive-menu .appendLink:hover{cursor: pointer;background: #c4c4b6;color: #00c1b2}#responsive-menu .responsive-menu, #responsive-menu div, #responsive-menu .responsive-menu li,#responsive-menu{text-align: left}#responsive-menu .RMImage{vertical-align: middle;margin-right: 10px;display: inline-block}#responsive-menu,#responsive-menu input{}#responsive-menu #responsive-menu-title{width: 95%;font-size: 14px;padding: 20px 0px 20px 5%;margin-left: 0px;background: #c4c4b6}#responsive-menu #responsive-menu-title,#responsive-menu #responsive-menu-title a{color: #FFFFFF;text-decoration: none;white-space: pre;overflow: hidden}#responsive-menu #responsive-menu-title a:hover{color: #FFFFFF;text-decoration: none}#responsive-menu .appendLink,#responsive-menu .responsive-menu li a,#responsive-menu #responsive-menu-title a{transition: 1s all;-webkit-transition: 1s all;-moz-transition: 1s all;-o-transition: 1s all}#responsive-menu .responsive-menu{float: left;width: 100%;list-style-type: none;margin: 0px}

</style>



<div id="main">
        <h1><?php echo $titulo ; ?></h1>
        <!-- inicio del desarrollo -->
        <table class="panel">
                <tr>
                    
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Descripción</th>
                    
                    <th colspan="2"><a href="form-alta-usuario.php"><img src="imagenes/agregar.png" title="Agregar usuario"><a></th>
                </tr>
                <?php
                    //INICIO DE MUESTREO
                    while ($fila=mysqli_fetch_array($res)){                     
                ?>
                <tr>
                    <td><img src="imagenes/<?php echo $fila['usu_foto'] ?>" width="90" heigth="120"/></td>
                    <td><?php echo $fila['nombre'] ?></td>
                    <td><?php echo $fila['apellido'] ?></td>
                    <td><?php echo $fila['descripcion'] ?></td>
                    
                    <td><a href="form-editar-usuario.php?id_categoria=<?php echo $fila['id_categoria'] ?>"><img src="imagenes/editar.png" alt="Editar" title="Editar usuario"></a></td>
                    <td><a href="form-borrar-usuario.php?id_categoria=<?php echo $fila['id_categoria'] ?>"><img src="imagenes/borrar.png" alt="Borrar" title="Eliminar usuario"></a></td>
                
                </tr>
                <?php
                    } //FIN DE MUESTREO
                    mysqli_close($link);
                ?>
                <tr>
                    <td class="pie" colspan="6"> Se han encontrado <?php echo $cant ?> registros.</td>
                </tr>
        </table>
        
        
        
    </div>
<h1>BIENVENIDO</h1>
  <a href="logout.php">Cerrar Sesión</a>
