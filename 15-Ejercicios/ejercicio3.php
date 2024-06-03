<?php

/**
 * Ejercicio 03. Programa que compruebe si una variable esta vacía y si esta vacía 
 * rellenarla con texto en minuscula y mostrarlo en mayusculas y negrita
 */


 $texto = "1";


 if (empty($texto)) {
    $texto = "Se relleno la variable con este texto";
    $textoMayusc = strtoupper($texto);
    echo "<b>".$textoMayusc."<b>";
 }else{
    echo "La variable contiene el siguiente texto $texto";
 }