<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 2: Conversiones de Datos</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 2</div>
    <div class="titulo-apartado">Conversiones de Datos</div>

    <div class="resumen">
      PHP convierte automáticamente el tipo de datos en muchas situaciones. También es posible hacer conversiones manuales entre tipos como string, int, float o bool.
    </div>

    <div class="definicion">
      <strong>Conversión automática:</strong> PHP convierte el tipo según el contexto.
    </div>
    <div class="codigo"><pre>
$numero = "5";     // Es una cadena
$suma = $numero + 10;  // PHP lo convierte a entero automáticamente
echo $suma; // Muestra: 15
    </pre></div>

    <div class="definicion">
      <strong>Conversión manual con <code>(tipo)</code>:</strong> Se puede forzar el tipo de variable.
    </div>
    <div class="codigo"><pre>
$texto = "123.45";
$entero = (int) $texto;
$decimal = (float) $texto;

echo $entero;  // Muestra: 123
echo $decimal; // Muestra: 123.45
    </pre></div>

    <div class="definicion">
      <strong>Convertir a booleano:</strong> Cualquier valor puede convertirse a <code>true</code> o <code>false</code>.
    </div>
    <div class="codigo"><pre>
$var = "";
if ((bool)$var === false) {
  echo "Está vacío o es falso.";
}
    </pre></div>

    <div class="definicion">
      <strong>Conversión con funciones nativas:</strong> Existen funciones específicas como <code>intval()</code>, <code>floatval()</code>, <code>strval()</code>.
    </div>
    <div class="codigo"><pre>
$texto = "89.99";
$entero = intval($texto);   // 89
$decimal = floatval($texto); // 89.99
$cadena = strval(123);       // "123"
    </pre></div>

    <div class="definicion">
      <strong>Convertir arrays a cadenas y viceversa:</strong> Mediante <code>implode()</code> y <code>explode()</code>.
    </div>
    <div class="codigo"><pre>
$frutas = ["manzana", "pera", "naranja"];
$cadena = implode(", ", $frutas); // "manzana, pera, naranja"

$nueva = explode(", ", $cadena); // Array de nuevo
echo $nueva[1]; // Muestra: pera
    </pre></div>

  </div>
</body>
</html>
