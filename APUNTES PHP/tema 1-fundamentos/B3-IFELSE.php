<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 3: Tomas de Decisiones (if / else)</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 3</div>
    <div class="titulo-apartado">Tomas de Decisiones (if / else / elseif)</div>

    <div class="resumen">
      En PHP podemos ejecutar distintas acciones según condiciones lógicas usando las estructuras <code>if</code>, <code>else</code> y <code>elseif</code>. A continuación se muestran ejemplos prácticos.
    </div>

    <div class="definicion">
      <strong>Condición básica con <code>if</code>:</strong> Ejecuta un bloque si la condición es verdadera.
    </div>
    <div class="codigo"><pre>
$edad = 18;
if ($edad >= 18) {
  echo "Eres mayor de edad.";
}
    </pre></div>

    <div class="definicion">
      <strong><code>if - else</code>:</strong> Añade una alternativa si la condición no se cumple.
    </div>
    <div class="codigo"><pre>
$edad = 16;
if ($edad >= 18) {
  echo "Puedes entrar.";
} else {
  echo "Acceso denegado.";
}
    </pre></div>

    <div class="definicion">
      <strong><code>if - elseif - else</code>:</strong> Permite múltiples condiciones encadenadas.
    </div>
    <div class="codigo"><pre>
$nota = 7;

if ($nota >= 9) {
  echo "Sobresaliente";
} elseif ($nota >= 7) {
  echo "Notable";
} elseif ($nota >= 5) {
  echo "Aprobado";
} else {
  echo "Suspendido";
}
    </pre></div>

    <div class="definicion">
      <strong>Importante:</strong> En PHP no es obligatorio usar llaves <code>{ }</code> si solo hay una instrucción, pero se recomienda para claridad.
    </div>
    <div class="codigo"><pre>
// Menos legible
if ($activo) echo "Sí";

// Más legible
if ($activo) {
  echo "Sí";
}
    </pre></div>

  </div>
</body>
</html>
