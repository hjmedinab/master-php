<?php

/**
 * Ejercicio 02: Escribir un programa con PHP que añada valores a un array mientras que su longitud sea menor a 120 y luego mostrarlo por pantalla
 */


 $ejercicio02 = array();


 for ($i=0; $i <10 ; $i++) { 
    array_push($ejercicio02,$i); 
 };

 echo $ejercicio02[9];