<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Realiza una página llamada fechas.php en la que muestre la fecha actual y la fecha dentro de una
semana en el formato 2009-05-17. Muestre lo mismo pero en el formato: "miércoles, 19 de octubre
de 2008. A las 18:35" (en español).
 -->
    <h1>Primer formato</h1>
    <?php
    $actual = new DateTime('now');
    echo $actual->format(("Y-m-d"));
    $actual->add(new DateInterval('P7D'));
    echo "<br>";
    echo $actual->format(("Y-m-d"));
    ?>
    <h2>Segundo formato</h2>
    <?php
function fechaCompletaES(DateTime $fecha): string
{
    $dias = [
        'Monday' => 'lunes', 'Tuesday' => 'martes', 'Wednesday' => 'miércoles',
        'Thursday' => 'jueves', 'Friday' => 'viernes', 'Saturday' => 'sábado',
        'Sunday' => 'domingo'
    ];

    $meses = [
        'January' => 'enero', 'February' => 'febrero', 'March' => 'marzo',
        'April' => 'abril', 'May' => 'mayo', 'June' => 'junio',
        'July' => 'julio', 'August' => 'agosto', 'September' => 'septiembre',
        'October' => 'octubre', 'November' => 'noviembre', 'December' => 'diciembre'
    ];

    // Obtener partes en inglés
    $diaSemanaIng = $fecha->format("l");
    $dia = $fecha->format("d");
    $mesIng = $fecha->format("F");
    $anio = $fecha->format("Y");
    $hora = $fecha->format("H:i");

    // Traducir
    $diaSemana = $dias[$diaSemanaIng];
    $mes = $meses[$mesIng];

    // Construir texto final
    return "{$diaSemana}, {$dia} de {$mes} de {$anio}. A las {$hora}";
}

// Ejemplo:
echo fechaCompletaES(new DateTime("2008-10-19 18:35"));
?>
</body>

</html>
