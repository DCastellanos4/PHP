<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 6: Número variable de parámetros</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 6</div>

    <div class="titulo-apartado">Número variable de parámetros</div>

    <div class="definicion">
      <strong>Funciones dinámicas:</strong> PHP permite definir funciones que aceptan un número indefinido de argumentos.
    </div>

    <div class="definicion">
      <strong>func_num_args():</strong> Devuelve el número total de argumentos pasados a la función.
    </div>

    <div class="definicion">
      <strong>func_get_args():</strong> Devuelve un array con todos los argumentos.
    </div>

    <div class="definicion">
      <strong>func_get_arg(n):</strong> Devuelve el argumento en la posición <code>n</code>, comenzando desde 0.
    </div>

    <div class="codigo"><pre>
function prueba() {
  $num_args = func_num_args();
  echo "Número de argumentos: $num_args<br/>\n";

  if ($num_args >= 2) {
    echo "El 2º argumento es: " . func_get_arg(1) . "<br/>\n";
  }

  $parametros = func_get_args();
  echo "Array con todos los argumentos:<br />\n";
  print_r($parametros);
}

prueba(1, 2, 3);
    </pre></div>

    <div class="titulo-apartado">Operador ... (PHP 5.6+)</div>

    <div class="definicion">
      Desde PHP 5.6 se puede usar <code>...</code> en la lista de parámetros para capturar múltiples argumentos como un array.
    </div>

    <div class="codigo"><pre>
function sumar(...$numeros) {
  $suma = 0;
  foreach ($numeros as $n) {
    $suma += $n;
  }
  return $suma;
}

echo sumar(1, 2, 3, 4); // 10
    </pre></div>

  </div>
</body>
</html>
