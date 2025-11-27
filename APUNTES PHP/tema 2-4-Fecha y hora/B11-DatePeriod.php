<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 11: Clase DatePeriod</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 11</div>

    <div class="titulo-apartado">Clase DatePeriod</div>

    <div class="definicion">
      <strong>DatePeriod:</strong> Representa un período de fechas y permite iterar sobre un conjunto de fechas y horas repetidas a intervalos regulares.
    </div>

    <div class="definicion">
      Puede utilizarse para generar una secuencia de fechas entre un punto de inicio y final, o en función de un número de repeticiones.
    </div>

    <div class="definicion">
      <strong>Constructores disponibles:</strong>
      <ul>
        <li><code>DatePeriod(DateTime $start, DateInterval $interval, int $recurrences [, int $options])</code></li>
        <li><code>DatePeriod(DateTime $start, DateInterval $interval, DateTime $end [, int $options])</code></li>
        <li><code>DatePeriod(string $isoString [, int $options])</code></li>
      </ul>
    </div>

    <div class="definicion">
      <strong>Ejemplo 1:</strong> Generar fechas semanales a partir de una fecha fija.
    </div>

    <div class="codigo"><pre>
$inicio = new DateTime('2025-01-01');
$intervalo = new DateInterval('P1W'); // 1 semana
$repeticiones = 4;

$periodo = new DatePeriod($inicio, $intervalo, $repeticiones);

foreach ($periodo as $fecha) {
    echo $fecha->format("Y-m-d") . "&lt;br&gt;";
}
    </pre></div>

    <div class="definicion">
      <strong>Ejemplo 2:</strong> Usar la fecha actual como punto de partida.
    </div>

    <div class="codigo"><pre>
$inicio = new DateTime(); // hoy
$intervalo = new DateInterval('P1D'); // 1 día
$repeticiones = 3;

$periodo = new DatePeriod($inicio, $intervalo, $repeticiones);

foreach ($periodo as $fecha) {
    echo $fecha->format("Y-m-d") . "&lt;br&gt;";
}
    </pre></div>

  </div>
</body>
</html>
