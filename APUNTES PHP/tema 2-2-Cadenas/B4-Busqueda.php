<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 4: Búsqueda</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 4</div>

    <div class="titulo-apartado">Búsqueda</div>

    <div class="definicion">
      <strong>strstr(cadena, cadenaBuscada):</strong> Devuelve desde la primera aparición de la cadena buscada hasta el final. <code>Case-sensitive</code>.
    </div>
    <div class="codigo"><pre>
$email = "carmenduran@domenicoscarlat.es";
echo strstr($email, "@domenico");
// Resultado: @domenicoscarlat.es
    </pre></div>

    <div class="definicion">
      <strong>strrchr(cadena, caracter):</strong> Devuelve desde la última aparición del primer carácter hasta el final.
    </div>
    <div class="codigo"><pre>
echo strrchr("Esto es muy bonito", "so");
// Resultado: s muy bonito
    </pre></div>

    <div class="definicion">
      <strong>stristr(cadena, cadenaBuscada):</strong> Igual que <code>strstr</code> pero no distingue entre mayúsculas y minúsculas.
    </div>

    <div class="definicion">
      <strong>strpos(cadena, subcadena [, desplazamiento]):</strong> Devuelve la posición de la primera aparición de una subcadena. Devuelve <code>false</code> si no la encuentra.
    </div>
    <div class="codigo"><pre>
echo strpos("Este espacio es muy bonito", "es", 7);
// Resultado: 13
    </pre></div>

    <div class="definicion">
      <strong>strrpos(cadena, subcadena [, desplazamiento]):</strong> Devuelve la posición de la última aparición de la subcadena.
    </div>
    <div class="codigo"><pre>
echo strrpos("Este espacio es muy bonito", "es");
// Resultado: 13
    </pre></div>

    <div class="definicion">
      <strong>strspn(cadena, máscara):</strong> Devuelve la longitud del segmento inicial formado solo por caracteres de la máscara. <code>Case-sensitive</code>.
    </div>
    <div class="codigo"><pre>
strspn("Este espacio es muy bonito", "Estela"); // 4
strspn("Este espacio es muy bonito", "Estado"); // 3
strspn("Este espacio es muy bonito", "el");     // 0
    </pre></div>

    <div class="definicion">
      <strong>strcspn(cadena, máscara):</strong> Longitud de la subcadena inicial sin ninguno de los caracteres de la máscara.
    </div>

  </div>
</body>
</html>
