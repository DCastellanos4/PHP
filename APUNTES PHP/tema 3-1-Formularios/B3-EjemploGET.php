<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 3: Codificación GET y urlencode()</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 3</div>

    <div class="titulo-apartado">Codificación de parámetros GET</div>

    <div class="definicion">
      <strong>URL codificada:</strong> Los parámetros se añaden a la URL tras un <code>?</code> y se separan con <code>&</code>. Algunos caracteres especiales deben codificarse según la norma <code>RFC 1738</code>.
    </div>

    <div class="definicion">
      <strong>Ejemplos de codificación:</strong>
      <ul>
        <li>Espacios: <code>" "</code> → <code>%20</code> o <code>+</code></li>
        <li><code>#</code> → <code>%23</code></li>
        <li><code>&</code> → <code>%26</code></li>
      </ul>
    </div>

    <div class="titulo-apartado">urlencode() y urldecode()</div>

    <div class="definicion">
      <strong>urlencode(cadena):</strong> Codifica una cadena para ser usada en una URL. <br>
      <strong>urldecode(cadena):</strong> Decodifica una cadena codificada. (PHP lo hace automáticamente en la recepción)
    </div>

    <div class="codigo"><pre>
&lt;?php
$user = "Álvaro Gil";
$uid = "13&05";

// INCORRECTO: sin codificar
echo '&lt;a href="procesa.php?user=' . $user . '&uid=' . $uid . '"&gt;Enlace&lt;/a&gt;';

// CORRECTO: codificando los valores
echo '&lt;a href="procesa.php?user=' . urlencode($user) . '&uid=' . urlencode($uid) . '"&gt;Enlace codificado&lt;/a&gt;';
?&gt;
    </pre></div>

    <div class="definicion">
      <strong>Resultado codificado:</strong>
      <br>
      <code>&lt;a href="procesa.php?user=%C1lvaro+Gil&amp;uid=13%2605"&gt;</code>
    </div>

    <div class="definicion">
      <strong>Nota:</strong> No es necesario aplicar <code>urldecode()</code> al recibir datos en PHP. PHP decodifica automáticamente los parámetros entrantes.
    </div>

  </div>
</body>
</html>
