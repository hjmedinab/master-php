<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validarformularios en PHP</title>
</head>
<body>
    <h1>Validar formularios en PHP</h1>

    <?php
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if ($error == 'faltan valores') {
                echo '<h1><strong style ="color:red">INSERTA DATOS</strong></h1>';
            }
        }
    ?>

    <form action="procesar_formulario.php" method="POST">
        <p><label for="nombre">Nombre</label>
        <input type="text" name="nombre" id=""></p>

        <p><label for="apellido">Apellido</label>
        <input type="text" name="apellido" id=""></p>
        
        <p><label for="edad">Edad</label>
        <input type="number" name="edad" id=""></p>

        <p><label for="email">Email</label>
        <input type="email" name="email" id=""></p>
        
        <p><label for="pass">Contraseña</label>
        <input type="password" name="pass" id=""></p>

        <input type="submit" value="Enviar">

    </form>
    
</body>
</html>