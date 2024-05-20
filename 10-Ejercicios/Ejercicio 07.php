
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Ejercicio 07.php" method="post">
        <div>
            <label for="numero1">Numero 01</label>
            <input type="text" name="numero1" id="">
        </div>
        <div>
            <label for="numero2">Numero 02</label>
            <input type="text" name="numero2" id="">
        </div>

        <input type="submit" value="Muestra">
    </form>
</body>
</html>


<?php

/**
 * Ejercicio 05: mostrar todos los números impares que estén entre dos números pasados por parametro post
 */

 if (is_numeric($_POST['numero1']) &&  is_numeric($_POST['numero2'])  &&
    isset($_POST['numero1']) && isset($_POST['numero2'])) {

    $numero1= $_POST['numero1'];
    $numero2= $_POST['numero2'];

    if ($numero1<$numero2) {

        for ($i=$numero1; $i <=$numero2 ; $i++) { 

            if ($i%2 != 0) {
                echo $i.'<br>';    
            }
        }
    }elseif ($numero1>$numero2) {
        for ($i=$numero2; $i <=$numero1 ; $i++) { 

            if ($i%2 != 0) {
                echo $i.'<br>';
            }
         }
    }elseif ($numero1===$numero2) {
        echo 'Los numeros no pueden ser iguales';
    }
    
 }else{
    echo 'parametros incorrectos';
 }