<?php


//Condicionales

/** if (condicion){
instrucciones 
} else{
 instrucciones   
}

//Operadores de comparación

== IGUAL
=== IDENTICO
!= DIFERENTE
<> DIFERENTE
!== NO IDENTICO
< UTILIZA ENTRE DOS VARIABLES
> UTILIZA ENTRE DOS VARIABLES
<= MENOR IGUAL
>= MAYOR IGUAL

//Operadores logicos

&& Y AND
|| O OR
! NOT NO
AND,OR

*/

$color = 'rowsjo';

if ($color == 'rojo') {
    echo 'EL COLOR ES ROJO';
}else{
    echo 'el color no es rojito';
}


//Switch
$color1 = 'verde';

switch ($color1) {
    case 'rojo':
        echo 'Si baila es chocolatero atrevido';
        break;
    
    default:
        echo 'no es atrevido';
        break;
}


//GOTO

goto marca;
echo '<h3>Instrucción 01</h3>';
echo "<h3>Instrucción 02</h3>";
echo "<h3>Instrucción 03</h3>";

marca:
echo 'me salté 04 echos';