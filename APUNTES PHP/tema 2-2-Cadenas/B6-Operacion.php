<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 6: Operación</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 6</div>

    <div class="titulo-apartado">Operación</div>

    <div class="definicion">
      <strong>strlen(cadena):</strong> Devuelve la longitud (número de caracteres) de una cadena.
    </div>
    <div class="codigo"><pre>
$cadena = "Hola que tal";
echo strlen($cadena); // 12
    </pre></div>

    <div class="definicion">
      <strong>substr(cadena, inicio [, longitud]):</strong> Devuelve una subcadena desde una posición opcionalmente con una longitud.
    </div>
    <div class="codigo"><pre>
$cad = "PATITOS";
echo substr($cad, 2);     // TITOS
echo substr($cad, 2, 3);  // TIT
echo substr($cad, -2);    // OS
echo substr($cad, 2, -3); // TI
    </pre></div>

    <div class="definicion">
      <strong>substr_replace(cadena, reemplazo, inicio [, longitud]):</strong> Reemplaza parte de una cadena con otra, sin modificar el original.
    </div>
    <div class="codigo"><pre>
$texto = "Hola a todos los chicos";
echo substr_replace($texto, "todas", 0);      // todas
echo substr_replace($texto, "todas", 7);      // Hola a todas
echo substr_replace($texto, "todas", 7, 2);   // Hola a todasdos los chicos
    </pre></div>

    <div class="definicion">
      <strong>str_replace(buscar, reemplazar, texto):</strong> Sustituye todas las apariciones del texto buscado por otro.
    </div>

    <div class="definicion">
      <strong>strtr(cadena, buscar, reemplazar):</strong> Sustituye carácter a carácter según los valores indicados.
    </div>
    <div class="codigo"><pre>
echo strtr("Hola a todos los presentes aquí", "aeiou", "AEIOU");
// Resultado: HOlA A tOdOs lOs prEsEntEs AqUÍ
    </pre></div>

    <div class="definicion">
      <strong>substr_count(cadena, patrón [, inicio, longitud]):</strong> Cuenta las veces que aparece un patrón dentro de la cadena.
    </div>
    <div class="codigo"><pre>
$cad = "Hola a todos los presentes";
echo substr_count($cad, "os"); // 2
    </pre></div>

    <div class="definicion">
      <strong>count_chars(cadena [, modo]):</strong> Devuelve información sobre los caracteres usados en una cadena (frecuencia, etc.).
    </div>

  </div>
</body>
</html>
