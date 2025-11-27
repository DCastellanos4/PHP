<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 7: Validación de datos de formulario</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 7</div>

    <div class="titulo-apartado">Importancia de la validación</div>

    <div class="definicion">
      Toda información enviada por el usuario debe considerarse no confiable. Validar los datos evita errores y protege el sistema.
    </div>

    <div class="titulo-apartado">Tipos de validación</div>

    <div class="definicion">
      <strong>Cliente (JavaScript):</strong> Ayuda al usuario a corregir datos antes de enviarlos. <br>
      <strong>Servidor (PHP):</strong> Es la validación real y obligatoria. Protege el sistema aunque JavaScript esté desactivado.
    </div>

    <div class="titulo-apartado">Flujo típico de validación en PHP</div>

    <div class="definicion">
      <ul>
        <li>Si se ha enviado el formulario:</li>
        <ul>
          <li>Validar los datos</li>
          <li>Si hay errores, mostrar el formulario con los errores</li>
          <li>Si no hay errores, procesar los datos</li>
        </ul>
        <li>Si no se ha enviado, mostrar el formulario vacío o con valores por defecto</li>
      </ul>
    </div>

    <div class="titulo-apartado">Ejemplo práctico</div>

    <div class="codigo"><pre>
&lt;?php
$errores = [];

if (isset($_POST['enviar'])) {
  // Validar campo 'nombre'
  if (empty($_POST['nombre'])) {
    $errores[] = "El campo nombre es obligatorio.";
  }

  // Si no hay errores, procesamos
  if (count($errores) === 0) {
    echo "Formulario válido. Nombre: " . $_POST['nombre'];
  }
}
?&gt;

&lt;!-- Formulario HTML --&gt;
&lt;form action="" method="post"&gt;
  Nombre: &lt;input type="text" name="nombre" value="&lt;?php echo $_POST['nombre'] ?? ''; ?&gt;"&gt;
  &lt;br&gt;
  &lt;input type="submit" name="enviar" value="Enviar"&gt;
&lt;/form&gt;

&lt;?php
// Mostrar errores si los hay
foreach ($errores as $e) {
  echo "&lt;p style='color:red'&gt;$e&lt;/p&gt;";
}
?&gt;
    </pre></div>

    <div class="definicion">
      <strong>Consejo:</strong> Siempre usa <code>isset()</code> para comprobar que los datos existen antes de usarlos.
    </div>

  </div>
</body>
</html>
