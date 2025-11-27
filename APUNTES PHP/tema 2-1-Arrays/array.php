<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Apuntes de PHP: Arrays</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Tema 3</div>

    <div class="titulo-apartado">Arrays en PHP</div>
    <div class="resumen">
      Un array permite almacenar múltiples valores en una sola variable. PHP ofrece tres tipos principales: escalar, asociativo y multidimensional.
    </div>

    <div class="titulo-apartado">Tipos de Arrays</div>

    <div class="definicion">
      <strong>Array escalar:</strong> utiliza índices numéricos automáticos para acceder a los elementos. Se usa para listas simples y ordenadas.
    </div>
    <div class="codigo"><pre>
$numeros = array(10, 20, 30);
    </pre></div>

    <div class="definicion">
      <strong>Array asociativo:</strong> utiliza claves de texto para asociar valores. Es útil cuando los datos tienen una etiqueta significativa.
    </div>
    <div class="codigo"><pre>
$precios = array("pan" => 1.2, "leche" => 0.9);
    </pre></div>

    <div class="definicion">
      <strong>Array multidimensional:</strong> contiene otros arrays como elementos. Sirve para representar estructuras tabulares o anidadas.
    </div>
    <div class="codigo"><pre>
$alumnos = array(
  array("Ana", 20, "Madrid"),
  array("Luis", 22, "Barcelona"),
  array("Clara", 19, "Valencia")
);
    </pre></div>

    <div class="titulo-apartado">Recorrer Arrays</div>

    <div class="definicion">
      <strong>Recorrer array escalar:</strong> se puede usar <code>foreach</code> para acceder a cada elemento directamente.
    </div>
    <div class="codigo"><pre>
foreach ($numeros as $valor) {
  echo $valor;
}
    </pre></div>

    <div class="definicion">
      <strong>Recorrer array asociativo:</strong> se puede recorrer con <code>foreach</code> accediendo a clave y valor.
    </div>
    <div class="codigo"><pre>
foreach ($precios as $producto => $precio) {
  echo "$producto: $precio";
}
    </pre></div>

    <div class="definicion">
      <strong>Recorrer array multidimensional (forma 1):</strong> con <code>foreach</code> anidados. Ideal si no conoces la estructura exacta.
    </div>
    <div class="codigo"><pre>
$alumnos = array(
  array("Ana", 20, "Madrid"),
  array("Luis", 22, "Barcelona")
);

foreach ($alumnos as $alumno) {
  foreach ($alumno as $dato) {
    echo $dato . " ";
  }
  echo "&lt;br&gt;";
}
    </pre></div>

    <div class="definicion">
      <strong>Recorrer array multidimensional (forma 2):</strong> usando <code>for</code> e índices. Ideal si sabes cuántos elementos hay y qué representan.
    </div>
    <div class="codigo"><pre>
$alumnos = array(
  array("Ana", 20, "Madrid"),
  array("Luis", 22, "Barcelona")
);

for ($i = 0; $i < count($alumnos); $i++) {
  echo $alumnos[$i][0] . " tiene " . $alumnos[$i][1] .
       " años y vive en " . $alumnos[$i][2] . "&lt;br&gt;";
}
    </pre></div>

  </div>
</body>
</html>
