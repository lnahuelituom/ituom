<?php 
function foldersize($path) {
    $total_size = 0;
    $files = scandir($path);

    foreach($files as $t) {
        if (is_dir($t)) { // In case of folder
            if ($t<>"." && $t<>"..") { // Exclude self and parent folder
                $size = foldersize($path . "/" . $t);
                // print("Dir - $path/$t = $size<br>\n");
                $total_size += $size;
            }
        }
        else { // In case of file
            $size = filesize($path . "/" . $t);
            // print("File - $path/$t = $size<br>\n");
            $total_size += $size;
        }   
    }
    return $total_size;
}
$status = "";
if ($_POST["action"] == "submit") {
    // obtenemos los datos del archivo 
    $tamano = $_FILES["archivo"]['size'];
    $tipo = $_FILES["archivo"]['type'];
    $archivo = $_FILES["archivo"]['name'];
    $prefijo = substr(md5(uniqid(rand())),0,6);

    if (foldersize('files') + $tamano < 2048 * 1024 * 1024) { //estabelce el tamaño de la carpeta en bytes y pasando a gb
        if ($archivo != "") {
            // guardamos el archivo a la carpeta files
            $destino =  "files/".$archivo;
            if (copy($_FILES['archivo']['tmp_name'],$destino)) {
                $status = "Archivo subido: <b>".$archivo."</b>";
            } else {
                $status = "Error al subir el archivo";
            }
        } else {
            $status = "Error al subir archivo";
        }
    } else {
        $status = "Tamaño máximo excedido";
    }
}
?> 