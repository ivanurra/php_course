<?php

// Abrir archivo
$archivo = fopen("fichero_texto.txt", "a+");

// Leer contenido
while(!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido."<br/>";
}

//  Escribir
fwrite($archivo, "Text testing");

// Cerrar archivo
fclose($archivo);