<?php
/*session_start() --> es la funcion que nos ofrece PHP , para poder iniciar una sesion.*/
session_start();
/*Como te diste cuenta , nada mas agregamos la funcion session_start() y la variable de sesion $_SESSION['nombre'] */
echo "Hola ".$_SESSION['nombre']." estas en la pagina 3";
echo "<br/><br/><a href='paginaUno.php'>Ir a pagina 1</a>";
?>