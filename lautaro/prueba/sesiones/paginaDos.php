<?php
/*session_start() --> es la funcion que nos ofrece PHP , para poder iniciar una sesion.*/
session_start();
/*Como te diste cuenta , nada mas agregamos la funcion session_start() y la variable de sesion $_SESSION['nombre'] */
echo "Sigue viva tu sesion : ".$_SESSION['nombre'];
echo "<br/><br/><a href='paginaTres.php'>Ir a pagina 3</a>";

?>