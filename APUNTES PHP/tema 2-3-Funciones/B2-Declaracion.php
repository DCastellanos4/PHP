<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 2: Declaración</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 2</div>

    <div class="titulo-apartado">Declaración</div>

    <div class="definicion">
      <strong>Cabecera de una función:</strong> Se inicia con la palabra clave <code>function</code>, seguida del nombre de la función y una lista de parámetros entre paréntesis.
    </div>

    <div class="definicion">
      <strong>Reglas para el nombre:</strong> No debe llevar acentos, espacios en blanco ni caracteres especiales.
    </div>

    <div class="codigo"><pre>
function suma($x, $y) {
  $s = $x + $y;
  return $s;
}

$a = 1;
$b = 2;
$c = suma($a, $b);
print $c;
    </pre></div>

    <div class="definicion">
      <strong>Invocación:</strong> Para usar una función, se llama escribiendo su nombre con los argumentos entre paréntesis.
    </div>

    <div class="codigo"><pre>
$x;
$y;
$c = elmayor($x, $y);
echo $c;

function elmayor($a, $b) {
  if ($a > $b)
    return $a;
  return $b;
}
    </pre></div>

    <div class="titulo-apartado">Uso desde otros archivos</div>

    <div class="definicion">
      Puedes definir funciones en archivos separados y luego incluirlos en tu archivo principal con <code>include</code> o <code>require</code>.
    </div>

    <div class="codigo"><pre>
// archivo: funciones.php
function saludar($nombre) {
  return "Hola, $nombre";
}

// archivo principal
include 'funciones.php';
echo saludar("Carlos");
    </pre></div>

    <table class="tabla-ejemplo">
      <thead>
        <tr>
          <th>Función</th>
          <th>Comportamiento en error</th>
          <th>Uso típico</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><code>include</code></td>
          <td>Lanza una advertencia (warning) y continúa la ejecución</td>
          <td>Cuando el archivo no es estrictamente necesario</td>
        </tr>
        <tr>
          <td><code>require</code></td>
          <td>Lanza un error fatal y detiene la ejecución</td>
          <td>Cuando el archivo es esencial para continuar</td>
        </tr>
      </tbody>
    </table>

  </div>
</body>
</html>
