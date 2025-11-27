<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//$c=file_get_contents("https://www.upm.es/"); //-> ESTO SIRVE PARA LEER EL CONTENIDO DE UN FICHERO o WEB
//echo $c;
/*Realiza una página llamada lectura.php en la que lea el contenido de una de las páginas web hechas
hasta ahora, lo guarde a un fchero local llamado fch_salida.ttt y escriba el número total de bytes
escritos.*/
$fichero=fopen("Pruebaa.txt","a+");
if(!$fichero)
    die("error");

fwrite($fichero,"nuevalineaaaa\n");
fputs($fichero,"holaaaaa\n");
fclose($fichero);
echo $fichero;
    ?>
</body>
</html>
