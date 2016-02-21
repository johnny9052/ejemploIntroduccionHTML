<?php

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $carpeta = $_REQUEST["nombreCarpeta"];
    //obtenemos el archivo a subir
    $file = $_FILES['archivo']['name'];
    //comprobamos si existe un directorio para subir el archivo
    //si no es así, lo creamos 
    if (!is_dir("../recursos/imagenes/" . $carpeta . "/")) {
        mkdir("../recursos/imagenes/" . $carpeta . "/");
    }

    //comprobamos si el archivo ha subido
    if ($file && move_uploaded_file($_FILES['archivo']['tmp_name'], "../recursos/imagenes/" . $carpeta . "/" . $file)) {
        //sleep(3);//retrasamos la petición 3 segundos
        echo $file; //devolvemos el nombre del archivo para pintar la imagen
    }
} else {
    throw new Exception("Error Processing Request", 1);
}