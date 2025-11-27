<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 8: Clase DateTimeZone</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 8</div>

    <div class="titulo-apartado">Clase DateTimeZone</div>

    <div class="definicion">
      <strong>DateTimeZone:</strong> Esta clase representa una zona horaria y permite establecerla o modificarla en objetos <code>DateTime</code>.
    </div>

    <div class="definicion">
      Es especialmente útil cuando queremos trabajar con fechas en distintas ubicaciones geográficas.
    </div>

    <div class="codigo"><pre>
// Obtener y mostrar la hora actual en Pacific/Auckland
$zona = new DateTimeZone('Pacific/Auckland');
$fecha = new DateTime(NULL, $zona);
echo "&lt;br&gt;" . $fecha->format('H:i:s'); // Ejemplo: 01:58:02
    </pre></div>

  </div>
</body>
</html>
