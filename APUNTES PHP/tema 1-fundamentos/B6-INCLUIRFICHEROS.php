<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 6: Incluir Ficheros</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 6</div>
    <div class="titulo-apartado">Incluir Ficheros Externos</div>

    <div class="resumen">
      PHP permite incluir el contenido de otros archivos PHP en el archivo actual. Esto es útil para reutilizar código común, como cabeceras, funciones o conexiones.
    </div>

    <!-- include -->
    <div class="definicion">
      <strong><code>include</code>:</strong> Inserta el archivo indicado. Si no lo encuentra, muestra un aviso pero el script sigue ejecutándose.
    </div>
    <div class="codigo"><pre>
include "cabecera.php";
echo "Bienvenido a la página";
    </pre></div>

    <!-- require -->
    <div class="definicion">
      <strong><code>require</code>:</strong> Similar a <code>include</code>, pero si falla, detiene la ejecución del script con error fatal.
    </div>
    <div class="codigo"><pre>
require "conexion.php";
    </pre></div>

    <!-- include_once / require_once -->
    <div class="definicion">
      <strong><code>include_once</code> y <code>require_once</code>:</strong> Evitan que se cargue el mismo archivo más de una vez.
    </div>
    <div class="codigo"><pre>
include_once "funciones.php";
require_once "seguridad.php";
    </pre></div>

    <!-- tabla comparativa -->
    <div class="definicion">
      <strong>Comparativa rápida:</strong>
    </div>
    <table class="tabla-ejemplo">
      <tr>
        <th>Función</th>
        <th>Falla con error fatal</th>
        <th>Evita duplicados</th>
      </tr>
      <tr>
        <td><code>include</code></td>
        <td>No</td>
        <td>No</td>
      </tr>
      <tr>
        <td><code>require</code></td>
        <td>Sí</td>
        <td>No</td>
      </tr>
      <tr>
        <td><code>include_once</code></td>
        <td>No</td>
        <td>Sí</td>
      </tr>
      <tr>
        <td><code>require_once</code></td>
        <td>Sí</td>
        <td>Sí</td>
      </tr>
    </table>

  </div>
</body>
</html>
