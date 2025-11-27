<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 1: Tipos de Datos</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 1</div>
    <div class="titulo-apartado">Tipos de Datos</div>

    <div class="resumen">
      PHP permite trabajar con múltiples tipos de datos que se asignan automáticamente según el valor. A continuación se explican los más comunes con ejemplos.
    </div>

    <div class="definicion">
      <strong>Entero (int):</strong> Números sin decimales.
    </div>
    <div class="codigo"><pre>
$edad = 25;
echo $edad; // Muestra: 25
    </pre></div>

    <div class="definicion">
      <strong>Flotante o decimal (float / double):</strong> Números con decimales.
    </div>
    <div class="codigo"><pre>
$precio = 10.99;
echo $precio; // Muestra: 10.99
    </pre></div>

    <div class="definicion">
      <strong>Cadena (string):</strong> Texto entre comillas simples o dobles.
    </div>
    <div class="codigo"><pre>
$nombre = "Juan";
echo $nombre; // Muestra: Juan
    </pre></div>

    <div class="definicion">
      <strong>Booleano (bool):</strong> Solo puede ser <code>true</code> o <code>false</code>.
    </div>
    <div class="codigo"><pre>
$activo = true;
if ($activo) {
  echo "Está activo";
}
    </pre></div>

    <div class="definicion">
      <strong>Array:</strong> Conjunto de valores indexados o asociativos.
    </div>
    <div class="codigo"><pre>
$colores = ["rojo", "verde", "azul"];
echo $colores[1]; // Muestra: verde
    </pre></div>

    <div class="definicion">
      <strong>NULL:</strong> Representa una variable sin valor.
    </div>
    <div class="codigo"><pre>
$usuario = null;
var_dump($usuario); // Muestra: NULL
    </pre></div>

    <div class="definicion">
      <strong>Tipo de dato mixto (tipado débil):</strong> PHP permite cambiar el tipo de una variable automáticamente.
    </div>
    <div class="codigo"><pre>
$valor = "5";
$valor = $valor + 10; // Ahora es un entero
echo $valor; // Muestra: 15
    </pre></div>

  </div>
</body>
</html>
