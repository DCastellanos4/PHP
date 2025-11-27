<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 5: Devolución de valores</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 5</div>

    <div class="titulo-apartado">Devolución de valores</div>

    <div class="definicion">
      <strong>return:</strong> Es la palabra reservada que se usa para devolver un valor desde una función.
    </div>

    <div class="definicion">
      <strong>Uso de return:</strong> El valor devuelto puede asignarse a una variable o utilizarse dentro de una expresión.
    </div>

    <div class="codigo"><pre>
function cuadrado($n) {
  return $n * $n;
}

$resultado = cuadrado(4);
echo $resultado; // 16
    </pre></div>

    <div class="definicion">
      <strong>Fin de ejecución:</strong> Al llegar a <code>return</code>, la función se termina inmediatamente. Ninguna instrucción posterior será ejecutada.
    </div>

    <div class="codigo"><pre>
function ejemplo() {
  return "hola";
  echo "esto no se ejecuta";
}
    </pre></div>

    <div class="definicion">
      <strong>Un solo valor:</strong> Una función solo puede devolver un valor. Para devolver múltiples valores, se puede usar un array.
    </div>

    <div class="codigo"><pre>
function datos() {
  return ["Juan", 25];
}

list($nombre, $edad) = datos();
echo "$nombre tiene $edad años"; // Juan tiene 25 años
    </pre></div>

  </div>
</body>
</html>
