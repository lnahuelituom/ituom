<?php

/* include-->php manda a llamar a un archivo , en este caso conexion.php , pa realizar consultas a la Base de Datos (En este caso insertar registros). */
include "ConectarBaseDatosService.php"; // Incluimos el archivo conexion, ya que haremos una peticion a la BD
ConectarBaseDatosService::connect();
/*  $_POST[' ']--->es un vector donde se guarda lo que viene de la caja de texto */
$idUsuario="";
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$contra=$_POST['contra'];

/*Indicamos que si es Verdad que las Cajas de Texto han sido llenadas que pase hacer lo siguiente ,
 con el AND Le indico que se tienen que llenar todas las cajas de lo contrario se pasara al segundo else.*/
if ($nombre and $paterno AND $materno AND $contra){



    $query_usuarios = ConectarBaseDatosService::querySql('INSERT INTO usuarios (`idUsuario`,`contra`,`nombre`,`materno`,`paterno`) VALUES("'.$idUsuario.'",
	"'.$contra.'",
	"'.$nombre.'",
	"'.$materno.'",
	"'.$paterno.'")');


    /* Vamos a comprobar si es que la insercion ha sido exitosa */
    if ($query_usuarios){
        echo "
        <html>
            <head>
                <meta http-equiv='REFRESH' content='0; url=../index.php'>
                <script type='text/javascript'>
                    alert('Registrado con exito!!!');
                </script>
            </head>
        </html>";
    }
    else{
      echo"
         <html>
            <head>
                <meta http-equiv='REFRESH' content='0; url=../'>
                <script type='text/javascript'>
                    alert('Ha fallado tu registro :(!!!');
                </script>
            </head>
        </html>";
    }
}
else{
    echo"
         <html>
            <head>
                <meta http-equiv='REFRESH' content='0; url=../'>
                <script type='text/javascript'>
                    alert('Llena todo el formulario ');
                </script>
            </head>
        </html>";
}

?>