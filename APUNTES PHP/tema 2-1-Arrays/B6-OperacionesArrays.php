<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 6: Operaciones sobre Arrays</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 6</div>

    <div class="titulo-apartado">Intersección de Arrays</div>

    <div class="definicion">
      <strong>array_intersect()</strong>: Devuelve los valores comunes entre arrays (solo valores, sin claves).
    </div>
    <div class="codigo"><pre>
$a = array("a" => "verde", "b" => "rojo", "c" => "azul");
$b = array("verde", "amarillo", "rojo");
$resultado = array_intersect($a, $b);
// Resultado: ["a" => "verde", "b" => "rojo"]
    </pre></div>

    <div class="definicion">
      <strong>array_intersect_assoc()</strong>: Igual que <code>array_intersect()</code>, pero también compara las claves.
    </div>
    <div class="codigo"><pre>
$a = array("a" => "verde", "b" => "rojo");
$b = array("a" => "verde", "c" => "rojo");
$r = array_intersect_assoc($a, $b);
// Resultado: ["a" => "verde"]
    </pre></div>

    <div class="titulo-apartado">Eliminar Elementos Duplicados</div>

    <div class="definicion">
      <strong>array_unique()</strong>: Elimina valores duplicados de un array (conserva la primera aparición).
    </div>
    <div class="codigo"><pre>
$valores = array(1, "uno", 1, "dos", "uno");
$resultado = array_unique($valores);
// Resultado: [0 => 1, 1 => "uno", 3 => "dos"]
    </pre></div>

    <div class="titulo-apartado">Combinar Arrays</div>

    <div class="definicion">
      <strong>array_combine()</strong>: Usa un array para las claves y otro para los valores.
    </div>
    <div class="codigo"><pre>
$claves = array("nombre", "edad");
$valores = array("Carlos", 40);
$persona = array_combine($claves, $valores);
// Resultado: ["nombre" => "Carlos", "edad" => 40]
    </pre></div>

    <div class="titulo-apartado">Rango de Valores</div>

    <div class="definicion">
      <strong>range()</strong>: Crea un array con valores en un rango.
    </div>
    <div class="codigo"><pre>
$numeros = range(5, 10);       // [5,6,7,8,9,10]
$pares = range(0, 50, 10);     // [0,10,20,30,40,50]
$letras = range("a", "f");     // ["a","b","c","d","e","f"]
    </pre></div>

    <div class="titulo-apartado">Compactar Variables</div>

    <div class="definicion">
      <strong>compact()</strong>: Crea un array asociativo a partir de variables existentes.
    </div>
    <div class="codigo"><pre>
$ciudad = "Madrid";
$pais = "España";
$datos = compact("ciudad", "pais");
// Resultado: ["ciudad" => "Madrid", "pais" => "España"]
    </pre></div>

    <div class="titulo-apartado">Desordenar Arrays</div>

    <div class="definicion">
      <strong>shuffle()</strong>: Reorganiza los elementos de forma aleatoria.
    </div>
    <div class="codigo"><pre>
$colores = array("rojo", "verde", "azul", "amarillo");
shuffle($colores);
print_r($colores); // Orden aleatorio
    </pre></div>

  </div>
</body>
</html>
