<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario php y html</title>
</head>
<body>
    <h1>Formulario</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <p><label for="nombre">Nombre: </label> 
        <input type="text" name="nombre" id=""> <br></p>

        <p><label for="apellido">Apellido:</label>        
        <input type="text" name="apellido" id=""><br></p>

        <p><label for="boton">Boton:</label>        
        <input type="button" name="boton" value="Click aqui" id=""><br></p>

        <label for="sexo">Sexo:</label>        
        <p>
            Hombre<input type="checkbox" name="sexo" value="hombre" id="">
            Mujer<input type="checkbox" name="sexo" value="mujer" checked="checked" id="">
            <br>
        </p>

        <p><label for="color">Color:</label>        
        <input type="color" name="color" id=""><br></p>

        <p><label for="fecha">Fecha:</label>        
        <input type="date" name="fecha" id=""><br></p>

        <p><label for="correo">Correo:</label>        
        <input type="email" name="correo" id=""><br></p>

        <p><label for="archivo">Archivo:</label>        
        <input type="file" name="archivo" id=""><br></p>

        <p><label for="numero">Numero:</label>        
        <input type="number" name="numero" id=""><br></p>

        <p><label for="pass">Contraseña:</label>        
        <input type="password" name="pass" id=""><br></p>

        <label for="radio">Continente:</label> 
        <p>
        America<input type="radio" name="radio" id=""><br>
        Europa <input type="radio" name="radio" id=""><br>
        Asia <input type="radio" name="radio" id="">
        </p>
        
        <p><label for="web">Web:</label>        
        <input type="url" name="web" id=""><br></p>

        <p><label for="textarea">Text Area:</label>        
        <textarea name="textarea" id="" cols="30" rows="10"></textarea><br></p>


        Peliculas:
        <select name="peliculas" id="">
            <option value="Spiderman">Spiderman</option>
            <option value="Batman">Batman</option>
            <option value="Superman">Superman</option>
        </select>
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>