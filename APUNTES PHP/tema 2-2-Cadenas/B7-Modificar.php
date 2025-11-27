<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 7: Modificar</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 7</div>

    <div class="titulo-apartado">Modificar</div>

    <div class="definicion">
      <strong>rtrim(cadena [, listaChars]):</strong> Elimina espacios en blanco o caracteres específicos del final de la cadena.
    </div>

    <div class="definicion">
      <strong>chop():</strong> Es un alias de <code>rtrim()</code>.
    </div>

    <div class="definicion">
      <strong>ltrim(), trim():</strong> Eliminan espacios al principio o en ambos lados de una cadena.
    </div>

    <div class="definicion">
      <strong>str_pad(cadena, longitud, relleno [, tipo]):</strong> Rellena una cadena hasta alcanzar una longitud dada.
    </div>
    <div class="codigo"><pre>
str_pad("PHP", 8, "-", STR_PAD_BOTH); // --PHP---
    </pre></div>

    <div class="definicion">
      <strong>strtolower(), strtoupper():</strong> Convierte una cadena a minúsculas o mayúsculas.
    </div>

    <div class="definicion">
      <strong>ucfirst():</strong> Pone en mayúscula la primera letra de una cadena.
    </div>

    <div class="definicion">
      <strong>ucwords():</strong> Pone en mayúscula la primera letra de cada palabra.
    </div>

    <div class="definicion">
      <strong>addslashes():</strong> Añade barras de escape a comillas simples, dobles, barra invertida y NULL.
    </div>

    <div class="definicion">
      <strong>stripslashes():</strong> Quita las barras añadidas con <code>addslashes()</code>.
    </div>

    <div class="definicion">
      <strong>nl2br():</strong> Convierte saltos de línea a etiquetas <code>&lt;br /&gt;</code>.
    </div>
    <div class="codigo"><pre>
echo nl2br("Hola\nmundo");
// Hola<br />mundo
    </pre></div>

    <div class="definicion">
      <strong>addcslashes(cadena, lista):</strong> Añade barras de escape a los caracteres especificados.
    </div>

    <div class="definicion">
      <strong>stripcslashes():</strong> Elimina lo que <code>addcslashes()</code> ha añadido.
    </div>
    <div class="codigo"><pre>
addcslashes("Hola", "a,b"); // Hola\a
    </pre></div>

    <div class="definicion">
      <strong>quotemeta():</strong> Coloca una barra \ delante de : . , \, +, *, ? , [, ^, ] , , $, ).
    </div>

    <div class="definicion">
      <strong>htmlspecialchars():</strong> Convierte caracteres especiales a entidades HTML.<br>
      <ul>
        <li>'&' se convierte en '&amp;'</li>
        <li>‘ “ ‘ (comillas dobles) se convierte en '&quot;‘ cuando ENT_NOQUOTES no está establecido.</li>
        <li>“ ‘ " (comilla simple) se convierte en '&#039;' (o &apos;) sólo cuando ENT_QUOTES está establecido.</li>
        <li>'<' (menor que) se convierte en '&lt;'</li>
        <li>'>' (mayor que) se convierte en '&gt;‘</li>
      </ul>
    </div>

    <div class="definicion">
      <strong>htmlentities():</strong> Igual que <code>htmlspecialchars()</code>, pero convierte todos los caracteres posibles.
    </div>

    <div class="definicion">
      <strong>htmlspecialchars_decode(), html_entity_decode():</strong> Revierten los efectos de las funciones anteriores.
    </div>

    <div class="definicion">
      <strong>strtok(cadena, delimitador):</strong> Divide una cadena en tokens según el delimitador.
    </div>
    <div class="codigo"><pre>
$cadena = "hola que tal";
$palabra = strtok($cadena, " ");
    </pre></div>

    <div class="definicion">
      <strong>chunk_split(cadena [, longitud [, separador]]):</strong> Inserta el separador cada <code>n</code> caracteres.
    </div>
    <div class="codigo"><pre>
chunk_split("holaquetal", 3, '-'); // hol-aqu-eta-l-
    </pre></div>

    <div class="definicion">
      <strong>str_split(cadena [, longitud]):</strong> Convierte un string en array de fragmentos.
    </div>

    <div class="definicion">
      <strong>explode(delimitador, cadena [, límite]):</strong> Divide una cadena en partes usando un delimitador.
    </div>
    <div class="codigo"><pre>
$correo = "prueba@yahoo.com.ar";
$partes = explode("@", $correo);
echo $partes[0]; // prueba
echo $partes[1]; // yahoo.com.ar
    </pre></div>

    <div class="definicion">
      <strong>implode(delimitador, array):</strong> Une los elementos de un array en una cadena.
    </div>
    <div class="codigo"><pre>
$matriz = array(7, "julio", 2011);
echo implode(" de ", $matriz); // 7 de julio de 2011
    </pre></div>

  </div>
</body>
</html>
