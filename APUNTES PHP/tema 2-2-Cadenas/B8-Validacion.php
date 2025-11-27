<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 8: Validación</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 8</div>

    <div class="titulo-apartado">Validación</div>

    <div class="definicion">
      <strong>filter_var(variable, filtro):</strong> Valida el contenido de una variable usando un filtro especificado.
    </div>

    <div class="definicion">
      <strong>Filtros comunes:</strong>
      <ul>
        <li><code>FILTER_VALIDATE_EMAIL</code>: Valida direcciones de correo electrónico según RFC 822.</li>
        <li><code>FILTER_VALIDATE_FLOAT</code>: Valida números reales.</li>
        <li><code>FILTER_VALIDATE_IP</code>: Valida direcciones IP.</li>
        <li><code>FILTER_VALIDATE_URL</code>: Valida URLs según RFC 2396.</li>
      </ul>
    </div>

    <div class="codigo"><pre>
$email = "usuario@ejemplo.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Email válido";
} else {
  echo "Email inválido";
}
    </pre></div>

    <div class="codigo"><pre>
$ip = "192.168.1.1";
if (filter_var($ip, FILTER_VALIDATE_IP)) {
  echo "IP válida";
}
    </pre></div>

  </div>
</body>
</html>
