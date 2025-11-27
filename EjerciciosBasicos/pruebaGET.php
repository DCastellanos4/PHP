<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table.productos {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            font-family: "Segoe UI", Arial, sans-serif;
            font-size: 16px;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            overflow: hidden;
        }

        table.productos th,
        table.productos td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        table.productos th {
            background-color: #2c3e50;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        table.productos tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        table.productos tr:hover {
            background-color: #e9f5ff;
            transition: 0.3s;
        }

        table.productos td:first-child {
            font-weight: 600;
            color: #34495e;
        }
    </style>
</head>

<body>
    <table class="productos">
        <thead>
            <tr>
                <th>IDPRODUCTO</th>
                <th>NOMBRE</th>
                <th>PRECIO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Queso</td>
                <td>$5.00</td>
                <td><?php
                    echo '<a href="pruebaGET2.php?id=' . urlencode(1) .
                        '&nombre=' . urlencode("queso") .
                        '&precio=' . urlencode(5) .
                        '&dimensiones=' . urlencode("5x5cm") .
                        '&descripcion=' . urlencode("quesazo") .
                        '&color=' . urlencode("amarillo") .
                        '">Detalle</a>';
                    ?></td>

            </tr>
            <tr>
                <td>2</td>
                <td>Chorizo</td>
                <td>$4.50</td>
                <td><a href="pruebaGET2.php?id=2&nombre=chorizo&precio=4.50&dimensiones=2x2cm&descripcion=chorizacoPHP&color=rojo">Detalle</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Morcilla</td>
                <td>$6.00</td>
                <td><a href="pruebaGET2.php?id=3&nombre=morcilla&precio=10&dimensiones=5x6cm&descripcion=morcillaca&color=negro">Detalle</a></td>
            </tr>
        </tbody>
    </table>
</body>

</html>
