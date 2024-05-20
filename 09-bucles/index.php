<?php


//Bucle While
#Estructura que itera o repite la ejecución de una serie de instrucciones tntas veces como sea necesaria

$a = 0;

echo (1/1);

while ($a <= 5) {
    echo $a.'<br>';
    $a++;
}



//Bucle doWhile

$edad = 18;
$contador = 1;

do {
    echo "tienes acceso al local privado $contador <br>";
    $contador++;
} while ($edad>=18 && $contador<=10);


//Bucle for

echo "<hr>";

for ($i=0; $i <= 10 ; $i++) { 
    echo "va actualizando a $i <br>";
    
}