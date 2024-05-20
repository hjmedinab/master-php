<?php

/**
 * Variables locales: Se define dentro de una función y no puede ser usada fuera de la función, solo estan disponibles dentro 
 * de la misma, a no ser que se retorne
 * 
 * variabales globales: Son las que se declaran fuera de una función y estan disponibles fuera
 * y dentro de las funciones
 */

//Globales
 $frase = 'Hola mundo en php através de variable global';

 function holamundo(){
    global $frase;
    echo "<h1>$frase</h1>";
 };

 holamundo();

 //Funciones variables

 function buenosDias(){
    return 'Hola buenos días';
 };

 function buenasTardes(){
    return 'Hey! que tal ha ido la comida';
 };

 function buenasNoches(){
    return 'Te vas a dormir ya? Buenas noches';
 };

 $horario = "buenasNoches";

 echo $horario();

 $concatenar = "Dias";
 
 $miFuncion = "buenos".$concatenar;

 echo $miFuncion();
