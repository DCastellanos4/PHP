<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Apuntes de Programación</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Tema 3</div>

    <div class="titulo-apartado">Sentencias Condicionales en PHP</div>
    <div class="resumen">
      PHP proporciona dos formas principales de control condicional: <code>if</code>...<code>else</code>...<code>elseif</code> y <code>switch</code>...<code>case</code>.
    </div>
    <div class="codigo"><pre>
if (condición) {
  sentencia;
}

if (condición1) {
  sentencia 1;
} elseif (condición2) {
  sentencia 2;
} elseif (condición_n) {
  sentencia n;
} else {
  sentencia_n+1;
}

if (condición) {
  sentencia 1;
} else {
  sentencia 2;
}
    </pre></div>
    <div class="codigo"><pre>
switch (expresión) {
  case valor_1:
    sentencia 1;
    break;
  case valor_2:
    sentencia 2;
    break;
  ...
  case valor_n:
    sentencia n;
    break;
  default:
    sentencia n+1;
}
    </pre></div>

    <div class="titulo-apartado">Estructuras Repetitivas</div>
    <div class="codigo"><pre>
while (condición) {
  sentencias;
}
    </pre></div>
    <div class="codigo"><pre>
do {
  sentencias;
} while (condición);
    </pre></div>
    <div class="codigo"><pre>
for (inicialización; condición; incremento) {
  sentencias;
}
    </pre></div>
    <div class="codigo"><pre>
foreach ($array as $valor) {
  sentencias;
}

foreach ($array as $clave => $valor) {
  sentencias;
}
    </pre></div>

    <div class="titulo-apartado">Sentencias Especiales</div>
    <div class="codigo"><pre>
break;        // Sale de una estructura o bucle
break 2;      // Salta dos niveles anidados
    </pre></div>
    <div class="codigo"><pre>
continue;     // Salta a la siguiente iteración
continue 2;   // Salta dos niveles de anidación
    </pre></div>
  </div>
</body>
</html>
