<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 5: format, createFromFormat y ejemplo</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 5</div>

    <div class="titulo-apartado">format, createFromFormat y ejemplo con DateInterval</div>

    <div class="definicion">
      <strong>DateTime::format(string $format):</strong> Devuelve la fecha/hora formateada según el patrón dado. Usa los mismos formatos que la función <code>date()</code>.
    </div>

    <div class="definicion">
      Este método no utiliza configuraciones regionales, por lo tanto, todas las salidas son en inglés.
    </div>

    <div class="definicion">
      <strong>DateTime::createFromFormat(string $format, string $time [, DateTimeZone $timezone]):</strong>
      Crea un nuevo objeto <code>DateTime</code> a partir de una cadena con un formato personalizado.
    </div>

    <div class="definicion">
      <strong>Ejemplo práctico:</strong> Este ejemplo muestra cómo sumar días a una fecha y cómo PHP gestiona correctamente cambios de mes y años bisiestos.
    </div>

    <div class="codigo"><pre>
$nuevaFecha = new DateTime('2011-01-25');
$nuevaFecha->add(new DateInterval('P10D')); // PERIOD 10 DAYS
echo "\n" . $nuevaFecha->format('Y-m-d'); // Imprime 2011-02-04
    </pre></div>

  </div>
</body>
</html>
