<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $errorres = array('Nombre' => ' ', 'Password' => ' ', 'Genero' => ' ', 'FechaNacimiento' => ' ', 'Pais' => ' ', 'Acepto' => ' ');
    if (!empty($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        echo $nombre;
        echo "<br>";
    } else {
        $errorres['Nombre'] = "El nombre no puede estar vacio";
    }
    if (strlen($_POST['pass']) < 6 || strlen($_POST['pass'] > 12)) {
        $pass = $_POST['pass'];
        echo $pass;
        echo "<br>";
    } else {
        $errores['Password'] = "La contraseña tiene que ser entre 6 y 12 caracteres";
    }
    if (!empty($_POST['genero'])) {
        $genero = $_POST['genero'];
        echo $genero;
        echo "<br>";
    } else {
        $errores['Genero'] = "Selecciona uno de los 2 campos";
    }
    $fecha = explode("/", $_POST['fecha']);
    if ((2025 - $fecha[2]) >= 18) {
        echo $_POST['fecha'];
        echo "<br>";
    } else {
        $errores['FechaNacimiento'] = "Tienes que ser mayor de edad";
    }
    if (!empty($_POST['pais'])) {
        $pais = $_POST['pais'];
        echo $pais;
        echo "<br>";
    } else {
        $errores['Pais'] = "No se puede dejar en blanco";
    }
    if (!empty($_POST['acepto'])) {
        $aceptado = true;
        echo $aceptado;
        echo "<br>";
    } else {
        $errores['Acepto'] = "Tienes que aceptar los terminos y condiciones";
    }
    echo "<br>";
    foreach ($errores as $key => $value) {
        echo $key . ": " . $value;
        echo "<br>";
    }
    ?>
</body>

</html>
