<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 10: Método format() en DateInterval</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 10</div>

    <div class="titulo-apartado">Método format() en DateInterval</div>

    <div class="definicion">
      <strong>DateInterval::format(string $format):</strong> Devuelve una representación formateada del intervalo. Cada carácter debe ir precedido por el símbolo <code>%</code>.
    </div>

    <table class="tabla-ejemplo">
      <thead>
        <tr>
          <th>Carácter de formato</th>
          <th>Descripción</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>%Y / %y</td><td>Años, con al menos 2 dígitos</td></tr>
        <tr><td>%M / %m</td><td>Meses, con al menos 2 dígitos</td></tr>
        <tr><td>%D / %d</td><td>Días, con al menos 2 dígitos</td></tr>
        <tr><td>%a</td><td>Total de días del intervalo</td></tr>
        <tr><td>%H / %h</td><td>Horas, con al menos 2 dígitos</td></tr>
        <tr><td>%I / %i</td><td>Minutos, con al menos 2 dígitos</td></tr>
        <tr><td>%S / %s</td><td>Segundos, con al menos 2 dígitos</td></tr>
        <tr><td>%R</td><td>Signo "+" si positivo, "-" si negativo</td></tr>
        <tr><td>%r</td><td>Signo "-" si negativo, vacío si positivo</td></tr>
        <tr><td>%%</td><td>Literal %</td></tr>
      </tbody>
    </table>

    <div class="definicion">
      <strong>Ejemplo práctico:</strong> Comparando dos fechas con <code>diff()</code> y mostrando los segundos de diferencia.
    </div>

    <div class="codigo"><pre>
$timespan = 10;
$d1 = new DateTime();
$d2 = new DateTime();
$d2->add(new DateInterval('PT' . $timespan . 'S'));

$resul = $d2->diff($d1);
echo '&lt;br&gt;' . $resul->format('%s'); // Visualiza los 10 segundos
    </pre></div>

  </div>
</body>
</html>
