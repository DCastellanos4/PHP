<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 2: Acceso desde PHP</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 2</div>

    <div class="titulo-apartado">Acceso desde PHP</div>

    <div class="definicion">
      <strong>Formularios HTML:</strong> Permiten enviar datos al servidor. El atributo <code>method</code> determina si se usará <code>GET</code> o <code>POST</code> para transmitir los datos.
    </div>

    <div class="codigo"><pre>
&lt;form action="procesa.php" method="post"&gt;
  Nombre: &lt;input type="text" name="nombre"&gt;
  &lt;input type="submit" value="Enviar"&gt;
&lt;/form&gt;
    </pre></div>

    <div class="titulo-apartado">POST</div>

    <div class="definicion">
      <strong>Método POST:</strong> Envía los datos en el cuerpo del mensaje HTTP. No se muestran en la URL y permite el envío de datos extensos o binarios.
    </div>

    <div class="codigo"><pre>
&lt;!-- HTML --&gt;
&lt;form action="procesa.php" method="post"&gt;
  Nombre: &lt;input type="text" name="nombre"&gt;
  &lt;input type="submit" name="enviar" value="Enviar"&gt;
&lt;/form&gt;

&lt;!-- PHP --&gt;
&lt;?php
  echo "Hola " . $_POST['nombre'];
?&gt;
    </pre></div>

    <div class="titulo-apartado">GET</div>

    <div class="definicion">
      <strong>Método GET:</strong> Envía los datos como parte de la URL, separados por <code>?</code> y <code>&</code>. Es visible y no permite el envío de archivos.
    </div>

    <div class="codigo"><pre>
&lt;!-- Enlace generado --&gt;
&lt;a href="procesa.php?usuario=Juan"&gt;Ir a procesa.php&lt;/a&gt;

&lt;!-- PHP --&gt;
&lt;?php
  echo "Usuario: " . $_GET['usuario'];
?&gt;
    </pre></div>

    <div class="titulo-apartado">$_REQUEST</div>

    <div class="definicion">
      <strong>$_REQUEST:</strong> Contiene automáticamente datos enviados mediante <code>$_GET</code>, <code>$_POST</code> o <code>$_COOKIE</code>. Útil para formularios simples.
    </div>

    <div class="codigo"><pre>
&lt;?php
  echo $_REQUEST['nombre'];
?&gt;
    </pre></div>

    <div class="titulo-apartado">Consideraciones de seguridad</div>

    <div class="definicion">
      <strong>register_globals:</strong> Antiguamente permitía crear variables globales a partir de parámetros del formulario. Está obsoleto y desactivado por defecto por razones de seguridad.
    </div>

    <div class="definicion">
      <strong>Recomendación:</strong> Siempre acceder a los datos mediante <code>$_POST</code>, <code>$_GET</code> o <code>$_REQUEST</code> y comprobar si están definidos con <code>isset()</code>.
    </div>

    <div class="codigo"><pre>
&lt;?php
if (isset($_POST['nombre'])) {
  echo "Nombre recibido: " . $_POST['nombre'];
} else {
  echo "No se ha enviado el nombre.";
}
?&gt;
    </pre></div>

  </div>
</body>
</html>
