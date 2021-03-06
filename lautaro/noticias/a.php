﻿<?php
include("conexion.php"); // Incluimos nuestro archivo de conexión con la base de datos 

if(isset($_GET['noticia']))
{
    if(!empty($_GET['noticia'])) // Si el valor de "noticia" no es NULL, continua con el proceso 
    {
        $id_noticia = (int) mysql_real_escape_string($_GET['noticia']);
        $query_noticias = mysql_query("SELECT titulo, fecha, texto FROM ".$db_table."  WHERE id = '".$id_noticia."' LIMIT 1 "); // Ejecutamos la consulta
        if(mysql_num_rows($query_noticias) > 0) // Si existe la noticia, la muestra 
        {
            while($columna = mysql_fetch_assoc($query_noticias)) // Realizamos un bucle que muestre todas las noticias, utilizando while. 
            {
                echo ' 
                <table> 
                    <tr> 
                        <td>'.$columna['titulo'].'</td> 
                        <td>'.$columna['fecha'].'</td> 
                    </tr> 
                    <tr> 
                        <td colspan="2">'.$columna['texto'].'</td> 
                    </tr> 
                    <tr> 
                        <td><a href="./">Atrás</a></td> 
                    </tr> 
                </table> 
                ';
            }
        }
        else
        {
            echo 'La noticia que solicitas, no existe.'; // Si no, muestra un error 
        }
    }
    else
    {
        echo 'Debes seleccionar una noticia.'; // Si GET no recibe ningún valor, muestra un error 
    }
}
else
{
    $query_noticias = mysql_query("SELECT * FROM ".$db_table.""); // Ejecutamos la consulta
    $limite = 100; // Número de carácteres a mostrar antes de el "Leer más" 
    while($columna = mysql_fetch_assoc($query_noticias)) // Realizamos un bucle que muestre todas las noticias, utilizando while. 
    {
        echo ' 
        <table> 
            <tr> 
                <td>'.$columna['titulo'].'</td> 
                <td>'.$columna['fecha'].'</td> 
            </tr> 
            <tr> 
                <td colspan="2">'.substr($columna['texto'], 0, $limite).' [...]</td> <!-- Utilizamos la función substr para mostrar un determinado número de carácteres. Ver Ver http://www.php.net/manual/es/function.substr.php --> 
            </tr> 
            <tr> 
                <td colspan="2"><a href="?noticia='.$columna['id'].'">Leer más</a></td> <!-- Incluimos un enlace para leer la noticia entera --> 
            </tr> 
        </table> 
        ';
    }
}
?>