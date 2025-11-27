<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $producto=array($_GET['id'],$_GET['nombre'],$_GET['precio'],$_GET['dimensiones'],$_GET['descripcion'],$_GET['color']);
    foreach ($producto as $key => $value) {
        echo $value;
        echo "<br>";
    }
    ?>
</body>
</html>
