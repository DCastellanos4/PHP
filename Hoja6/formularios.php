<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h2>Busqueda de canciones</h2>
</head>

<body>
    <form action="formulario2.php" method="post" enctype="multipart/form-data">
        Texto a buscar: <input type="text" name="texto">
        <br>
        <input type="radio" name="titulo" value="titulo">Titulos de la cancion
        <input type="radio" name="album" value="album">Nombre del album
        <input type="radio" name="ambos" value="ambos">Ambos
        <br>
        <select name="idiomas[]">
            <option value="acustica">Acustica</option>
            <option value="Banda Sonora">Banda Sonora</option>
            <option value="Folk">Folk</option>
            <option value="Jazz">Jazz</option>
        </select>
        <br>
        <input type="file" name="imagen">
        <br>
        <input type="submit" value="buscar" name="buscar">
        <hr>
    </form>

</body>

</html>
