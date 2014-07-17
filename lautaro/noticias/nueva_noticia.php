<?php
include("conexion.php"); // Incluimos nuestro archivo de conexión con la base de datos 

if(isset($_POST['añadir'])) // Si el boton de "añadir" fué presionado ejecuta el resto del código 
{
    $titulo = mysql_real_escape_string($_POST['titulo']); // Recibimos el valor del <input name="titulo"... 
    $texto = mysql_real_escape_string($_POST['texto']);   // Recibimos el valor de la <textarea name="titulo"... 
    if(!empty($titulo) && !empty($texto)) // Comprobamos que los valores recibidos no son NULL 
    {
        $query_NuevaNoticia = mysql_query("INSERT INTO ".$db_table." SET titulo = '".$titulo."', fecha = NOW(),texto = '".$texto."'"); // Realizamos una consulta a la base de datos para insertar la nueva notica 

        if($query_NuevaNoticia)
        {
            echo 'La noticia se añadió correctamente a la base de datos.'; // Si el registro (la noticia) se insertó en la base de datos, mostramos este mensaje 
        }
        else
        {
            echo 'La noticia no pudo ser insertada en la base de datos'; // Si el registro (la noticia) no se insertó en la base de datos, mostramos este mensaje 
        }
    }
    else
    {
        echo 'Los campos no pueden estar vacios. Rellénalos para insertar la noticia en la base de datos'; // Si los valores recibidos por los campos de texto están vacios, no inserta el registro y muestra este mensaje 
    }
}

?>

<form action="nueva_noticia.php" method="post"> <!-- Creamos el formulario, utilizando la etiqueta form, cuyo atributo action="" indicará donde se procesará el formulario -->
    Título de la noticia: <input name="titulo" type="text" /> <br />
    Texto de la noticia:  <textarea name="texto"></textarea> <br />
    <input type="submit" name="añadir" value="Añadir noticia" />
</form>