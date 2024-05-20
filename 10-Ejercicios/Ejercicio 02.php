<?php


/**
 * Escribir en php un script que nos muestre todos los números pares por pantalla
 * del 01 al 100
 */



for ($i=0; $i <= 100 ; $i++) { 
    

    if ($i%2 == 0) {
        echo $i.'<br>';
    }

}