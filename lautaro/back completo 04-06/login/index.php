<!DOCTYPE html>
<html>
    <head>
         <link rel='stylesheet' href='css/estilos.css' media= 'all'/>
         <meta http-equiv='Content-Type' content='text/html ;charset=UTF-8'>
        <script src='js/jquery.js' type='text/javascript'></script>
        <script type='text/javascript'>
            $(document).ready(function(){ //forma de inicar, para programar jquery
                $('#btnUno').click(function(){//evento que se llevara acabo cuando demos click a registrarse
                    $('.frmRegistrar').slideDown(1000);
                    //efecto que llevara acabocuando le demos click al boton registrarse
                    $('.frmLogin').slideUp(1000);
                    return false; //se utiliza para que en la barra de navegacion, no aparezca nada

                });
                $('#btnDos').click(function(){//evento que se llevara acabo cuando demos click a registrarse
                    $('.frmLogin').slideDown(1000);
                    //efecto que llevara acabocuando le demos click al boton registrarse
                    $('.frmRegistrar').slideUp(1000);
                    return false; //se utiliza para que en la barra de navegacion, no aparezca nada

                });
            });
        </script>
            <title>Login</title>
    </head>

    <body>
       <!-- action : la pagina a donde vamos a enviar los datos  -->
	   <!-- method : metodo, en este caso POST ,(POST,GET y REQUEST). -->
       <div id='padre'><!--Inicia contenedor Padre-->
          <div id='hijo'>    <!--Inicia contenedor hijo-->
              <!--AGREGAMOS UNA CABECERA, DONDE IRA EL LOGO Y NOMBRE-->
              <div class='cabecera'>
                  <img src='img/logo.png'/>
                  <h1>Red Ituom</h1>
              </div>
              <!--Termina cabecera-->
              <!--AGREGAMOS BARRA DE BOTONES-->
              <div class='barraBotones'>
                  <a href='#' id='btnUno'>Registrarse</a>
                  <a href='#' id='btnDos'>Inicar Sesion</a>
              </div>
              <!--FINALIZA BARRA DE BOTONES-->
                 <div class='frmRegistrar'><!--Inicia contenedor que tendra nuestro formulario registro-->
                         <form action='php/recibir.php' method='POST'>
                              <label>Nombre:</label>
                               <input type='text' name='nombre' placeholder='Nombre' autofocus='on' required='on'/>
                               <br/><br/>
                                <label>Paterno:</label>
                                <input type='text' name='paterno' placeholder='Paterno' required='on'/>
                                <br/><br/>
                                <label>Materno:</label>
                                <input type='text' name='materno' placeholder='Materno'  required='on'/>
                                <br/><br/>
                                <label>Contraseña:</label>
                                <input type='password'  name='contra' placeholder='Contraseña' required='on'/>
                                <br/><br/>
                                <input type='submit' value='Registrar'>
                         </form>
                 </div><!--FINALIZA NUESRO CONTENEDOR REGISTRO-->
              <!--INICIA FORMULARIO LOGIN-->
                 <div class='frmLogin'>
                      <form action='php/comprobarUsuario.php' method='POST'>
                          <label>Nombre: </label>
                          <input type='text' name='txtNombre' placeholder='Nombre' required='on'>
                          <br/><br/>
                          <label>Contraseña: </label>
                          <input type='password' name='txtContra' placeholder='Contraseña' required='on'>
                          <br/><br/>
                          <input type="submit" value="Ingresar">
                      </form>

                 </div><!--FINALIZA LOGIN-->

              <footer><!--INICIA PIE DE PAGINA-->
                  <h5>  © 2014. | Términos y Condiciones | <a href= "Desarrolladores.php">Desarrolladores</a>  | Centro de ayuda
                  </h5>
              </footer><!--FINALIZA PIE DE PAGINA-->

           </div><!--FINALIZA CONTENEDOR HIJO-->
       </div>
     </body>
</html>