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

    include ("conexion.php");
    session_start();
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
			<div class="nav_menu"><p class="bold link"><a href="bolsatrabajo.html" title="Ingresa a nuestra bolsa de trabajo">Bolsa de Trabajo</a></p></div>
			<div class="nav_menu"><p class="bold link"><a href="proyectos.html" title="Enterate de nuestros proyectos">Proyectos de Alumnos</a></p></div>
			<div class="nav_menu"><p class="bold link"><a href="press.html" title="Ingresa tus datos e imprime nuestro formulario de Inscripción">Pre-Inscripciones</a></p></div>
			<div class="nav_menu"><p class="bold link"><a href="calendario.html" title="Enterate de nuestras actividades" >Calendario</a></p></div>
			
		</div>


                        
        <div style="overflow:hidden">

            <div id="page">
            <div id="container">


	<h1><a href="http://www.proyectosarcadius.com.ar/red08-08/">Red Social Educativa</a></h1>
			
					<div class="imagen">
	
				<img src="imagenes/iniciow.png" alt="pagina de inicio" usemap="#primermapa"/>
<map name="primermapa" >
<?php
// Verifico si el usuario no está logueado
if(!isset($_SESSION['id_usuario'])){ ?>
<area alt="loguearse" shape="circle" coords="570,120,50" title="Inicia sesión" href="javascript:openVentana2();"> <!--  1er coordenada del margen derecho de la pagina hasta el centro del circulo, 2da coordenada desde el margen superior de la pagina hasta el centro, 3era coordenada radio del circulo-->
<?php
}
else
{
	// El usuario ya está logueado, lo redirecciono a su perfil
	?>
	<area alt="loguearse" shape="circle" coords="570,120,50" title="Inicia sesión" href="perfil5.php"> 
	<?php
	
}
?>
<area alt="facebook" shape="circle" coords="550,260,50" title="Visita nuestro facebook"  href="https://www.facebook.com/pages/CFP-401-Tres-de-Febrero/114238728605316?fref=ts">
<area alt="youtube" shape="circle" coords="420,370,50" title="Visita nuestro canal de Youtube" href="https://www.youtube.com/user/wesem/videos">
<area alt="registrarse" shape="circle" coords="180,220,50" title="Ingresa tus datos"  href="javascript:openVentana1();">

</map></div>



	
				
		</div>
		</div>	


		

		<div class="imagen">

			<div class="ventana1">
		
			<div class="form1">
				<div class="cerrar"><a href="javascript:closeVentana1();">Cerrar X</a></div>
				
					<form action="registro.php" method="post" class="registro" >
		<div><label>Registrate gratuitamente!</label></div>
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


<div></br><input type="submit" id="buttom1" value="Unite Ahora"></div>
</form>
			</div>

		</div>

		<div class="ventana2">
		
			<div class="form2">
				<div class="cerrar"><a href="javascript:closeVentana2();">Cerrar X</a></div>
				
					<form action="login.php" method="post" class="registro" >
		<div><label>Iniciar Sesion</label></div>
	</br>
	<label>E-mail: </label>
<div><input type="text" placeholder= "Introduzca su mail" name="mail" id="mail" class="camposU" ></div>
</br> <label>Contraseña: </label>
<div><input type="password" placeholder= "Ingrese su contraseña" name="pass" id="pass" class="camposU"  ></div>
</br><div><input type="radio" name="sesion" id="sesion"> No cerrar sesión </div>

<div></br><input type="submit" id="buttom2" value="Iniciar Sesion"></div>
</br>
<label><a href="javascript:openVentana31();"> ¿No puedes acceder a tu cuenta? </a></label>
</form>
			</div>



		</div>


			<div class="ventana31">


	<div class="form31">



				<div class="cerrar"><a href="javascript:closeVentana31();">Cerrar X</a></div>

					<label>¿Por qué tienes problemas para iniciar sesión? </label>

<div><input type="radio" name="sesion1" onclick="openVentana3();"> He olvidado mi contraseña. </div>
<div><input type="radio" name="sesion2" onclick="openVentana4();"> Sé cual es mi contraseña, pero no puedo iniciar sesión. </div>
<div><input type="radio" name="sesion3" > Creo que alguien esta usando mi cuenta </div>



	</div>

	</div>	
			
	
<div id="footer">

	  © 2014. | <a href= "javascript:openVentana4();", scrollbars="yes">Términos y Condiciones </a>| <a href= "desarrolladores.html" title="Enterate quienes estamos realizando esta red social">Desarrolladores</a>  | <a href= "ayuda.html"> Centro de ayuda </a>

		</div>	
  
	</div>
            </div>
                    
                </div>
            </div>
            
    	</div><!-- END Footer -->
        
	
 <div class="ventana4">

                <div class="form4">
                <div class="cerrar"><a href="javascript:closeVentana4();">Cerrar X</a></div>

               <label>Por aqui va la chorrada extensa de terminos y condiciones</label> 
             </div>
            </div>
	</div>
            </div>
                    
                </div>
            </div>
            
    	</div><!-- END Footer -->
        
	

	
<script type="text/javascript">
		function openVentana1(){
			$(".ventana1").slideDown("fast");
		}
		function closeVentana1(){
			$(".ventana1").slideUp("fast");
		}

		function openVentana3(){
			$(".ventana3").slideDown("fast");
		}
		function closeVentana3(){
			$(".ventana3").slideUp("fast");
		}

		function openVentana2(){
			$(".ventana2").slideDown("fast");
		}
		function closeVentana2(){
			$(".ventana2").slideUp("fast");
		}

		function openVentana4(){
			$(".ventana4").slideDown("fast");
		}
		function closeVentana4(){
			$(".ventana4").slideUp("fast");
		}

		function openVentana31(){
			$(".ventana31").slideDown("fast");
		}
		function closeVentana31(){
			$(".ventana31").slideUp("fast");
		}
	</script>

<body>
	<html>
