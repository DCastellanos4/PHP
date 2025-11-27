<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 3: Expresiones Regulares en Arrays</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 3</div>

    <div class="titulo-apartado">Expresiones Regulares en PHP</div>

    <div class="resumen">
      Las expresiones regulares permiten buscar patrones dentro de textos. Son útiles para validar, buscar o filtrar información en arrays con funciones como <code>preg_grep()</code>.
    </div>

    <div class="titulo-apartado">Sintaxis Básica</div>

    <table class="tabla-ejemplo">
      <thead>
        <tr>
          <th>Elemento</th>
          <th>Significado</th>
          <th>Ejemplo / Coincidencias</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>.</td>
          <td>Cualquier carácter</td>
          <td><code>ca.a</code> &rarr; casa, cama, caja</td>
        </tr>
        <tr>
          <td>^</td>
          <td>Inicio de cadena</td>
          <td><code>^Hola</code> &rarr; "Hola mundo", no "Digo hola"</td>
        </tr>
        <tr>
          <td>$</td>
          <td>Fin de cadena</td>
          <td><code>fin$</code> &rarr; "es el fin", no "finito"</td>
        </tr>
        <tr>
          <td>*</td>
          <td>0 o más repeticiones</td>
          <td><code>lo*l</code> &rarr; ll, lol, loool</td>
        </tr>
        <tr>
          <td>+</td>
          <td>1 o más repeticiones</td>
          <td><code>go+al</code> &rarr; goal, goooal</td>
        </tr>
        <tr>
          <td>?</td>
          <td>0 o 1 vez</td>
          <td><code>colou?r</code> &rarr; color, colour</td>
        </tr>
        <tr>
          <td>{n}</td>
          <td>Exactamente n veces</td>
          <td><code>a{3}</code> &rarr; aaa</td>
        </tr>
        <tr>
          <td>[a-z]</td>
          <td>Rango de letras</td>
          <td><code>[abc]</code> &rarr; a, b o c</td>
        </tr>
        <tr>
          <td>[^a-z]</td>
          <td>No caracteres a-z</td>
          <td><code>[^0-9]</code> &rarr; todo excepto dígitos</td>
        </tr>
        <tr>
          <td>(...)</td>
          <td>Agrupación</td>
          <td><code>(abc)+</code> &rarr; abc, abcabc</td>
        </tr>
        <tr>
          <td>a|b</td>
          <td>Alternativa</td>
          <td><code>rojo|verde</code> &rarr; coincide con uno u otro</td>
        </tr>
        <tr>
          <td>\.</td>
          <td>Carácter especial literal</td>
          <td><code>\.</code> &rarr; punto literal</td>
        </tr>
      </tbody>
    </table>

    <div class="titulo-apartado">Aplicación con Arrays</div>

    <div class="definicion">
      <strong>preg_grep():</strong> devuelve los valores del array que coincidan con el patrón.
    </div>
    <div class="codigo"><pre>
$nombres = array("Carlos", "Clara", "Ana", "Raúl", "Cristina");

$coinciden = preg_grep("/^C/", $nombres); // Solo nombres que empiezan con C

print_r($coinciden);
// Resultado: Carlos, Clara, Cristina
    </pre></div>

  </div>
</body>
</html>
