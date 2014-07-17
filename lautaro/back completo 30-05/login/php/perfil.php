<?php
include("ConectarBaseDatosService.php");
session_start();
$nombreUsuario= @$_session['nombre'];
/*Guardamos en la variable $nombreUsuari lo que viene dentro de la variable sesion, en este caso nombre de usuario*/
$contraUsuario= @$_session['contra']; // lo mismo se hace con esta variable

if (@nombreBD && @pwdBD){
?>
<!--Vamos a construir nuestro perfil-->
<!DOCTYPE html>
<html>
    <head>
        <meta httml-equiv='Content-type' content='text/html; charset=UTF-8'>
        <title>Perfil de: <?php echo $nombreUsuario; ?></title>
    </head>
    <body>
        <div id='padre'>
            <div class='datos'>
                <b>Hola:</b><a href='perfil.php'><?php echo $nombreUsuario;?></a>
                <br/><br/>
                <a href='cerrarSesion.php'>Cerrar Sesion<font color='red'>[X]</font></a>
            </div>

        </div>
    </body>
</html>
<!--Con las lineas anteriores, construimos una pequeña parte de nuestro perfil-->
<?php
}else{
    echo "
        <html>
            <head>
                <meta http-equiv='REFRESH' content='0; url=../login.html'>
                <script>
                    alert('No has iniciado sesion');
                </script>
            </head>
        </html>";

}



?>

