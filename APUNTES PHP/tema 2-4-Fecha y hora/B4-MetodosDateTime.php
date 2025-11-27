<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 4: Métodos DateTime</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 4</div>

    <div class="titulo-apartado">Métodos add, sub, modify y diff</div>

    <div class="definicion">
      <strong>DateTime::add(DateInterval $interval):</strong> Añade un intervalo de tiempo (días, meses, años, horas, minutos, segundos) al objeto <code>DateTime</code>. Disponible desde PHP 5.3.
    </div>

    <div class="definicion">
      <strong>DateTime::sub(DateInterval $interval):</strong> Sustrae un intervalo del objeto <code>DateTime</code>. Disponible desde PHP 5.3.
    </div>

    <div class="definicion">
      <strong>DateTime::modify(string $modify):</strong> Modifica la fecha y hora según una cadena de formato relativa. Disponible desde PHP 5.2.
    </div>

    <div class="definicion">
      <strong>DateTime::diff(DateTime $datetime2):</strong> Calcula la diferencia entre dos objetos <code>DateTime</code> y devuelve un objeto <code>DateInterval</code>. Disponible desde PHP 5.3.
    </div>

  </div>
</body>
</html>
