<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif") {

    if (!is_dir('images')) {
        mkdir('images', 0777);
    }

    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);

    header("Refresh: %; URL=index.php");
    echo "Imagen subida correctamente";

    } else {
        header("Refresh: %; URL=index.php");
        echo "Formato de archivo incorrecto. Subir un formato válido";
}