<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 2: Validar fechas y horas</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 2</div>
    <div class="titulo-apartado">Validar fechas y horas</div>

    <!-- Validar formato YYYY-MM-DD -->
    <div class="definicion">
      <strong>Validar formato de fecha (YYYY-MM-DD):</strong>
      Usa una expresión regular para comprobar si el valor tiene el formato correcto.
    </div>
    <div class="codigo"><pre>
$fecha = "2024-06-14";
if (preg_match("/^\d{4}-\d{2}-\d{2}$/", $fecha)) {
  echo "Formato válido de fecha.";
}
    </pre></div>
    <div class="definicion">
      <em>Explicación de la expresión:</em>
      <table class="tabla-ejemplo">
        <tr><th>Parte</th><th>Significado</th></tr>
        <tr><td>^</td><td>Inicio de cadena</td></tr>
        <tr><td>\d{4}</td><td>Cuatro dígitos para el año</td></tr>
        <tr><td>-</td><td>Guión separador</td></tr>
        <tr><td>\d{2}</td><td>Dos dígitos para el mes</td></tr>
        <tr><td>-</td><td>Guión separador</td></tr>
        <tr><td>\d{2}</td><td>Dos dígitos para el día</td></tr>
        <tr><td>$</td><td>Fin de cadena</td></tr>
      </table>
    </div>

    <!-- Validar hora -->
    <div class="definicion">
      <strong>Validar formato de hora (HH:MM:SS):</strong>
      Usa otra expresión regular que solo permite valores válidos del reloj.
    </div>
    <div class="codigo"><pre>
$hora = "15:30:45";
if (preg_match("/^(2[0-3]|[01][0-9]):[0-5][0-9]:[0-5][0-9]$/", $hora)) {
  echo "Formato válido de hora.";
}
    </pre></div>
    <div class="definicion">
      <em>Esta expresión:</em>
      <ul>
        <li>Permite horas entre 00 y 23</li>
        <li>Permite minutos y segundos entre 00 y 59</li>
        <li>Formato exacto: HH:MM:SS</li>
      </ul>
    </div>

    <!-- Validar si fecha es real -->
    <div class="definicion">
      <strong>Validar si una fecha realmente existe:</strong>
      Usa <code>checkdate()</code> para verificar si el día, mes y año son correctos.
    </div>
    <div class="codigo"><pre>
$fecha = "2024-02-30";
$partes = explode("-", $fecha);
if (count($partes) == 3 && checkdate($partes[1], $partes[2], $partes[0])) {
  echo "Fecha real válida.";
} else {
  echo "Fecha no válida.";
}
    </pre></div>
    <div class="definicion">
      <em>Importante:</em> el orden de los parámetros en <code>checkdate()</code> es mes, día y año.
    </div>

    <!-- Validar fecha y hora exactas -->
    <div class="definicion">
      <strong>Validar fecha y hora completa (DateTime):</strong>
      Usa <code>DateTime::createFromFormat()</code> para comprobar si el valor es exacto y real.
    </div>
    <div class="codigo"><pre>
$datetime = "2024-06-14 15:30:45";
$formato = "Y-m-d H:i:s";
$fechaHora = DateTime::createFromFormat($formato, $datetime);

if ($fechaHora && $fechaHora->format($formato) === $datetime) {
  echo "Fecha y hora válidas.";
}
    </pre></div>
    <div class="definicion">
      <em>Ventajas:</em> Detecta errores de formato y validez real, como días inexistentes o valores mal formateados.
    </div>

  </div>
</body>
</html>
