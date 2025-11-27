<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 7: Diferencia entre fechas</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 7</div>

    <div class="titulo-apartado">Diferencia entre fechas</div>

    <div class="definicion">
      <strong>DateTime::diff(DateTime $otraFecha):</strong> Calcula la diferencia entre dos fechas y devuelve un objeto de tipo <code>DateInterval</code>.
    </div>

    <div class="definicion">
      El resultado se puede formatear con el método <code>format()</code> del objeto <code>DateInterval</code> para obtener una salida personalizada.
    </div>

    <div class="codigo"><pre>
$fecha1 = new DateTime('2011-01-01');
$fecha2 = new DateTime('2011-05-03');
$intervalo = $fecha1->diff($fecha2);
echo "\n" . $intervalo->format('%R%a días'); // Imprime 122 días
    </pre></div>
<table class="tabla-ejemplo">
  <thead>
    <tr>
      <th>Carácter</th>
      <th>Significado</th>
      <th>Ejemplo de salida</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>%Y</td>
      <td>Año (4 dígitos)</td>
      <td>2025</td>
    </tr>
    <tr>
      <td>%y</td>
      <td>Año (2 dígitos)</td>
      <td>25</td>
    </tr>
    <tr>
      <td>%m</td>
      <td>Mes (2 dígitos)</td>
      <td>06</td>
    </tr>
    <tr>
      <td>%d</td>
      <td>Día del mes (2 dígitos)</td>
      <td>03</td>
    </tr>
    <tr>
      <td>%H</td>
      <td>Hora (00-23)</td>
      <td>14</td>
    </tr>
    <tr>
      <td>%i</td>
      <td>Minutos (00-59)</td>
      <td>05</td>
    </tr>
    <tr>
      <td>%s</td>
      <td>Segundos (00-59)</td>
      <td>09</td>
    </tr>
    <tr>
      <td>%a</td>
      <td>Total de días (diferencia)</td>
      <td>122</td>
    </tr>
    <tr>
      <td>%R</td>
      <td>Signo (+ o -)</td>
      <td>+ / -</td>
    </tr>
    <tr>
      <td>%r</td>
      <td>Signo (- si negativo, vacío si positivo)</td>
      <td>- / (vacío)</td>
    </tr>
    <tr>
      <td>%%</td>
      <td>El carácter % literal</td>
      <td>%</td>
    </tr>
  </tbody>
</table>

  </div>
</body>
</html>
