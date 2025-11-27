<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 1: Recorrer Arrays</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 1</div>

    <div class="titulo-apartado">Recorrer Arrays Secuenciales</div>

    <div class="definicion">
      <strong>for + count():</strong> útil cuando necesitas acceder al índice manualmente.
    </div>
    <div class="codigo"><pre>
$ciudades = array("París", "Madrid", "Londres");
for ($i = 0; $i < count($ciudades); $i++) {
  echo $ciudades[$i] . "&lt;br&gt;";
}
    </pre></div>

    <div class="definicion">
      <strong>foreach:</strong> la forma más directa y clara de recorrer un array.
    </div>
    <div class="codigo"><pre>
foreach ($ciudades as $ciudad) {
  echo $ciudad . "&lt;br&gt;";
}
    </pre></div>

    <div class="definicion">
      <strong>count() y sizeof():</strong> ambas devuelven el número de elementos de un array.
    </div>
    <div class="codigo"><pre>
echo count($ciudades);
echo sizeof($ciudades);
    </pre></div>

    <div class="titulo-apartado">Recorrer Arrays Asociativos con Puntero Interno</div>

    <div class="definicion">
      <strong>current():</strong> devuelve el valor actual.<br>
      <strong>pos():</strong> equivalente a <code>current()</code>.<br>
      <strong>key():</strong> devuelve la clave actual.
    </div>
    <div class="codigo"><pre>
$semana = array("lunes", "martes", "miércoles");
echo current($semana); // lunes
echo key($semana);     // 0
    </pre></div>

    <div class="definicion">
      <strong>reset():</strong> mueve el puntero al primer elemento.<br>
      <strong>end():</strong> mueve el puntero al último.<br>
      <strong>next():</strong> mueve al siguiente.<br>
      <strong>prev():</strong> mueve al anterior.
    </div>
    <div class="codigo"><pre>
reset($semana);        // Puntero al inicio
next($semana);         // martes
echo current($semana); // martes
end($semana);          // miércoles
prev($semana);         // martes otra vez
    </pre></div>

    <div class="titulo-apartado">Recorrido con list() y each()</div>

    <div class="definicion">
      <strong>list() + each():</strong> permite recorrer arrays con extracción de clave y valor.
      <br>⚠️ <em>each() está obsoleto desde PHP 7.2</em>
    </div>
    <div class="codigo"><pre>
$datos = array("uno", "dos", "tres");
reset($datos);
while (list($clave, $valor) = each($datos)) {
  echo "$clave =&gt; $valor&lt;br&gt;";
}
    </pre></div>

    <div class="definicion">
      <strong>list():</strong> asigna múltiples valores de un array numérico a variables de forma directa.
    </div>
    <div class="codigo"><pre>
list($dia1, $dia2) = array("Lunes", "Martes");
echo $dia1; // Lunes
echo $dia2; // Martes
    </pre></div>

  </div>
</body>
</html>
