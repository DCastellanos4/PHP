<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 4: Ámbito de las variables</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 4</div>

    <div class="titulo-apartado">Ámbito de las variables</div>

    <div class="definicion">
      <strong>Variables locales:</strong> Definidas dentro de una función. Solo pueden usarse desde esa función y se eliminan al salir de ella.
    </div>

    <div class="codigo"><pre>
function Test() {
  $a = 0;
  echo $a;
  $a++;
}
Test(); // Imprime 0 cada vez
    </pre></div>

    <div class="definicion">
      <strong>Conflicto de nombres:</strong> Si existe una variable local y otra global con el mismo nombre, dentro de la función se usa la local.
    </div>

    <div class="definicion">
      <strong>Variables locales estáticas:</strong> Usan la palabra clave <code>static</code> y no pierden su valor al salir de la función. Mantienen su valor entre llamadas.
    </div>

    <div class="codigo"><pre>
function Test() {
  static $a = 0;
  echo $a;
  $a++;
}
Test(); // 0
Test(); // 1
Test(); // 2
    </pre></div>

    <div class="definicion">
      <strong>Variables globales:</strong> Se definen fuera de las funciones y pueden usarse dentro de estas con <code>global</code> o <code>$GLOBALS</code>.
    </div>

    <div class="codigo"><pre>
$a = 1;
function Prueba() {
  echo $a;
}
Prueba(); // Nada. $a no está definida dentro de la función
    </pre></div>

    <div class="codigo"><pre>
$a = 1;
function Prueba2() {
  global $a;
  echo $a;
}
Prueba2(); // 1
    </pre></div>

    <div class="codigo"><pre>
$a = 1;
function Prueba3() {
  echo $GLOBALS["a"];
}
Prueba3(); // 1
    </pre></div>

  </div>
</body>
</html>
