<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 9: Clase DateInterval</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 9</div>

    <div class="titulo-apartado">Clase DateInterval</div>

    <div class="definicion">
      <strong>DateInterval:</strong> Representa una cantidad fija de tiempo (años, meses, días, horas, minutos, segundos), o una cadena relativa interpretable por <code>DateTime</code>.
    </div>

    <div class="definicion">
      Puede ser usada para sumar o restar tiempo a un objeto <code>DateTime</code> o para representar la diferencia entre dos fechas.
    </div>

    <div class="definicion">
      <strong>Métodos principales:</strong>
      <ul>
        <li><code>__construct(string $interval_spec)</code></li>
        <li><code>createFromDateString(string $time)</code></li>
        <li><code>format(string $format)</code></li>
      </ul>
    </div>

    <div class="definicion">
      <strong>Formato del intervalo:</strong> Comienza con la letra <code>P</code> (de “period”) y usa letras para representar unidades de tiempo. Si incluye elementos de hora, se agrega una <code>T</code> antes de esa parte.
    </div>

    <table class="tabla-ejemplo">
      <thead>
        <tr>
          <th>Indicador</th>
          <th>Descripción</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Y</td><td>Años</td></tr>
        <tr><td>M</td><td>Meses</td></tr>
        <tr><td>D</td><td>Días</td></tr>
        <tr><td>W</td><td>Semanas (convertidas a días, no combinable con D)</td></tr>
        <tr><td>H</td><td>Horas</td></tr>
        <tr><td>M</td><td>Minutos</td></tr>
        <tr><td>S</td><td>Segundos</td></tr>
      </tbody>
    </table>

    <div class="definicion">
  <strong>Formato completo del intervalo:</strong> La cadena utilizada para construir un <code>DateInterval</code> debe seguir la norma ISO 8601, y se compone de:
</div>

<table class="tabla-ejemplo">
  <thead>
    <tr>
      <th>Elemento</th>
      <th>Significado</th>
      <th>Ejemplo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><code>P</code></td>
      <td>Prefijo obligatorio. Indica que empieza un período.</td>
      <td><code>P...</code></td>
    </tr>
    <tr>
      <td><code>Y</code></td>
      <td>Años</td>
      <td><code>P2Y</code> (2 años)</td>
    </tr>
    <tr>
      <td><code>M</code> (en fecha)</td>
      <td>Meses</td>
      <td><code>P3M</code> (3 meses)</td>
    </tr>
    <tr>
      <td><code>W</code></td>
      <td>Semanas (se convierte a días, no combinable con D)</td>
      <td><code>P2W</code> (14 días)</td>
    </tr>
    <tr>
      <td><code>D</code></td>
      <td>Días</td>
      <td><code>P10D</code> (10 días)</td>
    </tr>
    <tr>
      <td><code>T</code></td>
      <td>Separador opcional para indicar que sigue la parte de tiempo</td>
      <td><code>PT...</code></td>
    </tr>
    <tr>
      <td><code>H</code></td>
      <td>Horas</td>
      <td><code>PT5H</code> (5 horas)</td>
    </tr>
    <tr>
      <td><code>M</code> (en tiempo)</td>
      <td>Minutos</td>
      <td><code>PT30M</code> (30 minutos)</td>
    </tr>
    <tr>
      <td><code>S</code></td>
      <td>Segundos</td>
      <td><code>PT45S</code> (45 segundos)</td>
    </tr>
  </tbody>
</table>

<div class="definicion">
  <strong>Ejemplo combinado:</strong> <code>P1Y2M3DT4H5M6S</code> representa:<br>
  1 año, 2 meses, 3 días, 4 horas, 5 minutos y 6 segundos.
</div>

    <div class="definicion">
      <strong>Ejemplos válidos:</strong> Los indicadores deben ir de la unidad más grande a la más pequeña. Ejemplos:
    </div>

    <table class="tabla-ejemplo">
      <thead>
        <tr>
          <th>Intervalo</th>
          <th>Descripción</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>P2D</td><td>Dos días</td></tr>
        <tr><td>PT2S</td><td>Dos segundos</td></tr>
        <tr><td>P6YT5M</td><td>Seis años y cinco minutos</td></tr>
        <tr><td>P1Y4D</td><td>Un año y cuatro días</td></tr>
      </tbody>
    </table>

  </div>
</body>
</html>
