<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 7: Funciones variables</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 7</div>

    <div class="titulo-apartado">Funciones variables</div>

    <div class="definicion">
      <strong>Funciones variables:</strong> Se puede asignar el nombre de una función a una variable y luego llamarla usando paréntesis.
    </div>

    <div class="codigo"><pre>
function prueba($arg = '') {
  echo "Estamos en la función prueba(); y el argumento es '$arg'.<br>\n";
}

$func = "prueba";
$func('hola'); // Esto llama a prueba('hola')
    </pre></div>

    <div class="definicion">
      <strong>Restricción:</strong> No se puede usar funciones variables con <code>echo()</code>, <code>print()</code>, <code>unset()</code>, <code>isset()</code>, <code>empty()</code>, <code>include()</code>, <code>require()</code> y derivados.
    </div>

  </div>
</body>
</html>
