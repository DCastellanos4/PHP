<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $hoy = new DateTime('now');
    echo "\n" . $hoy->format("Y-m-d H:i:s");
    echo "<br>";
    $ayer = new DateTime('yesterday');
    echo "\n" . $ayer->format("Y-m-d H:i:s");
    echo "<br>";
    $maniana = new DateTime('tomorrow');
    echo "\n" . $maniana->format("Y-m-d H:i:s");
    echo "<br>";
    $hoy->add(new DateInterval('P10D'));
    echo "\n" . $hoy->format("Y-m-d H:i:s");

    ?>
</body>

</html>
