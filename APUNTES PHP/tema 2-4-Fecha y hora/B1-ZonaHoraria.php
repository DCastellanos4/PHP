<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 1: Zona Horaria</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 1</div>

    <div class="titulo-apartado">Zona Horaria</div>

    <div class="definicion">
      <strong>Clase DateTime:</strong> Desde PHP 5.2 se incluye la clase <code>DateTime</code> para trabajar con fechas y horas. Antes de usarla, se debe definir la zona horaria adecuada.
    </div>

    <div class="definicion">
      <strong>Configuración en php.ini:</strong> Puede establecerse de forma global editando el archivo <code>php.ini</code> en la sección <code>[Date]</code>.
    </div>

    <div class="codigo"><pre>
; [Date]
; Defines the default timezone used by the date functions
date.timezone = Europa/Madrid
    </pre></div>

    <div class="definicion">
      <strong>Configuración en tiempo de ejecución:</strong> Se puede usar <code>date_default_timezone_set()</code> dentro del script PHP.
    </div>

    <div class="codigo"><pre>
date_default_timezone_set('Europe/Madrid');
$nuevaFecha = new DateTime(); // Se genera objeto con la fecha actual
echo $nuevaFecha->format("Y-m-d H:i:s");
    </pre></div>

    <div class="definicion">
      <strong>Precaución:</strong> Si se usa <code>date_default_timezone_set()</code> y contradice <code>php.ini</code>, puede generar un error.
    </div>

    <div class="codigo"><pre>
date_default_timezone_set('Europe/London'); // puede fallar si contradice php.ini
if (date_default_timezone_get())
    echo 'date_default_timezone_get: ' . date_default_timezone_get() . '&lt;br /&gt;';
if (ini_get('date.timezone'))
    echo 'date.timezone: ' . ini_get('date.timezone');
    </pre></div>

    <div class="definicion">
      <strong>Listado de zonas horarias válidas:</strong>
      <a href="http://www.php.net/manual/es/timezones.php" target="_blank">php.net/manual/es/timezones.php</a>
    </div>

  </div>
</body>
</html>
