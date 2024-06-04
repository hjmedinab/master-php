<?php
//abrir archivo
$archivo = fopen("fichero_texto.txt","r");

// Leer contenido

while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido.'<br';
}


//Cerrar archivo
fclose($archivo);