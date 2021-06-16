<?php

// Abrir archivo
// $archivo = fopen("fichero_texto.txt", "a+");

// Leer contenido
// while(!feof($archivo)) {
//     $contenido = fgets($archivo);
//     echo $contenido."<br/>";
// }

//  Escribir
// fwrite($archivo, "Text testing");

// Cerrar archivo
// fclose($archivo);

// // Copiar
// copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");

// Renombrar
// rename('fichero_copiado.txt', 'fichero_copiadoB.txt');

// Eliminar
// unlink('fichero_copiadoB.txt') or die("Error al borrar");


if(file_exists("fichero_texto.txt")) {
    echo "El archivo existe.";
} else {
    echo "El archivo no existe.";
}