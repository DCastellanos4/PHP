<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color:yellowgreen;
        }
        form{
            color:yellowgreen;
        }
    </style>
</head>
<body>
    <h1>Sugerencias para nuestra web</h1>
    <form action="ejercicio4.1.php" method="post">
        <strong>Nombre:</strong> <input type="text" name="nombre">
        <br><br><strong>Comentario:</strong>
        <textarea cols="15" rows="4" name="comentario"></textarea>
        <br><br>
        <input type="submit" name="enviar" value="enviar">
    </form>
</body>
</html>
