<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 7: Ordenar Arrays</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 7</div>

    <div class="titulo-apartado">Ordenar por Valor</div>

    <div class="definicion">
      <strong>sort()</strong>: Ordena los valores de menor a mayor. Reindexa el array.
    </div>
    <div class="codigo"><pre>
$numeros = array(3, 1, 4, 2);
sort($numeros); // [0 => 1, 1 => 2, 2 => 3, 3 => 4]
    </pre></div>

    <div class="definicion">
      <strong>rsort()</strong>: Orden inverso (mayor a menor). También reindexa.
    </div>
    <div class="codigo"><pre>
rsort($numeros); // [0 => 4, 1 => 3, 2 => 2, 3 => 1]
    </pre></div>

    <div class="definicion">
      <strong>asort()</strong>: Ordena por valor manteniendo la asociación de claves.
    </div>
    <div class="codigo"><pre>
$notas = array("Juan" => 8, "Ana" => 9, "Luis" => 7);
asort($notas); // ["Luis"=>7, "Juan"=>8, "Ana"=>9]
    </pre></div>

    <div class="definicion">
      <strong>arsort()</strong>: Ordena de mayor a menor, manteniendo claves.
    </div>
    <div class="codigo"><pre>
arsort($notas); // ["Ana"=>9, "Juan"=>8, "Luis"=>7]
    </pre></div>

    <div class="titulo-apartado">Ordenar por Clave</div>

    <div class="definicion">
      <strong>ksort()</strong>: Ordena por clave (alfabéticamente o numéricamente ascendente).
    </div>
    <div class="codigo"><pre>
$datos = array("b" => 2, "a" => 1, "c" => 3);
ksort($datos); // ["a"=>1, "b"=>2, "c"=>3]
    </pre></div>

    <div class="definicion">
      <strong>krsort()</strong>: Ordena por clave en orden descendente.
    </div>
    <div class="codigo"><pre>
krsort($datos); // ["c"=>3, "b"=>2, "a"=>1]
    </pre></div>

    <div class="titulo-apartado">Ordenación con Función Personalizada</div>

    <div class="definicion">
      <strong>usort()</strong>: Ordena por valor usando una función de comparación del usuario. Reindexa.
    </div>
    <div class="codigo"><pre>
$edades = array(20, 45, 30);
usort($edades, function($a, $b) {
  return $a <=> $b;
});
    </pre></div>

    <div class="definicion">
      <strong>uksort()</strong>: Ordena por clave usando función personalizada.
    </div>
    <div class="codigo"><pre>
$personas = array("carlos" => 1, "ana" => 2);
uksort($personas, function($a, $b) {
  return strcmp($a, $b);
});
    </pre></div>

    <div class="definicion">
      <strong>uasort()</strong>: Ordena por valor manteniendo claves, usando función personalizada.
    </div>
    <div class="codigo"><pre>
uasort($personas, function($a, $b) {
  return $b <=> $a; // Orden descendente
});
    </pre></div>

    <div class="titulo-apartado">Ordenar Varios Arrays a la Vez</div>

    <div class="definicion">
      <strong>array_multisort()</strong>: Permite ordenar varios arrays en paralelo o arrays multidimensionales por columnas.
    </div>
    <div class="codigo"><pre>
$nombres = array("Carlos", "Ana", "Luis");
$edades  = array(30, 25, 35);

array_multisort($edades, SORT_ASC, $nombres);
// Ordena por edades, y reordena $nombres en consecuencia
    </pre></div>

  </div>
</body>
</html>
