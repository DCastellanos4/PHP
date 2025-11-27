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
    2. MUESTRO EL SEGUNDO FORMULARIO QUE ME PERMITE RELLENAR LOS DATOS DEL PERMISO
    ----------------------------------------------------------*/
    $tipo = $_POST['tipoPermiso'];
    echo "<form name='formulario2' action='permiso2.php' method='post'>";
    echo "<input type='hidden' name='tipoPermiso' value='{$tipo}'>";
    echo "<h1>Vas a crear una solicitud para {$_POST['tipoPermiso']}</h1>";
    echo "<br><br>";
    echo "Matricula: <input type='text' name='matricula' value='{$_POST['matricula']}'>";
    if (empty($_POST['matricula']) && isset($_POST['enviarSegundo'])) {
        echo "<p style='color:red'>Rellena el campo matricula</p>";
    }
    echo "<br><br>";
    echo "Fecha Inicio:<input type='date' name='fechaInicio'>";
    if (empty($_POST['fechaInicio']) && isset($_POST['enviarSegundo'])) {
        echo "<p style='color:red'>Rellena el campo fecha</p>";
    }
    echo "<br><br>";
    switch ($_POST['tipoPermiso']) {
        case 'taxis':
            echo "Nombre: <input type='text' name='difenciador'>";
            break;
        case 'autobusesEMT':
            echo "Direccion: <input type='text' name='difenciador'>";
            break;
        case 'residentes':
            echo "Direccion: <input type='text' name='difenciador'>";
            break;
        case 'servicios':
            echo "Servicio: <input type='text' name='difenciador'>";
            break;
        case 'logistica':
            echo "Empresa: <input type='text' name='difenciador'>";
            break;
        default:
            echo "no reconocido";
            break;
    }
    if (empty($_POST['difenciador']) && isset($_POST['enviarSegundo'])) {
        echo "<p style='color:red'>Tienes que introducir algo para poder guardarlo</p>";
    }
    echo "<br><br>";
    echo "<input type='submit' name='enviarSegundo' value='Enviar'>";
    echo "</form>";
    /* ---------------------------------------------------------
    1. SI HAN ENVIADO LOS DATOS, EJECUTO LA FUNCION QUE ME PERMITE GUARDAR LOS DATOS EN SU ARCHIVO .TXT
    ----------------------------------------------------------*/
    if (!empty($_POST['difenciador']) && !empty($_POST['matricula']) && !empty($_POST['fechaInicio'])) {
        creaSolicitud($tipo, $_POST['matricula'], $_POST['difenciador'], $_POST['fechaInicio']);
    }
    function creaSolicitud($nombreArchivo, $matricula, $diferenciador, $fecha)
    { //SUDO CHMOD 777 [nombreFichero/Directorio]
        $nombreArchivo = $nombreArchivo . ".txt";
        $file = fopen($nombreArchivo, "a+");
        if ($file === false) {
            echo "<p>Error: no se pudo crear o abrir el archivo.</p>";
            return;
        }
        if ($nombreArchivo === "residentes.txt") {
            $fechaFin = $_POST['fechaInicio'];
            $semanal = sumarDias($fechaFin, 7);
            fwrite($file, "$matricula|$diferenciador|$fecha|$semanal\n");
            fclose($file);
        } else {
            fwrite($file, "$matricula|$diferenciador|$fecha\n");
            fclose($file);
        }
    }
    function sumarDias($fecha, $dias)
    {
        // Crear un objeto DateTime a partir de la fecha
        $date = new DateTime($fecha);

        // Crear un intervalo de tiempo en días
        $intervalo = new DateInterval("P{$dias}D");

        // Sumar el intervalo
        $date->add($intervalo);

        // Devolver la fecha en formato Y-m-d
        return $date->format('d-m-Y');
    }
    ?>
</body>

</html>
