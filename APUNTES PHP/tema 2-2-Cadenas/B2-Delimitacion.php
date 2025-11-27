<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 2: Delimitación</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 2</div>

    <div class="titulo-apartado">Delimitación</div>

    <div class="definicion">
      <strong>Comillas dobles (" "):</strong> Interpretan variables y caracteres especiales como <code>\n</code> o <code>\t</code>.
    </div>
    <div class="codigo"><pre>
$var1 = 5;
$cad1 = "hola.\n\$var1=$var1";
// Resultado: hola.
// $var1=5
    </pre></div>

    <div class="definicion">
      <strong>Comillas simples (' '):</strong> No interpretan variables ni secuencias de escape (excepto \\ y \').
    </div>
    <div class="codigo"><pre>
$var1 = 5;
$cad2 = 'hola.\n\$var1=$var1';
// Resultado: hola.\n$var1=$var1
    </pre></div>

    <div class="definicion">
      <strong>Heredoc:</strong> Sintaxis alternativa para definir cadenas largas. Interpreta variables igual que las comillas dobles.
    </div>
    <div class="codigo"><pre>
$a = 7;
$cad3 = <<<FICAD
Esto es un ejemplo de cadena.
La variable \$a vale $a.
Ahora termina la cadena:
FICAD;
    </pre></div>

    <div class="definicion">
      <strong>Concatenación ( . ):</strong> Une varias cadenas de texto.
    </div>
    <div class="codigo"><pre>
$cad1 = "Hola ";
$cad2 = "mundo";
$cad3 = $cad1 . $cad2;
// Resultado: Hola mundo
    </pre></div>

    <div class="definicion">
      <strong>Acceso a caracteres:</strong> Se accede a un carácter concreto como si fuera un array.
    </div>
    <div class="codigo"><pre>
$cadena = "PHP";
echo $cadena[1]; // Muestra: H
    </pre></div>
  </div>
</body>
</html>
