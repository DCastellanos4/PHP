<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nombre = $_POST["texto"];
    echo "Nombre: " . $nombre;
    echo "<br>";
    if (isset($_POST["titulo"])) {
        $titulo = $_POST["titulo"];
        echo "Busqueda: " . $titulo;
    } else if (isset($_POST["album"])) {
        echo "Busqueda: " . $_POST["album"];
    } else if (isset($_POST["ambos"])) {
        echo "Busqueda: " . $_POST["ambos"];
    } else {
        echo "Elige una";
    }
    echo "<br>";
    if (isset($_POST["idiomas"])) {
        $idiomas = $_POST["idiomas"];
        foreach ($idiomas as $key => $value) {
            echo "Genero: " . $value;
        }
    }
    echo "<br>";
    echo "<br>";
    if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
        if ($_FILES['imagen']['type'] === "image/jpeg") {
            $nombreDirectorio = "img/";
            $nombreFichero = $_FILES['imagen']['name'];
            $nombreCompleto = $nombreDirectorio . $nombreFichero;
            echo $nombreFichero;
            echo "name:" . $_FILES['imagen']['name'] . "\n";
            echo "<br>";
            echo "tmp_name:" . $_FILES['imagen']['tmp_name'] . "\n";
            echo "<br>";
            echo "size:" . $_FILES['imagen']['size'] . "\n"; //EL SIZE LO CONSIGUE EN BYTES
            echo "<br>";
            echo "type:" . $_FILES['imagen']['type'] . "\n"; //EL TYPE SE ESCRIBE EN LITERAL
            echo "<br>";
            if (is_dir($nombreDirectorio)) { // es un directorio existente
                $idUnico = time();
                $nombreFichero = $idUnico . "-" . $nombreFichero;
                $nombreCompleto = $nombreDirectorio . $nombreFichero;
                move_uploaded_file($_FILES['imagen']['tmp_name'], $nombreCompleto);
                echo "Fichero subido con el nombre: $nombreFichero<br>";
            } else {
                echo "Directorio definitivo inválido";
            }
        } else
            print("No se ha podido subir el fichero\n");
    }
    echo "<br>";
    echo imagejpeg($nombreFichero);
    ?>
</body>

</html>
