<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="radio.php" method="post">
        <input type="radio" name="sexo" value="Mujer" checked>Mujer
        <input type="radio" name="sexo" value="Hombre">Hombre
        <input type="hidden" name="username" value="$usuario">
        <select multiple size="3" name="idiomas[]">
            <option value="ingles" selected>ingles</option>
            <option value="frances" selected>frances</option>
            <option value="aleman" selected>aleman</option>
            <option value="holandes" selected>holandes</option>
        </select>
        <input type="checkbox" name="extras[]" value="garage" checked>garage
        <input type="checkbox" name="extras[]" value="piscina">piscina
        <input type="checkbox" name="extras[]" value="jardin">jardin
        <textarea cols="50" rows="4" name="comentario">mete algo</textarea>
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
    $username = $_POST['username'];
    echo $username;
    echo "<br>";
    if (!empty($_POST['idiomas'])) {
        $idiomas = $_POST['idiomas'];
        foreach ($idiomas as $key => $value) {
            echo $value . "<br>" . "\n";
        }
    }
    echo "<br>";
    $extras = $_POST['extras'];
    foreach ($extras as $key => $value) {
        echo $value . "<br>" . "\n";
    }
    echo "<br>";
    $comentario = $_POST['comentario'];
    echo $comentario;
    echo "<br>";
    $sexo = $_POST['sexo'];
    echo $sexo;
    ?>
</body>

</html>
