<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="dos.php" method="post">
        Edad: <input type="text" name="edad">
        Nombre: <input type="text" name="cadena" value="valor por defecto" size="20">
        <input type="submit" value="aceptar" name="aceptar">
    </form>
    <?php
    echo "La edad es: " . $_POST["edad"];
    echo "<br>";
    if (isset($_POST["aceptar"])) {#ISSET mira si existe una variable que le pasas dentro
        $cadena = $_POST["cadena"];
    }
    echo $cadena;
    ?>
</body>

</html>
