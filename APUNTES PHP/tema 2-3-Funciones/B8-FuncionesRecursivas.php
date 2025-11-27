<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 8: Funciones recursivas</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 8</div>

    <div class="titulo-apartado">Funciones recursivas</div>

    <div class="definicion">
      <strong>Recursividad:</strong> Una función se llama recursiva cuando en algún punto de su cuerpo se invoca a sí misma.
    </div>

    <div class="definicion">
      <strong>Peligro de recursión infinita:</strong> Si no se establece una condición de salida, la función puede llamarse indefinidamente.
    </div>

    <div class="codigo"><pre>
function recursividad($a) {
  if ($a < 20) {
    echo "$a\n";
    recursividad($a + 1);
  }
}

recursividad(1);
    </pre></div>

    <div class="definicion">
      <strong>Condición de salida:</strong> Es esencial para evitar bucles infinitos. Es el caso del <code>if ($a &lt; 20)</code> en el ejemplo anterior.
    </div>

  </div>
</body>
</html>
