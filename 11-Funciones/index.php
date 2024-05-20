<?php


/**
 * FUNCIONES: 
 * Una función es un conjunto de instrucción agrupadas bajo un nombre concreto
 * y que pueden reutilizarse invocando a la función
 */


/*

 function muestraNombres(){
    echo "Jimmy Medina";
    echo "Jimmy Medina";
    echo "Jimmy Medina";
    echo "Jimmy Medina";
    echo "Jimmy Medina";
    echo "Jimmy Medina";
 }


 muestraNombres();


 function tablaMultiplicar($numero){
    
    echo  "<h1>Esta es la tabla de $numero</h1>";
    for ($i=0; $i <= 10; $i++) { 
       
        echo "El número $numero x $i es : ".($numero * $i).'<br>';

    }
 }

for ($i=0; $i <= 10 ; $i++) { 
    tablaMultiplicar($i);
}
 */


//Ejemplo Calculadora

function calculadora($numero1,$numero2){
    //Conjunto de instrucciones a ejecutar
    echo"Suma: ".($numero1+$numero2).'<br>';
    echo"Resta: ".($numero1-$numero2).'<br>';
    echo"Multiplicacion ".($numero1*$numero2).'<br>';
    echo"Division: ".($numero1/$numero2).'<br>';
};

calculadora(11,23);


function devuelveNombre($nombre){
    echo "Mi nombre es $nombre";
};


echo devuelveNombre("Jimmy");

