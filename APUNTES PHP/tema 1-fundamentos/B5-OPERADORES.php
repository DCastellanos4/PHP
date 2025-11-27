<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 5: Operadores en PHP</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 5</div>
    <div class="titulo-apartado">Operadores en PHP</div>

    <div class="resumen">
      En este bloque se agrupan los principales operadores del lenguaje PHP: aritméticos, combinados, de comparación, lógicos y el operador ternario.
    </div>

    <!-- Operadores Aritméticos -->
    <div class="definicion">
      <strong>Operadores aritméticos:</strong> Permiten realizar operaciones matemáticas básicas.
    </div>
    <div class="codigo"><pre>
$a = 10;
$b = 3;

echo $a + $b; // Suma → 13
echo $a - $b; // Resta → 7
echo $a * $b; // Multiplicación → 30
echo $a / $b; // División → 3.333...
echo $a % $b; // Módulo → 1
echo $a ** $b; // Potencia → 1000
    </pre></div>

    <!-- Operadores combinados -->
    <div class="definicion">
      <strong>Operadores combinados:</strong> Asignan y operan al mismo tiempo.
    </div>
    <div class="codigo"><pre>
$x = 5;
$x += 3;  // $x = 8
$x -= 2;  // $x = 6
$x *= 4;  // $x = 24
$x /= 6;  // $x = 4
$x %= 3;  // $x = 1
    </pre></div>

    <!-- Operadores de comparación -->
    <div class="definicion">
      <strong>Operadores de comparación:</strong> Comparan valores y devuelven true o false.
    </div>
    <div class="codigo"><pre>
$a = 5;
$b = "5";

var_dump($a == $b);  // true (igual valor)
var_dump($a === $b); // false (diferente tipo)
var_dump($a != 6);   // true
var_dump($a !== $b); // true
var_dump($a > 3);    // true
var_dump($a <= 4);   // false
    </pre></div>

    <!-- Operadores lógicos -->
    <div class="definicion">
      <strong>Operadores lógicos:</strong> Se usan en condiciones para combinar múltiples expresiones booleanas.
    </div>
    <div class="codigo"><pre>
$edad = 20;
$activo = true;

if ($edad >= 18 && $activo) {
  echo "Puede acceder";
}

if ($edad < 18 || !$activo) {
  echo "Acceso restringido";
}
    </pre></div>

    <!-- Operador ternario -->
    <div class="definicion">
      <strong>Operador ternario (<code>condición ? valorSi : valorNo</code>):</strong> Evalúa una condición en una sola línea.
    </div>
    <div class="codigo"><pre>
$usuario = "admin";

$mensaje = ($usuario == "admin") ? "Acceso total" : "Acceso limitado";
echo $mensaje;
    </pre></div>

  </div>
</body>
</html>
