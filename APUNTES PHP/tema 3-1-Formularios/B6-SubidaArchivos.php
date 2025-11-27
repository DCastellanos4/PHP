<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 6: Subida de archivos al servidor</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 6</div>

    <div class="titulo-apartado">Formulario para subir archivos</div>

    <div class="definicion">
      Para permitir la subida de archivos, el formulario debe tener el atributo <code>enctype="multipart/form-data"</code>.
    </div>

    <div class="codigo"><pre>
&lt;form action="procesa.php" method="post" enctype="multipart/form-data"&gt;
  Selecciona un archivo: &lt;input type="file" name="fichero"&gt;
  &lt;input type="submit" value="Subir archivo"&gt;
&lt;/form&gt;
    </pre></div>

    <div class="titulo-apartado">$_FILES</div>

    <div class="definicion">
      PHP guarda la información del archivo subido en el array <code>$_FILES</code>.
    </div>

    <div class="codigo"><pre>
$_FILES['fichero']['name']      // Nombre original
$_FILES['fichero']['type']      // Tipo MIME
$_FILES['fichero']['size']      // Tamaño en bytes
$_FILES['fichero']['tmp_name']  // Ruta temporal
$_FILES['fichero']['error']     // Código de error
    </pre></div>

    <div class="titulo-apartado">Configuración en php.ini</div>

    <div class="definicion">
      Parámetros importantes:
      <ul>
        <li><code>file_uploads = On</code></li>
        <li><code>upload_max_filesize = 2M</code></li>
        <li><code>post_max_size = 8M</code></li>
      </ul>
    </div>

    <div class="titulo-apartado">Validación y guardado</div>

    <div class="definicion">
      Se recomienda comprobar que el archivo ha sido subido correctamente y darle un nombre único antes de moverlo al destino.
    </div>

    <div class="codigo"><pre>
&lt;?php
if (is_uploaded_file($_FILES['fichero']['tmp_name'])) {
  $nombre = time() . "-" . $_FILES['fichero']['name'];
  move_uploaded_file($_FILES['fichero']['tmp_name'], "uploads/" . $nombre);
  echo "Archivo subido como: " . $nombre;
} else {
  echo "Error al subir el archivo.";
}
?&gt;
    </pre></div>

    <div class="titulo-apartado">Ejemplo completo</div>

    <div class="codigo"><pre>
&lt;form action="sube.php" method="post" enctype="multipart/form-data"&gt;
  Nombre: &lt;input type="text" name="usuario"&gt;&lt;br&gt;
  Fotografía: &lt;input type="file" name="imagen"&gt;&lt;br&gt;
  &lt;input type="submit" value="Enviar"&gt;
&lt;/form&gt;

&lt;!-- sube.php --&gt;
&lt;?php
// Mostramos el nombre ingresado por el usuario desde el formulario
echo "Usuario: " . $_POST['usuario'] . "&lt;br&gt;";

// Comprobamos si el archivo se ha subido correctamente
if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {

  // Creamos un nombre único para el archivo usando la marca de tiempo
  $nombreFinal = time() . "-" . $_FILES['imagen']['name'];

  // Movemos el archivo desde su ubicación temporal al directorio "img/"
  move_uploaded_file($_FILES['imagen']['tmp_name'], "img/" . $nombreFinal);

  // Confirmamos que el archivo se ha subido correctamente
  echo "Imagen guardada como: $nombreFinal";

} else {
  // En caso de error, mostramos un mensaje al usuario
  echo "Error al subir la imagen.";
}
?&gt;
    </pre></div>

  </div>
</body>
</html>
