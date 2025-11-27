<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 9: Funciones anónimas</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 9</div>

    <div class="titulo-apartado">Funciones anónimas</div>

    <div class="definicion">
      <strong>Funciones anónimas (closures):</strong> Son funciones que no tienen un nombre asignado. Se pueden almacenar en variables, pasar como argumentos, o devolver desde otras funciones.
    </div>

    <div class="codigo"><pre>
$saludo = function($nombre) {
  printf("Hola %s\r\n", $nombre);
};

$saludo('Mundo'); // Hola Mundo
$saludo('PHP');   // Hola PHP
    </pre></div>

    <div class="definicion">
      <strong>Uso común:</strong> Muy útiles en programación funcional y callbacks.
    </div>

  </div>
</body>
</html>
