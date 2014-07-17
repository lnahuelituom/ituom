<?php
 
if( !isset($_FILES['archivo']) ){
  echo 'Ha habido un error, tienes que elegir un archivo<br/>';
  echo '<a href="index.html">Subir archivo</a>';
}else{
 
  $nombre = $_FILES['archivo']['name'];
  $nombre_tmp = $_FILES['archivo']['tmp_name'];
  $tipo = $_FILES['archivo']['type'];
  $tamano = $_FILES['archivo']['size'];
 
  $ext_permitidas = array('jpg','jpeg','gif','png');
  $partes_nombre = explode('.', $nombre);
  $extension = end( $partes_nombre );
  $ext_correcta = in_array($extension, $ext_permitidas);
 
  $tipo_correcto = preg_match('/^image\/(pjpeg|jpeg|gif|png)$/', $tipo);
 
  $limite = 500 * 1024;
 
  if( $ext_correcta && $tipo_correcto && $tamano <= $limite ){
    if( $_FILES['archivo']['error'] > 0 ){
      echo 'Error: ' . $_FILES['archivo']['error'] . '<br/>';
    }else{
      echo 'Nombre: ' . $nombre . '<br/>';
      echo 'Tipo: ' . $tipo . '<br/>';
      echo 'Tamaño: ' . ($tamano / 1024) . ' Kb<br/>';
      echo 'Guardado en: ' . $nombre_tmp;
 
      if( file_exists( 'subidas/'.$nombre) ){
        echo '<br/>El archivo ya existe: ' . $nombre;
      }else{
        move_uploaded_file($nombre_tmp,
          "subidas/" . $nombre);
 
        echo "<br/>Guardado en: " . "subidas/" . $nombre;
      }
    }
  }else{
    echo 'Archivo inválido';
  }
}
- See more at: http://www.enricflorit.com/como-subir-archivos-al-servidor-con-php/#sthash.7qS6CuPz.dpuf
?>