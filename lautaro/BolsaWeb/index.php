
<!DOCTYPE html>
<html>
    <head>
         <link rel='stylesheet' href='css/estilos.css' media= 'all'/>
         <meta http-equiv='Content-Type' content='text/html ;charset=UTF-8'>

            <title>Login</title>
    </head>

    <body>

       <!-- action : la pagina a donde vamos a enviar los datos  -->
	   <!-- method : metodo, en este caso POST ,(POST,GET y REQUEST). -->
       <div id='padre'><!--Inicia contenedor Padre-->

          <div id='hijo'>    <!--Inicia contenedor hijo-->

              <!--AGREGAMOS UNA CABECERA, DONDE IRA EL LOGO Y NOMBRE-->
              <div id="header">
              <div class='cabecera'>
                  <img src='img/logo.png'/>
                  <h1>Red Social Educativa</h1>
                  <table class="paneles" >
                      <!--     <td><h4><a href="#" title="Postulantes"></a>Postulantes</h4></td>
                           <td><h4><a href="#" title="Empleadores "></a>Empleadores</h4></td>-->
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

                      <div>
                          <form action="perfil.html" method="post" enctype="multipart/form-data">
                              <table class="paneles" >

                                   </table>
                               </form>
                           </div>
                       </div>
                   </div>
                   <!-- Comienzo del contenedor div #topcenter-->
              <div id="topcenter" >
                  <h2>Conecta, comparte ideas y descubre oportunidades.</h2>
              </div>
              <!-- Fin del contenedor div #topcenter-->

              <!--Termina cabecera-->

                 <div class='frmRegistrar'><!--Inicia contenedor que tendra nuestro formulario registro-->
                     <div>
                         <div id="left">

                             <a class="tituloFiltro"><h4>Carreras</h4></a>
                             <div id="area">

                                 <ul>

                                     <li><h4><a href= "#" title="Analista de Sistemas">Analista de Sistemas</a></h4></li>
                                     <li><h4><a href="#" title="Automatizacion">Automatizacion</a></h4></li>
                                     <li><h4><a href="#" title="Diseño Industrial">Diseño Industrial</a></h4></li>
                                     <li><h4><a href="#" title="Automatizacion">Filtro 4</a></h4></li>
                                     <li><h4><a href="#" title="Diseño Industrial">Filtro 5</a></h4></li>
                                 </ul>

                             </div>
                             <a class="tituloFiltro"><h4>Otros Filtros</h4></a>
                             <div class="" id="area">
                                 <ul>
                                     <li><h4><a href="#" title="Full-Time">Full-Time</a></h4></li>
                                     <li><h4><a href="#" title="Part-Time">Part-Time</a></h4></li>
                                     <li><h4><a href="#" title="Pasantia">Pasantia</a></h4></li>
                                     <li><h4><a href="#" title="Part-Time">Filtro 4</a></h4></li>
                                     <li><h4><a href="#" title="Pasantia">Filtro 5</a></h4></li>
                                 </ul>
                             </div>


                         </div>
                     </div>
                 </div><!--FINALIZA NUESRO CONTENEDOR REGISTRO-->
              <!--INICIA FORMULARIO LOGIN-->
                 <div class='frmLogin' >
                      <form action='' method='POST'>


                          <input type='password' name='txtContra' placeholder='Sacar -.-' required='on'>
                          					<!-- COMIENZA BUSCADOR CUERPO-->
                              <form class="searchform">
                                  <input class="searchfield" type="text" value="Buscar..." onfocus="if (this.value == 'Buscar...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Buscar...';}" />
                                  <input class="searchbutton" type="button" value="Ir" />
                              </form>
                              <!-- TERMINA BUSCADOR CUERPO-->

                          <DIV id="principal">


                             <table>
                                  <tr><td></td>

                                  </tr>
                              </table>
                              <table border=1 id="principal">
                                  <tr><td><img src="imagenes/bumeran.jpg" alt="Logo Ituom" border= "0"></td>
                                      <td><h3><A HREF="www.bumeran.com.ar/empleos/tecnico-ingeniero-electronico-para-proyectos-de-automatizacion-mta-srl-1001784316.html" TARGET="_new">Técnico / Ingeniero electrónico para Proyectos de Automatización</A></h3>
                                  </tr>
                                  <td>MTR S.A</td>
                                  <td> Full Time</td>

                              </table>
                              <table border=1 id="principal">
                                  <tr><td><img src="imagenes/bumeran.jpg" alt="Logo Ituom" border= "0"></td>
                                      <td><h3><A HREF="www.bumeran.com.ar/empleos/tecnico-ingeniero-electronico-para-proyectos-de-automatizacion-mta-srl-1001784316.html" TARGET="_new">Técnico / Ingeniero electrónico para Proyectos de Automatización</A></h3>
                                  </tr>
                                  <td>MTR S.A</td>
                                  <td> Full Time</td>

                              </table>
                              <table border=1 id="principal">
                                  <tr><td><img src="imagenes/bumeran.jpg" alt="Logo Ituom" border= "0"></td>
                                      <td><h3><A HREF="www.bumeran.com.ar/empleos/tecnico-ingeniero-electronico-para-proyectos-de-automatizacion-mta-srl-1001784316.html" TARGET="_new">Técnico / Ingeniero electrónico para Proyectos de Automatización</A></h3>
                                  </tr>
                                  <td>MTR S.A</td>
                                  <td> Full Time</td>

                              </table>

                      </form>






                 </div>

                 </div><!--FINALIZA LOGIN-->

              <footer><!--INICIA PIE DE PAGINA-->
                  <h5>  © 2014. | Términos y Condiciones | <a href= "Desarrolladores.php">Desarrolladores</a>  | Centro de ayuda
                  </h5>
              </footer><!--FINALIZA PIE DE PAGINA-->

           </div><!--FINALIZA CONTENEDOR HIJO-->
       </div>
     </body>
</html>
