<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Ejercicio 06.php" method="post">
        <div>
            <label for="numero1">Inserte Número:</label>
            <input type="text" name="numero1" id="">
        </div>
        <input type="submit" value="Calcula la tabla">
    </form>
</body>
</html>


<?php

/**
 * Ejercicio 06: Imprimir por pantalla todas las tablas de multiplicar de 1 al 10
 */

 if (isset($_POST['numero1']) && is_numeric($_POST['numero1'])) {

    $numero1 = $_POST['numero1'];
    
    echo '<table border="1" >';
        echo '<tr>';
            for ($i=0; $i <=  $numero1 ; $i++) {
                echo  '<th> Tabla del '.$i.'</th>';
            }
        echo '</tr>';

        echo '<tr>';
            for ($i=0; $i <=  $numero1 ; $i++) { 
                echo '<td>';

                    for ($x=0; $x <= 10 ; $x++) { 
                        echo "$x x $i =".$i*$x.'<br>';
                    }
                echo '</td>';
            }
        echo '</tr>';
    echo '</table>';
 }else{
    echo "Escriba un número";
 }
