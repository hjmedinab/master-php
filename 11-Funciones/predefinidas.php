<?php

$nombre = "Jimmy";

//Debugear
var_dump($nombre);

//fecha
echo date('d-m-y');
echo '<br>';
echo time();


//Matematicas
echo '<br>';
echo "Raiz cuadrada de 10: ".sqrt(10);
echo '<br>';

echo "Numero aleatorio entre 10 y 40:".rand(10,40);
echo '<br>';

echo "Numero pi:".pi();
echo '<br>';

echo "Redondear:".round(7.87845, 2);


//Mis funciones generales
echo '<br>';

#Para ver el tipo de dato
gettype($nombre);
echo '<br>';

#Para comprobar si es un tipo de dato texto
if (is_string($nombre)) {
    echo "La variable nombre es un String";
    echo '<br>';
}

#Para comprobar si es un tipo de dato float
if(!is_float($nombre)){
    echo "La variable nombre no es un String";
    echo '<br>';
}

#Para comprobar si existe la variable
if(isset($nombre1)){
    echo "La variable existe";
    echo '<br>';
}else{
    echo "La variable NO existe";
    echo '<br>';
};


$micontenido = "        mi contenido con espacios         ";
#Para quitar los espacios al inicio y final de la variable
var_dump(trim($micontenido));


#Eliminar variables o indices de arrays

$year = 2023;
unset($year);
#var_dump($year);


#Comprobar Variable esta vacia, no existe o su valor es 0

$texto = "";

if (empty($texto)) {
    echo "la variable texto esta vacía";
}else{
    echo "La variable tiene contenido";
}

//Contar caracteres de un String
echo '<br>';

$cadena = "123456";
echo strlen($cadena);

echo '<br>';

//Encontrar un caracter

$texto = "La vida es bella";
echo strpos($texto, "i");

echo '<br>';

//Reemplazar palabras
$frase = str_replace("vida","moto",$texto);

echo $frase;

echo '<br>';
//MAYUSCULAS y minusculas

echo strtolower($frase);
echo '<br>';
echo strtoupper($frase);
