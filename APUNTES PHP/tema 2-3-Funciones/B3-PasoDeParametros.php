<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 3: Paso de parámetros</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 3</div>

    <div class="titulo-apartado">Paso de parámetros</div>

    <div class="definicion">
      <strong>Por valor:</strong> Se pasa una copia del valor. Modificar el parámetro dentro de la función <strong>no afecta</strong> al valor original.
    </div>

    <div class="codigo"><pre>
function incrementa($a) {
  $a = $a + 1;
}
$a = 1;
incrementa($a);
echo $a; // Muestra 1
    </pre></div>

    <div class="definicion">
      <strong>Por referencia:</strong> Se pasa una referencia al valor original. Los cambios dentro de la función <strong>afectan</strong> a la variable fuera.
    </div>

    <div class="codigo"><pre>
function incrementa(&$a) {
  $a = $a + 1;
}
$a = 1;
incrementa($a);
echo $a; // Muestra 2
    </pre></div>

    <div class="definicion">
      <strong>Nota:</strong> Aunque se pase por referencia, en la llamada no se usa el símbolo <code>&</code>. Esta forma está obsoleta desde PHP 5.4.0.
    </div>

    <div class="titulo-apartado">Parámetros por defecto</div>

    <div class="definicion">
      <strong>Parámetros por defecto:</strong> Son valores que se asignan si no se proporciona un argumento en la llamada a la función.
    </div>

    <div class="codigo"><pre>
function muestranombre($titulo = "Sr.") {
  echo "Estimado $titulo:\n";
}
muestranombre();         // Estimado Sr.:
muestranombre("Prof.");  // Estimado Prof.:
    </pre></div>

    <div class="codigo"><pre>
function muestranombre($apel, $titulo = "Sr.") {
  echo "Estimado $titulo $apel:\n";
}
muestranombre("Fernández");            // Estimado Sr. Fernández:
muestranombre("Fernández", "Prof.");   // Estimado Prof. Fernández:
    </pre></div>

    <div class="definicion">
      <strong>Regla:</strong> Los parámetros con valores por defecto deben ir siempre al final de la lista de parámetros.
    </div>

  </div>
</body>
</html>
