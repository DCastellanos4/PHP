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
            color: #0033cc;
            font-size: 18px;
            border-bottom: 3px solid #0033cc;
            padding-bottom: 10px;
        }

        h2 {
            color: #0033cc;
            font-size: 14px;
            margin-top: 20px;
        }

        p {
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
    <h2>Realiza la inscripcion</h2>
    <form action="final.php" method="post" enctype="multipart/form-data">
        <?php
        echo "<p>Oferta:" . $_GET['nombre'] . "</p>";
        echo "<input type='hidden' name='nombre' value='{$_GET['nombre']}'>";
        echo "<p>Empresa:" . $_GET['empresa'] . "</p>";
        echo "<input type='hidden' name='empresa' value='{$_GET['empresa']}'>";
        echo "<p>Categoria:" . $_GET['categoria'] . "</p>";
        echo "<input type='hidden' name='categoria' value='{$_GET['categoria']}'>";
        echo "<input type='hidden' name='fecha' value='{$_GET['fecha']}'>";
        echo "<p>Nombre: <input type='text' name='name'>";
        echo "<p>Comentario: <textarea cols='40' rows='8' maxlength='150' name='comentario'></textarea>";
        echo "<p>CV: <input type='file' name='CV'</p>";
        echo "<br><br><h1></h1>";
        echo "<input type='submit' name='enviar' value='Enviar Oferta'>";
        ?>
    </form>
</body>

</html>
