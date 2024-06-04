<?php

$error = 'faltan valores';

if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad']) && !empty($_POST['email'])
    && !empty($_POST['pass'])
    ) {
    $error = 'valores correctos';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

}else{
    $error = 'faltan valores';
    header("location:index.php?error=$error");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validarformularios en PHP</title>
</head>
<body>
    <h1>Datos validados correctamente</h1>
    <p><?=$nombre ?></p>
    <p><?=$apellido ?></p>
    <p><?=$edad ?></p>
    <p><?=$email ?></p>
    <p><?=$pass ?></p>
    
</body>
</html>