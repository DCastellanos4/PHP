<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre=$_POST["nombre"];
    $comentario=$_POST["comentario"];
    $separador="-------------------";
    $fichero=fopen("comentarios.txt","a");
    if(!$fichero){
        die("ERROR MORTAL MAXIMO");
    }
    fwrite($fichero,$separador."\n{$nombre}\n{$comentario}\n");
    ?>
</body>
</html>
