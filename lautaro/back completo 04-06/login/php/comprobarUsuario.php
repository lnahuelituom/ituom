<?php

include("ConectarBaseDatosService.php"); // Incluimos el archivo conexion, ya que haremos una peticion a la BD
ConectarBaseDatosService::connect();

@$nombre=$_POST['txtNombre']; //Guardamos el nombre que viene dentro de las cajas de texto
@$pwd=$_POST['txtContra']; //Guardamos la contraseña que viene dentro de la caja de texto

if ( $nombre && $pwd){ //Validamos que esten llenas las 2 cajas de texto.

             $query_usuarios = ConectarBaseDatosService::querySql('Select * from `usuarios` where `nombre` = "'.$nombre.'" AND `contra` = "'.$pwd.'"');

    while($row_usuarios = mysql_fetch_array($query_usuarios)){

        /*
                $consulta=mysql_query("Select * from usuarios where nombre=".$nombre."' AND contra = '".$pwd."'");
            // pedimos a la BD que seleccione el nombre de usuario y la contraseña de lo que hemos enviado
            $filas=mysql_fetch_assoc($consulta);
            /* la consulta que le hacemos a la BD la guardamos en una funcion llamada mysql_fetch_assoc que nos brinda PHP
                y nos ayuda a guardar los registros de la BD a su vez la guardamos en la variable $fila
              */
    $nombreBD=$row_usuarios['nombre'];
    /* Guardamos en nombre de la BD en la variable $nombreBD, es muy importante que lo que esta dentro de los corchetes
        sea igual a como se llama el campo en la BD
     * */
    $pwdBD=$row_usuarios['contra'];
    }
   /*Lo que hicimos en a anterior variable lo hacemos en esta tambien
    * */

    if ($nombre == $nombreBD && $pwd == $pwdBD){
        // COmprobamos que lo que hemos extraido de la BD y lo que hemos enviado en el formulario coincidan

        session_start(); //iniciamos una sesion
        @$_session['nombre'] = $nombreBD;//Guardamos el nombre de la BD en la variable de sesion
        @$_session['pwd'] = $pwdBD; // Guardamos el password de la BD en la variable de sesion

        echo "
        <html>
            <head>
                <meta http-equiv='REFRESH' content='0; url=perfil.php'>
                <script>
                    alert('Bienvenid@ $nombreBD');
                </script>
            </head>
        </html>";
        //Redireccionamos el perfil
    }else{

        echo "
        <html>
            <head>
                <meta http-equiv='REFRESH' content='0; url=../'>
                <script>
                    alert('Usuario Invalido. Registrese');
                </script>
            </head>
        </html>";
        //Si no existe usuario lo mandamos a la pagina principal
    }


}else{
    echo "
        <html>
            <head>
                <meta http-equiv='REFRESH' content='0; url=../login.html'>
                <script>
                    alert('LLena todo el formulario');
                </script>
            </head>
        </html>";

}
