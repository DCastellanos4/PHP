<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 6: Uso de modify() en PHP 5.2</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 6</div>

    <div class="titulo-apartado">Uso de modify() en PHP 5.2</div>

    <div class="definicion">
      <strong>DateTime::modify(string $modificador):</strong> Permite realizar ajustes sobre una fecha sin necesidad de usar objetos <code>DateInterval</code>. Es útil en versiones anteriores a PHP 5.3.
    </div>

    <div class="definicion">
      Este método puede sumar o restar días, horas, minutos, etc., usando cadenas de texto en formato relativo.
    </div>

    <div class="codigo"><pre>
// Probando año bisiesto
$nuevaFecha = new DateTime("2012-02-28");
$nuevaFecha->modify("+1 day");
echo "\n" . $nuevaFecha->format("Y-m-d"); // Imprime 2012-02-29

// Probando cambio de año
$nuevaFecha = new DateTime("2011-01-05");
$nuevaFecha->modify("-10 day");
echo "\n" . $nuevaFecha->format("Y-m-d"); // Imprime 2010-12-26

$nuevaFecha->modify("-1 hour");
$nuevaFecha->modify("+10 minutes");
    </pre></div>

  </div>
</body>
</html>
