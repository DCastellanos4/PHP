<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 4: Estructuras de Control</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 4</div>
    <div class="titulo-apartado">Estructuras de Control</div>

    <div class="resumen">
      Las estructuras de control permiten repetir instrucciones o seleccionar entre múltiples caminos según condiciones. En este bloque se explican las más utilizadas en PHP: bucles (<code>while</code>, <code>for</code>, <code>foreach</code>) y <code>switch</code>.
    </div>

    <!-- WHILE -->
    <div class="definicion">
      <strong><code>while</code>:</strong> Ejecuta un bloque mientras la condición sea verdadera.
    </div>
    <div class="codigo"><pre>
$i = 1;
while ($i <= 3) {
  echo "Iteración $i<br>";
  $i++;
}
    </pre></div>

    <!-- DO WHILE -->
    <div class="definicion">
      <strong><code>do...while</code>:</strong> Similar a <code>while</code>, pero asegura al menos una ejecución.
    </div>
    <div class="codigo"><pre>
$j = 1;
do {
  echo "Número $j<br>";
  $j++;
} while ($j <= 3);
    </pre></div>

    <!-- FOR -->
    <div class="definicion">
      <strong><code>for</code>:</strong> Ideal para recorrer secuencias numéricas con pasos definidos.
    </div>
    <div class="codigo"><pre>
for ($k = 0; $k &lt; 5; $k++) {
  echo "Valor: $k<br>";
}
    </pre></div>

    <!-- FOREACH -->
    <div class="definicion">
      <strong><code>foreach</code>:</strong> Especialmente útil para recorrer arrays.
    </div>
    <div class="codigo"><pre>
$colores = ["rojo", "verde", "azul"];
foreach ($colores as $color) {
  echo "Color: $color<br>";
}
    </pre></div>

    <!-- SWITCH -->
    <div class="definicion">
      <strong><code>switch</code>:</strong> Evalúa una variable contra múltiples posibles valores.
    </div>
    <div class="codigo"><pre>
$dia = "lunes";

switch ($dia) {
  case "lunes":
    echo "Inicio de semana";
    break;
  case "viernes":
    echo "Fin de semana cercano";
    break;
  default:
    echo "Día normal";
}
    </pre></div>

  </div>
</body>
</html>
