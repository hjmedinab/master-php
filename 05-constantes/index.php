<?php

//Constantes

define('nombre','Jimmy Medina');
define('web','jimmy_med.php');
echo nombre;
echo '<br>';


//Constantes predefinidas

echo PHP_OS; //Definir sistema operativo
echo '<br>';
echo PHP_EXTENSION_DIR; 
echo '<br>';
function holaMundo(){
    echo __FUNCTION__;
}

holaMundo();
