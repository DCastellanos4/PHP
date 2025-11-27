<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 4: Configuración Inicial de Errores</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 4</div>
    <div class="titulo-apartado">Configuración Inicial de Errores</div>

    <div class="resumen">
      Al comenzar un archivo PHP, es habitual configurar la visualización de errores para facilitar el desarrollo. Esto permite identificar problemas rápidamente cuando algo falla.
    </div>

    <div class="definicion">
      <strong>1. Mostrar errores en tiempo de ejecución:</strong> Habilita la salida de errores mientras el script se ejecuta.
    </div>
    <div class="codigo"><pre>
ini_set('display_errors', 1);
    </pre></div>

    <div class="definicion">
      <strong>2. Mostrar errores durante el arranque:</strong> Muestra errores que ocurren durante la fase de inicio del script.
    </div>
    <div class="codigo"><pre>
ini_set('display_startup_errors', 1);
    </pre></div>

    <div class="definicion">
      <strong>3. Reportar todos los errores posibles:</strong> Activa el reporte completo de errores con <code>E_ALL</code>.
    </div>
    <div class="codigo"><pre>
error_reporting(E_ALL);
    </pre></div>

  </div>
</body>
</html>
