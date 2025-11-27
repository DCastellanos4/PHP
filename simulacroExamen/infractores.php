<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Vehículos</title>

    <style>
        body {
            margin: 0;
            padding: 40px;
            font-family: Arial, sans-serif;
            background: #ffffff;
            color: #1d3f72;
        }

        h1 {
            font-size: 22px;
            letter-spacing: 1px;
            margin-bottom: 20px;
            color: #1d3f72;
        }

        .line {
            width: 100%;
            height: 2px;
            background: #3a7fc3;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th {
            background: #e7f0fb;
            color: #1d3f72;
            padding: 10px;
            border-bottom: 2px solid #3a7fc3;
            text-align: left;
            font-size: 14px;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #c7d8ee;
            font-size: 14px;
            color: #1d3f72;
        }

        tr:hover td {
            background: #f2f7ff;
        }
    </style>
</head>

<body>


    <form action="infractores.php" method="post">
        Fecha Inicio: <input type="date" name="fechaInicio">
        <br><br>
        Fecha Fin: <input type="date" name="fechaFin">
        <br><br>
        <input type="submit"name="enviar" value="Enviar">
    </form>

    <?php
    $fechaInicio=$_POST['fechaInicio'];
    $fechaFin=$_POST['fechaFin'];

    // echo "<h1>Listado de Vehículos</h1>
    // <div class='line'></div>";
    // $vehiculos = fopen("vehiculos.txt", "r");
    // if (!$vehiculos) {
    //     die("No se ha podido leer el fichero");
    // }
    // echo "<table>";
    // echo "<tr>
    //         <th>Matricula</th>
    //         <th>Nombre</th>
    //         <th>Calle</th>
    //         <th>Dia</th>
    //         <th>Hora</th>
    //         <th>Tipo</th>
    //     </tr>";

    // if ($vehiculos) {
    //     while (($linea = fgets($vehiculos)) != false) {
    //         $contenido = explode(" ", $linea);

    //         echo "<tr>";
    //         foreach ($contenido as $value) {
    //             echo "<td>" . htmlspecialchars($value) . "</td>";
    //         }
    //         echo "</tr>";
    //     }
    //     fclose($vehiculos);
    // }

    // echo "</table>";

    ?>

</body>

</html>
