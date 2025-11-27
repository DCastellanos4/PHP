<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: white;
            color: #000;
            margin: 40px;
        }

        h1 {
            text-align: center;
            color: #0033cc;
            font-size: 18px;
            border-bottom: 3px solid #0033cc;
            padding-bottom: 10px;
        }

        h2 {
            text-align: center;
            color: #0033cc;
            font-size: 14px;
            margin-top: 20px;
        }

        p {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Sistema de inscripcion a ofertas de trabajo</h1>
    <h2>Resultado de la inscripcion</h2>
    <?php
    echo "<p>Oferta: " . $_POST['nombre'] . "</p>";
    echo "<p>Empresa: " . $_POST['empresa'] . "</p>";
    echo "<p>Categoria: " . $_POST['categoria'] . "</p>";
    echo "<p>Fecha: " . $_POST['fecha'] . "</p>";
    echo "<p>Nombre: " . $_POST['name'] . "</p>";
    if (isset($_FILES['CV']) && $_FILES['CV']['error'] === UPLOAD_ERR_OK) {
        echo "<p>CV: Incluido</p>";
        $cv = true;
    } else {
        echo "<p>CV: No incluido</p>";
        $cv = false;
    }
    echo "<p><a href='seleccionaOferta.php'>[Inscribirme en otra oferta]</a></p>";
    registraOferta($_POST['nombre'], $_POST['name'], $_POST['comentario'], $cv);
    function registraOferta($nombreArchivo, $nombreCandidato, $comentario, $cv)
    {
        $nombreArchivo = $nombreArchivo . ".txt";
        $file = fopen($nombreArchivo, "a+");
        if ($file === false) {
            echo "<p>Error: no se pudo crear o abrir el archivo.</p>";
            return;
        }
        fwrite($file, "Candidato: " . $nombreCandidato . "\n");
        fwrite($file, "Comentario: " . $comentario . "\n");
        if ($cv == true) {
            fwrite($file, "CV: " . "True" . "\n");
        }else{
            fwrite($file, "CV: " . "False" . "\n");
        }
        fwrite($file, "-----------------------------\n");

        fclose($file);
    }
    ?>
</body>

</html>
