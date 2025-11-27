<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 3: Información práctica útil</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 3</div>
    <div class="titulo-apartado">Información práctica: redirecciones y archivos incluidos</div>

    <!-- Redirección con header -->
    <div class="definicion">
      <strong>Redirigir a otra página PHP con <code>header()</code>:</strong>
      Se utiliza para enviar al navegador una cabecera HTTP que cambia de página.
    </div>
    <div class="codigo"><pre>
header("Location: menu.php");
exit; // Muy importante: detiene la ejecución
    </pre></div>

    <div class="definicion">
      <strong>¡Atención!</strong>
      <ul>
        <li>La función <code>header()</code> debe ejecutarse antes de enviar cualquier salida HTML.</li>
        <li>Se recomienda usar <code>exit</code> justo después para evitar que se siga ejecutando el script.</li>
      </ul>
    </div>

    <!-- Tabla de diferencias entre include y require -->
    <div class="definicion">
      <strong>Diferencias entre <code>include</code>, <code>require</code> y sus variantes:</strong>
    </div>
    <table class="tabla-ejemplo">
      <tr>
        <th>Instrucción</th>
        <th>¿Obliga a que el archivo exista?</th>
        <th>¿Detiene el script si falla?</th>
        <th>¿Incluye una vez o varias?</th>
      </tr>
      <tr>
        <td><code>include</code></td>
        <td>No</td>
        <td>No</td>
        <td>Cada vez que se llama</td>
      </tr>
      <tr>
        <td><code>require</code></td>
        <td>Sí</td>
        <td>Sí</td>
        <td>Cada vez que se llama</td>
      </tr>
      <tr>
        <td><code>include_once</code></td>
        <td>No</td>
        <td>No</td>
        <td>Solo la primera vez</td>
      </tr>
      <tr>
        <td><code>require_once</code></td>
        <td>Sí</td>
        <td>Sí</td>
        <td>Solo la primera vez</td>
      </tr>
    </table>

    <!-- Recomendaciones -->
    <div class="definicion">
      <strong>¿Cuándo usar cada uno?</strong>
      <ul>
        <li><code>require</code> o <code>require_once</code>: para archivos esenciales (por ejemplo, funciones, conexión...)</li>
        <li><code>include</code> o <code>include_once</code>: para archivos no críticos como plantillas, menús, cabeceras...</li>
        <li><code>require_once</code>: más seguro en la mayoría de casos para evitar múltiples inclusiones.</li>
      </ul>
    </div>

  </div>
</body>
</html>
