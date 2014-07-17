<?php
/*session_start() --> es la funcion que nos ofrece PHP , para poder iniciar una sesion.
session_destroy(); -- PARA DESTRUIR UNA SESION*/
session_start();
/*$_SESSION['nombre'] --> es un vector en el que indicamos que vamos a iniciar una variable de sesion ,
dentro de los corchetes ,le indicamos el identificador, en esta ocasion nombre,
 despues del simbolo de igual le indicamos que llevara esa sesion , en mi caso le puse mi nombre. */
$_SESSION['nombre']="Lautaro";

echo"el nombre de tu sesion es: ".$_SESSION['nombre'];
echo "<br/><br/><a href='paginaDos.php'>Ir a pagina 2</a>";

?>