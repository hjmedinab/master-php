<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Ejercicio 04.php" method="post">
        <div>
        <label for="numero1">Número 01</label>
        <input type="text" name="numero1" id="" required>
        </div>

        <div>
        <label for="numero2">Número 02</label>
        <input type="text" name="numero2" id="" required>
        </div>

        <input type="submit" value="Calcular">

    </form>
</body>
</html>


<?php
/**
 * Recoger 2 numeros por URL y hacer todas las operaciones básicas de una calculadora suma resta multiplicacion y division
 */

if (isset($_POST['numero1']) && isset($_POST['numero2'])) {

    $numero1 = $_POST['numero1'];
    $numero2 =  $_POST['numero2'];
    echo "Multiplicación de $numero1 * $numero2 es:".($numero1*$numero2).'<br>';
    echo "Division de $numero1 / $numero2 es:".($numero1/$numero2).'<br>';
    echo "Suma de $numero1 + $numero2 es:".($numero1+$numero2).'<br>';
    echo "Resta de $numero1 - $numero2 es:".($numero1-$numero2.'<br>');
}else{
    echo "Introduce datos correctamente";
}

