<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 4: Comparativa entre GET y POST</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 4</div>

    <div class="titulo-apartado">Comparativa entre GET y POST</div>

    <div class="definicion">
      <strong>GET:</strong> Método utilizado para obtener datos. Los datos son visibles en la URL y están limitados en longitud. No permite enviar archivos binarios.
    </div>

    <div class="definicion">
      <strong>POST:</strong> Método utilizado para enviar datos. Los datos no se muestran en la URL y no tienen límite práctico. Permite subir archivos.
    </div>

    <div class="definicion">
      <strong>Problemas con GET:</strong> Información visible en la URL, limitada y no apta para datos sensibles.
    </div>

    <div class="definicion">
      <strong>Problemas con POST:</strong> El botón "Atrás" puede generar advertencias, y "Actualizar" puede reenviar formularios.
    </div>

    <div class="titulo-apartado">Principios generales</div>

    <div class="definicion">
      <strong>GET:</strong> Cuando se desea obtener datos sin efectos colaterales (consultas, filtros, búsquedas).
    </div>

    <div class="definicion">
      <strong>POST:</strong> Cuando se realiza una acción que modifica datos (registro, envío, eliminación).
    </div>

    <div class="titulo-apartado">Acceso a datos</div>

    <div class="definicion">
      <strong>$_GET:</strong> Datos recibidos mediante método GET o URL.
      <br><strong>$_POST:</strong> Datos recibidos mediante método POST.
      <br><strong>$_REQUEST:</strong> Unión de ambos (más cookies).
    </div>

    <div class="codigo"><pre>
&lt;form action="respuesta.php?valor=10" method="post"&gt;
  Nombre: &lt;input type="text" name="nombre"&gt;
  &lt;input type="submit" value="Enviar"&gt;
&lt;/form&gt;

&lt;?php
echo 'valor (GET): ' . $_GET['valor'] . '&lt;br&gt;';
echo 'valor (POST): ' . $_POST['valor'] . '&lt;br&gt;';
echo 'valor (REQUEST): ' . $_REQUEST['valor'] . '&lt;br&gt;';
echo 'nombre (POST): ' . $_POST['nombre'] . '&lt;br&gt;';
?&gt;
    </pre></div>

    <div class="definicion">
      <strong>Nota:</strong> <code>$_POST['valor']</code> estará vacío, ya que el parámetro <code>valor</code> fue enviado por GET.
    </div>

  </div>
</body>
</html>
