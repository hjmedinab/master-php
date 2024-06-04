<?php

/*
ARRAYS
Es una colección de datos con muchos datos dentro/valores, BAJO UN UNICO NOMBRE
Para acceder a ellos podemos usar indices numericos o alfanumericos,
*/


$pelicula = "Batman";

$peliculas = array("Batman","Superman", "Spiderman","etc");

$cantantes = ["Jose José", "Pedro Infante", "Luis Miguel"];
//var_dump($peliculas[0]);
$personas = array(
    'nombre'=>'Jimmy',
    'apellido' => 'Medina',
    'web' => 'www.jm.com'
);



var_dump($personas);


echo "Listado de peliculas";

echo "<ul>";
for ($i=0; $i < count($peliculas); $i++) { 
    echo "<li>".($peliculas[$i])."</li>";
}
echo "</ul>";

echo "<br>";


echo "Listado de cantantes";

echo "<ul>";

foreach ($cantantes as $cantante) {
    echo "<li>".$cantante."</li>";
}

echo "</ul>";
