<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?PHP
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = "radio.php";
    echo $_SERVER['DOCUMENT_ROOT'];
    echo "<br>";
    echo $host;
    echo "<br>";
    echo $uri;
    #header("Refresh:  2;  http://Google.com");
    #header("X-Powered-By: adivinal");
    /*DESCARGA DE ARCHIVOS PHP*/
    header("Content-type: text/php");
    header('Content-Disposition: attachment; filename="radio.php"');
    readfile('radio.php');
    #header ("Location: http://$host$uri/$extra");
    ?>
</body>

</html>
