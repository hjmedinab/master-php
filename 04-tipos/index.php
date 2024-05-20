<?php


/*
TIPOS DE DATOS:
Entero (int/integer) = 99
coma flotante o decimales (float/double)=3.45
Cadenas (String) = 'Hola soy un String'
Boleano (bool) = true o false - 1 o 0
null
Array (colección de datos)
Objetos (conjunto de datos y funciones independientes)
*/

$numero = 100;
$decimal = 3.45;
$cadena = 'Hola';
$boleano = true;

echo gettype($numero);
echo ('<br>');
echo gettype($decimal);
echo ('<br>');
echo gettype($cadena);
echo ('<br>');
echo gettype($boleano);


//Debugear
$mi_nombre[] = 'Jimmy Medina';
$mi_nombre[] = 'Jimmy Medina Baca';
var_dump($mi_nombre);
