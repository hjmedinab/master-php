<?php


/**
 * Crear un Script que tenga 4 variables, una tipo array,
 * otra de tipo String, otra int y otra boolean y que imprima un mensaje segun el tipo de variable
 */

 $v1 = array (1,2,3,4);
 $v2 = "Hola Mundo";
 $v3 = 203;
 $v4 = false;

 echo("La variable es un :".gettype($v1));
 echo "<br>";
 echo("La variable es un :".gettype($v2));
 echo "<br>";
 echo("La variable es un :".gettype($v3));
 echo "<br>";
 echo("La variable es un :".gettype($v4));
