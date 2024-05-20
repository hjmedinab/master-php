<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario en php</h1>
    <form action="recibir.php" method="post">
        <div>
        <label for="Nombre">Nombre:</label>
        <input type="text" name="nombre">
        </div>

        <div>
        <label for="Apellido">Apellido</label>
        <input type="text" name="apellido"><br>
        </div>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php

?>