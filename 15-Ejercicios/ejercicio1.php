<?php

/**
 * Ejercicio 01: Hacer un array con 8 números para recorrerlo mostrarlo / ordenarlo y mostrarlo / mostrar su longitud / buscar en el array algun elemento
 */

 $ejercicios = array (1,2,15,25,30,21,5,12);

 function mostrar_resultado($ejercicios){
        $resultado = "";
        foreach ($ejercicios as $ejercicio){
            $resultado .=  $ejercicio."<br>";
        }
    return $resultado;
};


 /** ARRAY RECORRIDO */
echo mostrar_resultado($ejercicios);
echo "<br>";


/**ARRAY ORDENADO */
asort($ejercicios);
echo mostrar_resultado($ejercicios);
echo "<br>";


/**Lorngitud */
echo sizeof($ejercicios);
echo '<br>';

/**Buscar algun elemento */
echo array_search(15,$ejercicios);
