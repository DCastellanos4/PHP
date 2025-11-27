<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 2: Creación de objetos DateTime</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 2</div>

    <div class="titulo-apartado">Creación de objetos DateTime y formatos relativos</div>

    <div class="definicion">
      <strong>Creación básica:</strong> Podemos instanciar objetos de la clase <code>DateTime</code> usando fechas específicas o palabras clave como <code>'now'</code>, <code>'yesterday'</code> o <code>'tomorrow'</code>.
    </div>

    <div class="codigo"><pre>
$hoy = new DateTime('now');
echo "\n" . $hoy->format("Y-m-d H:i:s");

$ayer = new DateTime('yesterday');
echo "\n" . $ayer->format("Y-m-d H:i:s");

$maniana = new DateTime('tomorrow');
echo "\n" . $maniana->format("Y-m-d H:i:s");
    </pre></div>

    <div class="definicion">
      <strong>Formato relativo:</strong> PHP permite usar expresiones de tiempo relativas para construir fechas.
      Puedes consultar más en:
      <a href="http://www.php.net/manual/es/datetime.formats.relative.php" target="_blank">php.net/manual/es/datetime.formats.relative.php</a>
    </div>

  </div>
</body>
</html>
