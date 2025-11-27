<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 10: Comprobación de existencia de función</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 10</div>

    <div class="titulo-apartado">Comprobación de existencia de función</div>

    <div class="definicion">
      <strong>function_exists(string $function_name):</strong> Comprueba si una función existe antes de usarla.
    </div>

    <div class="definicion">
      <strong>Resultado:</strong> Devuelve <code>TRUE</code> si la función existe (ya sea interna o definida por el usuario), y <code>FALSE</code> en caso contrario.
    </div>

    <div class="codigo"><pre>
if (function_exists('imap_open')) {
  echo "Las funciones de IMAP están disponibles.<br />\n";
} else {
  echo "Las funciones de IMAP no están disponibles.<br />\n";
}
    </pre></div>

    <div class="definicion">
      <strong>Uso recomendado:</strong> Especialmente útil antes de utilizar funciones que pueden no estar disponibles por configuración del servidor o extensiones desactivadas.
    </div>

  </div>
</body>
</html>
