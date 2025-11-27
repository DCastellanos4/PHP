<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 4: Operadores para Arrays</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 4</div>

    <div class="titulo-apartado">Operadores para Comparar y Unir Arrays</div>

    <div class="resumen">
      PHP permite comparar y combinar arrays utilizando operadores específicos que devuelven true o false, o bien generan un nuevo array como resultado.
    </div>

    <div class="definicion">
      <strong>$a + $b</strong> → Unión. Añade los elementos de <code>$b</code> al final de <code>$a</code> si sus claves no están duplicadas. Si hay claves duplicadas, prevalece <code>$a</code>.
    </div>
    <div class="codigo"><pre>
$a = array("x" => 1, "y" => 2);
$b = array("y" => 3, "z" => 4);
$r = $a + $b;
// Resultado: ["x" => 1, "y" => 2, "z" => 4]
    </pre></div>

    <div class="definicion">
      <strong>$a == $b</strong> → Igualdad. Devuelve true si ambos arrays tienen las mismas claves y valores, sin importar el orden.
    </div>
    <div class="codigo"><pre>
$a = array("id" => 5, "nombre" => "Ana");
$b = array("nombre" => "Ana", "id" => 5);
var_dump($a == $b); // true
    </pre></div>

    <div class="definicion">
      <strong>$a === $b</strong> → Identidad. Igual que el anterior, pero también exige el mismo orden y tipos de datos.
    </div>
    <div class="codigo"><pre>
$a = array("id" => 5, "nombre" => "Ana");
$b = array("nombre" => "Ana", "id" => 5);
var_dump($a === $b); // false
    </pre></div>

    <div class="definicion">
      <strong>$a != $b</strong> y <strong>$a &lt;&gt; $b</strong> → Desigualdad. True si no son iguales (equivalentes a negar <code>==</code>).
    </div>
    <div class="codigo"><pre>
$a = array("a" => 1);
$b = array("a" => 2);
var_dump($a != $b);  // true
var_dump($a <> $b);  // true
    </pre></div>

    <div class="definicion">
      <strong>$a !== $b</strong> → No identidad. True si son diferentes en claves, valores, tipos o su orden.
    </div>
    <div class="codigo"><pre>
$a = array("id" => 5);
$b = array("id" => "5");
var_dump($a !== $b); // true (int vs string)
    </pre></div>

  </div>
</body>
</html>
