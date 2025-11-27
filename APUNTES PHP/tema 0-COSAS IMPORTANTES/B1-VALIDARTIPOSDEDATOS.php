<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 1: Validar tipos de datos</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 1</div>
    <div class="titulo-apartado">Validar tipos de datos</div>

    <div class="definicion">
      <strong>is_numeric():</strong> Devuelve <code>true</code> si el valor es un número o una cadena numérica.
    </div>
    <div class="codigo"><pre>
$edad = "25";
if (is_numeric($edad)) {
  echo "Es un número válido.";
}
    </pre></div>

    <div class="definicion">
      <strong>is_int():</strong> Comprueba si un valor es exactamente un entero.
    </div>
    <div class="codigo"><pre>
$valor = 10;
if (is_int($valor)) {
  echo "Es un entero.";
}
    </pre></div>

    <div class="definicion">
      <strong>ctype_digit():</strong> Verifica si una cadena contiene solo dígitos (sin signos ni decimales).
    </div>
    <div class="codigo"><pre>
$cadena = "12345";
if (ctype_digit($cadena)) {
  echo "Solo contiene dígitos.";
}
    </pre></div>

    <div class="definicion">
      <strong>filter_var() con FILTER_VALIDATE_EMAIL:</strong> Comprueba si una cadena tiene formato de email válido.
    </div>
    <div class="codigo"><pre>
$email = "usuario@correo.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Email válido.";
}
    </pre></div>

    <div class="definicion">
      <strong>filter_var() con FILTER_VALIDATE_BOOLEAN:</strong> Valida si un valor puede interpretarse como booleano.
    </div>
    <div class="codigo"><pre>
$activo = "yes";
if (filter_var($activo, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) !== null) {
  echo "Booleano válido.";
}
    </pre></div>

    <div class="definicion">
      <strong>filter_var() con FILTER_VALIDATE_URL:</strong> Verifica que la cadena sea una URL válida.
    </div>
    <div class="codigo"><pre>
$url = "https://www.ejemplo.com";
if (filter_var($url, FILTER_VALIDATE_URL)) {
  echo "URL válida.";
}
    </pre></div>

    <div class="definicion">
      <strong>is_array():</strong> Comprueba si la variable es un array.
    </div>
    <div class="codigo"><pre>
$lista = ["uno", "dos", "tres"];
if (is_array($lista)) {
  echo "Es un array.";
}
    </pre></div>

    <!-- Eliminar espacios vacíos -->

<div class="definicion">
  <strong>trim():</strong> Elimina espacios en blanco al principio y al final de una cadena.
</div>
<div class="codigo"><pre>
$nombre = "  Juan  ";
$nombreLimpio = trim($nombre); // Resultado: "Juan"
</pre></div>

<div class="definicion">
  <strong>empty():</strong> Comprueba si una variable está vacía (0, "", null, false...).
</div>
<div class="codigo"><pre>
$input = "";
if (empty($input)) {
  echo "Está vacío.";
}
</pre></div>

<!-- Archivos y carpetas -->

<div class="definicion">
  <strong>file_exists():</strong> Verifica si un archivo o carpeta existe.
</div>
<div class="codigo"><pre>
$ruta = "documentos/manual.pdf";
if (file_exists($ruta)) {
  echo "Existe.";
}
</pre></div>

<div class="definicion">
  <strong>is_file():</strong> Devuelve <code>true</code> si es un archivo regular.
</div>
<div class="codigo"><pre>
if (is_file($ruta)) {
  echo "Es un archivo.";
}
</pre></div>

<div class="definicion">
  <strong>is_dir():</strong> Devuelve <code>true</code> si es un directorio.
</div>
<div class="codigo"><pre>
$carpeta = "imagenes/";
if (is_dir($carpeta)) {
  echo "Es una carpeta.";
}
</pre></div>

<!-- Validar imagen -->

<div class="definicion">
  <strong>getimagesize():</strong> Devuelve información si el archivo es una imagen válida.
</div>
<div class="codigo"><pre>
$archivo = "foto.jpg";
if (getimagesize($archivo)) {
  echo "Es una imagen válida.";
}
</pre></div>

<div class="definicion">
  <strong>mime_content_type():</strong> Devuelve el tipo MIME del archivo.
</div>
<div class="codigo"><pre>
$archivo = "foto.jpg";
$tipo = mime_content_type($archivo);
if (strpos($tipo, "image/") === 0) {
  echo "Es una imagen.";
}
</pre></div>

<div class="definicion">
  <strong>Validar formato de fecha (YYYY-MM-DD):</strong> Usa <code>preg_match()</code> para verificar estructura de fecha válida.
</div>
<div class="codigo"><pre>
$fecha = "2024-06-14";
if (preg_match("/^\d{4}-\d{2}-\d{2}$/", $fecha)) {
  echo "Formato válido de fecha.";
}
</pre></div>

<div class="definicion">
  <strong>Validar formato de hora (HH:MM:SS):</strong> Requiere dos dígitos por campo.
</div>
<div class="codigo"><pre>
$hora = "15:30:45";
if (preg_match("/^(2[0-3]|[01][0-9]):[0-5][0-9]:[0-5][0-9]$/", $hora)) {
  echo "Formato válido de hora.";
}
</pre></div>

<div class="definicion">
  <strong>Validar fecha real con checkdate():</strong> Comprueba si la fecha es válida (como 2024-02-30 no lo sería).
</div>
<div class="codigo"><pre>
$fecha = "2024-02-30";
$partes = explode("-", $fecha);
if (count($partes) == 3 && checkdate($partes[1], $partes[2], $partes[0])) {
  echo "Fecha real válida.";
} else {
  echo "Fecha no válida.";
}
</pre></div>

<div class="definicion">
  <strong>Validar fecha y hora con DateTime::createFromFormat()</strong><br>
  Comprobación combinada de formato y validez real.
</div>
<div class="codigo"><pre>
$datetime = "2024-06-14 15:30:45";
$formato = "Y-m-d H:i:s";

$fechaHora = DateTime::createFromFormat($formato, $datetime);
if ($fechaHora && $fechaHora-&gt;format($formato) === $datetime) {
  echo "Fecha y hora válidas.";
}
</pre></div>


  </div>
</body>
</html>
