<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 8: Arrays Predefinidos</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 8</div>

    <div class="titulo-apartado">Arrays Predefinidos en PHP</div>

    <div class="resumen">
      PHP incluye arrays superglobales accesibles desde cualquier parte del código. Se utilizan para manejar peticiones, sesiones, cookies y más, sin necesidad de ser definidos previamente.
    </div>

    <div class="definicion">
      <strong>$_GET</strong>: Contiene los valores enviados mediante el método GET (por URL).
    </div>
    <div class="codigo"><pre>
$url = $_GET['nombre'];
// http://tuweb.com/index.php?nombre=Carlos
    </pre></div>

    <div class="definicion">
      <strong>$_POST</strong>: Contiene los valores enviados desde un formulario con método POST.
    </div>
    <div class="codigo"><pre>
$nombre = $_POST['nombre'];
    </pre></div>

    <div class="definicion">
      <strong>$_REQUEST</strong>: Combina datos de $_GET, $_POST y $_COOKIE.
    </div>
    <div class="codigo"><pre>
$valor = $_REQUEST['usuario'];
    </pre></div>

    <div class="definicion">
      <strong>$_COOKIE</strong>: Contiene las cookies enviadas por el navegador del usuario.
    </div>
    <div class="codigo"><pre>
$idioma = $_COOKIE['lang'];
    </pre></div>

    <div class="definicion">
      <strong>$_SESSION</strong>: Maneja variables de sesión. Requiere <code>session_start()</code>.
    </div>
    <div class="codigo"><pre>
session_start();
$_SESSION['usuario'] = "Carlos";
echo $_SESSION['usuario'];
    </pre></div>

    <div class="definicion">
      <strong>$_SERVER</strong>: Proporciona información del servidor y entorno de ejecución.
    </div>
    <div class="codigo"><pre>
echo $_SERVER['HTTP_USER_AGENT'];
echo $_SERVER['PHP_SELF'];
    </pre></div>

    <div class="definicion">
      <strong>$_ENV</strong>: Contiene variables del entorno del sistema.
    </div>
    <div class="codigo"><pre>
echo $_ENV['PATH'];
    </pre></div>

    <div class="definicion">
      <strong>$GLOBALS</strong>: Contiene todas las variables globales del script.
    </div>
    <div class="codigo"><pre>
$nombre = "Carlos";
function saludar() {
  echo $GLOBALS['nombre'];
}
saludar(); // Muestra "Carlos"
    </pre></div>

  </div>
</body>
</html>
