<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 8: Cabeceras HTTP en PHP</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 8</div>

    <div class="titulo-apartado">¿Qué son las cabeceras HTTP?</div>

    <div class="definicion">
      Son líneas que se envían antes del contenido de la respuesta, informando al navegador sobre cómo debe manejar los datos.
    </div>

    <div class="titulo-apartado">Uso en PHP con <code>header()</code></div>

    <div class="definicion">
      La función <code>header("Cabecera: valor")</code> permite enviar cabeceras al cliente. Debe usarse antes de generar cualquier salida HTML.
    </div>

    <div class="codigo"><pre>
&lt;?php
header("Location: https://www.google.es"); // Redirige al usuario
exit;
?&gt;
    </pre></div>

    <div class="titulo-apartado">Tipos comunes de cabeceras</div>

    <div class="definicion">
      <ul>
        <li><code>Location</code>: redireccionar a otra página</li>
        <li><code>Content-Type</code>: especificar el tipo MIME</li>
        <li><code>Cache-Control</code>, <code>Pragma</code>, <code>Expires</code>: control de caché</li>
        <li><code>X-Powered-By</code>: (se puede ocultar)</li>
      </ul>
    </div>

    <div class="codigo"><pre>
&lt;?php
// No cachear la página
header("Pragma: no-cache");
header("Cache-Control: no-store");

// Indicar tipo de contenido (ej: PDF)
header("Content-Type: application/pdf");

// Descargar archivo
header("Content-Disposition: attachment; filename='archivo.pdf'");
readfile("original.pdf");
?&gt;
    </pre></div>

    <div class="titulo-apartado">Obtener cabeceras del cliente</div>

    <div class="definicion">
      Puedes acceder a las cabeceras de la petición con <code>apache_request_headers()</code> si está disponible.
    </div>

    <div class="codigo"><pre>
&lt;?php
$cabeceras = apache_request_headers();
var_dump($cabeceras);
?&gt;
    </pre></div>

    <div class="definicion">
      <strong>Importante:</strong> Todas las llamadas a <code>header()</code> deben hacerse antes de que se envíe cualquier HTML o espacio.
    </div>

  </div>
</body>
</html>
