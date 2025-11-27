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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 13px;
        }

        th {
            background-color: #e6f0ff;
            color: #0033cc;
            text-align: left;
            padding: 8px;
            border-bottom: 2px solid #0033cc;
        }

        td {
            padding: 6px 8px;
            border-bottom: 1px solid #ccc;
        }

        tr:hover {
            background-color: #f2f8ff;
        }

        a {
            color: #0033cc;
            font-weight: bold;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>Sistema de inscripcion a ofertas de trabajo</h1>
    <h2>Ofertas Activas</h2>
    <!-- <table>
        <tr>
            <th>EMPRESA</th>
            <th>Oferta</th>
            <th>Categoría</th>
            <th>Fecha publicación</th>
            <th></th>
        </tr>
        <tr>
            <td>ABDE CONSULTING</td>
            <td>Ingeniero, Programador J2EE</td>
            <td>Informática y Telecomunicaciones</td>
            <td>12/12/2013</td>
            <td><a href="#">Inscribirme</a></td>
        </tr>
        <tr>
            <td>SOGETI ESPAÑA</td>
            <td>Desarrollador Jr ORACLE FORMS</td>
            <td>Informática y Telecomunicaciones</td>
            <td>29/11/2013</td>
            <td><a href="#">Inscribirme</a></td>
        </tr>
    </table> -->
    <?php
    $ofertas = fopen("ofertas.txt", "r");
    if (!$ofertas) {
        die("No se lee el fichero");
    }

    echo "<table>";
    echo "<tr>
            <th>Empresa</th>
            <th>Oferta</th>
            <th>Categoría</th>
            <th>Fecha publicación</th>
            <th></th>
        </tr>";
    if ($ofertas) {
        while (($linea = fgets($ofertas)) != false) {
            $contenido = explode("|", $linea);
            $empresa=$contenido[0];
            $nombre=$contenido[1];
            $cat=$contenido[2];
            $fecha=$contenido[3];
            echo "<tr>";
            foreach ($contenido as $key => $value) {
                echo "<td>" . $value . "</td>";
            }
            echo "<td><a href='inscribeme.php?empresa={$empresa}&nombre={$nombre}&categoria={$cat}&fecha={$fecha}'>Inscribirme</a></td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    ?>
</body>

</html>
