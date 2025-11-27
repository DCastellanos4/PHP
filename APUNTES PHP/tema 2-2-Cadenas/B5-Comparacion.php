<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 5: Comparación</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 5</div>

    <div class="titulo-apartado">Comparación</div>

    <div class="definicion">
      <strong>strcmp(cad1, cad2):</strong> Compara dos cadenas. Es <code>case-sensitive</code>. Devuelve:
      <ul>
        <li>0 si son iguales</li>
        <li>&gt; 0 si cad1 &gt; cad2</li>
        <li>&lt; 0 si cad1 &lt; cad2</li>
      </ul>
    </div>
    <div class="codigo"><pre>
strcmp("Hola", "hola"); // Resultado: distinto de 0
    </pre></div>

    <div class="definicion">
      <strong>strcasecmp(cad1, cad2):</strong> Igual que <code>strcmp</code>, pero insensible a mayúsculas y minúsculas.
    </div>
    <div class="codigo"><pre>
strcasecmp("Hola", "hola"); // Resultado: 0 (iguales)
    </pre></div>

    <div class="definicion">
      <strong>strncmp(cad1, cad2, longitud):</strong> Compara sólo los primeros <code>n</code> caracteres.
    </div>
    <div class="codigo"><pre>
strncmp("Paco", "Paca", 4); // Resultado: distinto
strncasecmp("Paco", "Paca", 2); // Resultado: iguales
    </pre></div>

    <div class="definicion">
      <strong>strnatcmp(cad1, cad2):</strong> Realiza una comparación "natural" (teniendo en cuenta el valor numérico si existe).
    </div>
    <div class="codigo"><pre>
strcmp("10", "2");       // Resultado: -1 (10 &lt; 2)
strnatcmp("10", "2");    // Resultado: 1  (10 &gt; 2)
    </pre></div>

  </div>
</body>
</html>
