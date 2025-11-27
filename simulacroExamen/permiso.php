<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: "Trebuchet MS", Arial, sans-serif;
            background: white;
            text-align: center;
            margin-top: 40px;
            color: #003366;
        }

        /* Título */
        h1,
        h2 {
            font-weight: normal;
        }

        /* Contenedor del formulario */
        form {
            display: block;
            /* 🔹 Antes inline-block → ahora cada form va debajo */
            width: 60%;
            margin: 30px auto;
            /* 🔹 Separa los formularios entre sí */
            text-align: left;
            border-top: 2px solid #0077b6;
            border-bottom: 2px solid #0077b6;
            padding: 20px 40px;
            background: #f7f9fc;
            /* 🔹 Suave fondo para distinguirlos */
            border-radius: 8px;
        }

        /* Inputs y select */
        form input[type="text"],
        form input[type="date"],
        form input[type="file"],
        form select {
            margin-left: 10px;
            padding: 4px 6px;
            border: 1px solid #888;
            border-radius: 3px;
            font-size: 14px;
        }

        /* Botones */
        form input[type="submit"],
        button,
        input[type="button"] {
            background: #e6e6e6;
            padding: 6px 14px;
            border: 1px solid #666;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        form input[type="submit"]:hover {
            background: #dcdcdc;
        }

        /* Select tipo permiso */
        select {
            width: 150px;
        }

        /* Espaciado entre filas */
        br {
            line-height: 1.8;
        }

        /* Enlaces */
        a,
        .link {
            color: #cc9900;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    /* ---------------------------------------------------------
    1. PRIMER FORMULARIO QUE ME PERMITE SELECCIONAR QUE TIPO DE PERMISO QUIERO HACER
    ----------------------------------------------------------*/
    echo "<form action='permiso2.php' method='post'>";
    echo "<h1>Elige el tipo de permiso</h1>";
    echo "Tipo de Permiso: <select name='tipoPermiso'>";
    $permiso = fopen("tipoPermiso.txt", "r");
    if (!$permiso) {
        die("No se ha podido leer el fichero");
    }
    while (($linea = fgets($permiso)) != false) {
        $contenido = explode("|", $linea);
        foreach ($contenido as $key => $value) {
            echo "<option value={$value}>{$value}</option>";
         }
    }
    echo "</select>";
    fclose($permiso);
    echo "<br><br>";
    echo "<input type='submit' name='enviar' value='Enviar'>";
    echo "<br><br>";
    echo "</form>";
    ?>
</body>

</html>
