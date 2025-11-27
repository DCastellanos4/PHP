<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 5: Modificar Arrays</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 5</div>

    <div class="titulo-apartado">Añadir y Eliminar Elementos</div>

    <div class="definicion">
      <strong>array_push()</strong>: Inserta elementos al final.
    </div>
    <div class="codigo"><pre>
$frutas = array("manzana", "pera");
array_push($frutas, "plátano", "uva");
    </pre></div>

    <div class="definicion">
      <strong>array_pop()</strong>: Elimina el último elemento.
    </div>
    <div class="codigo"><pre>
$ultimo = array_pop($frutas);
    </pre></div>

    <div class="definicion">
      <strong>array_shift()</strong>: Elimina el primer elemento.
    </div>
    <div class="codigo"><pre>
$primero = array_shift($frutas);
    </pre></div>

    <div class="definicion">
      <strong>array_unshift()</strong>: Añade elementos al inicio.
    </div>
    <div class="codigo"><pre>
array_unshift($frutas, "kiwi");
    </pre></div>

    <div class="titulo-apartado">Aplicar Funciones</div>

    <div class="definicion">
      <strong>array_walk()</strong>: Aplica una función a cada elemento. La función recibe el valor y la clave.
    </div>
    <div class="codigo"><pre>
function aEuros(&$valor, $clave) {
  $valor = $valor / 166.386;
}
array_walk($precios, 'aEuros');
    </pre></div>

    <div class="titulo-apartado">Sustituir y Combinar Arrays</div>

    <div class="definicion">
      <strong>array_replace()</strong>: Reemplaza valores con los de otro array si coinciden las claves.
    </div>
    <div class="codigo"><pre>
$a = array("peso" => 80, "altura" => 180);
$b = array("peso" => 90);
$res = array_replace($a, $b);
    </pre></div>

    <div class="definicion">
      <strong>array_merge()</strong>: Combina arrays, sobrescribiendo claves duplicadas.
    </div>
    <div class="codigo"><pre>
$x = array("a" => 1);
$y = array("a" => 2, "b" => 3);
$r = array_merge($x, $y);
    </pre></div>

    <div class="definicion">
      <strong>array_merge_recursive()</strong>: Igual que merge, pero valores con claves repetidas se agrupan en arrays.
    </div>
    <div class="codigo"><pre>
$a = array("color" => "rojo");
$b = array("color" => "verde", "forma" => "cuadrado");
print_r(array_merge_recursive($a, $b));
    </pre></div>

    <div class="titulo-apartado">Extraer Partes</div>

    <div class="definicion">
      <strong>array_slice()</strong>: Devuelve una parte del array.
    </div>
    <div class="codigo"><pre>
$valores = array(1,2,3,4,5,6);
$sub = array_slice($valores, 2, 3); // [3,4,5]
    </pre></div>

    <div class="definicion">
      <strong>array_splice()</strong>: Elimina una parte y puede reemplazarla.
    </div>
    <div class="codigo"><pre>
$valores = array("a", "b", "c", "d");
array_splice($valores, 1, 2, array("x", "y")); // ["a", "x", "y", "d"]
    </pre></div>

    <div class="titulo-apartado">Transformar Arrays</div>

    <div class="definicion">
      <strong>implode()</strong>: Convierte un array en una cadena.
    </div>
    <div class="codigo"><pre>
$fecha = array(7, "julio", 2024);
echo implode(" de ", $fecha); // 7 de julio de 2024
    </pre></div>

  </div>
</body>
</html>
