<?php

/**
 * Crear un array con el contenido de la siguiente tabla
 * Accion Aventura     Deportes
 * GTA      ASSASINS    FIFA19
 * COD      CRASH       PES19
 * PUBG     PRYNCEOFP   MOTOGP
 * 
 * Cada columna debe ir en un fichero separado
 */

$tabla = array (
    "Accion" => array("GTA","COD","PUBG"),
    "Aventura" => array("Assasins","Crash","Prince of Persia"),
    "Deportes" => array("FIFA19","PES19","MOTOGP"),
);

$categorias = array_keys($tabla);


?>

<table border="1px">
        <?php include_once'ejercicio 05/cabecera.php'?>
        <?php include_once'ejercicio 05/cuerpo.php'?>
</table>
