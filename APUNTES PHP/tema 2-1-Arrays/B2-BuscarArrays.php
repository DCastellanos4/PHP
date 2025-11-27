<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 2: Buscar Elementos en Arrays</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 2</div>

    <div class="titulo-apartado">Buscar en Arrays</div>

    <div class="definicion">
      <strong>in_array(valor, array, strict):</strong> Devuelve true si el valor existe. Si <code>strict</code> es true, también debe coincidir el tipo.
    </div>
    <div class="codigo"><pre>
$a = array('1.10', 12.4, 1.13);

if (in_array('12.4', $a, true)) {
  echo "'12.4' encontrado (estrictamente)";
}
if (in_array(1.13, $a, true)) {
  echo "1.13 encontrado (estrictamente)";
}
    </pre></div>

    <div class="definicion">
      <strong>array_search(valor, array):</strong> Devuelve la clave del primer valor encontrado, o false si no existe.
    </div>
    <div class="codigo"><pre>
$colores = array("rojo", "verde", "azul");
$clave = array_search("verde", $colores); // $clave = 1
    </pre></div>

    <div class="definicion">
      <strong>array_keys(array [, valor]):</strong> Devuelve todas las claves. Si se indica un valor, solo devuelve las claves que lo contienen.
    </div>
    <div class="codigo"><pre>
$array = array("azul", "rojo", "verde", "azul");
print_r(array_keys($array));              // [0,1,2,3]
print_r(array_keys($array, "azul"));      // [0,3]
    </pre></div>

    <div class="definicion">
      <strong>array_values(array):</strong> Devuelve un array con todos los valores numéricamente indexados.
    </div>
    <div class="codigo"><pre>
$info = array("talla" => "XL", "color" => "rojo");
print_r(array_values($info));
    </pre></div>

    <div class="definicion">
      <strong>array_count_values(array):</strong> Devuelve cuántas veces aparece cada valor.
    </div>
    <div class="codigo"><pre>
$datos = array(1, "hola", 1, "mundo", "hola");
print_r(array_count_values($datos));
// [1 => 2, "hola" => 2, "mundo" => 1]
    </pre></div>

    <div class="titulo-apartado">Buscar con Expresiones Regulares</div>

    <div class="definicion">
      <strong>preg_grep(patrón, array):</strong> Devuelve un array con los elementos que coinciden con una expresión regular.
    </div>
    <div class="codigo"><pre>
$datos = array("intensidad", "cinta", "interior", "externo");
$filtrados = preg_grep("/in/", $datos);
// Devuelve "intensidad", "cinta", "interior"
    </pre></div>

  </div>
</body>
</html>
