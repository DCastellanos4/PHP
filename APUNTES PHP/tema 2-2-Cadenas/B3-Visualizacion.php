<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 3: Visualización</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 3</div>

    <div class="titulo-apartado">Visualización</div>

    <div class="definicion">
      <strong>echo / print:</strong> Muestran contenido, pero <code>echo</code> admite múltiples parámetros y es ligeramente más rápido.
    </div>
    <div class="codigo"><pre>
echo "Hola1", "Hola2"; // Válido
print("Hola1", "Hola2"); // Error
    </pre></div>

    <div class="definicion">
      <strong>printf(formato, argumentos):</strong> Muestra una cadena con formato según las especificaciones.
    </div>
    <div class="codigo"><pre>
$dia = 5;
$mes = 3;
$anno = 12;
printf("%02d/%02d/%04d", $dia, $mes, $anno);
// Resultado: 05/03/0012
    </pre></div>

    <div class="definicion">
      <strong>sprintf:</strong> Igual que <code>printf</code>, pero devuelve la cadena en lugar de imprimirla.
    </div>
    <div class="codigo"><pre>
$pago1 = 68.75;
$pago2 = 54.35;
$pago = $pago1 + $pago2;
$cadena = sprintf("%01.2f", $pago);
// Resultado: 123.10
    </pre></div>

    <div class="definicion">
      <strong>Especificadores de formato:</strong> Se usan en printf/sprintf para controlar el tipo de salida.
    </div>
    <div class="codigo"><pre>
%d - Entero decimal
%f - Número con coma flotante
%x / %X - Hexadecimal (minúsculas/mayúsculas)
%o - Octal
%b - Binario
%s - Cadena
%c - Caracter ASCII
%e - Notación exponencial
    </pre></div>

    <div class="definicion">
      <strong>Ejemplo con varios formatos:</strong>
    </div>
    <div class="codigo"><pre>
$number = 255.8;

printf("En decimal: %d&lt;br&gt;", $number);     // 255
printf("En hexadecimal: %x", $number);         // ff
printf("En hexadecimal: %X", $number);         // FF
printf("En octal: %o", $number);               // 377
printf("Decimal exponencial: %e", $number);    // 2.558000e+2
printf("En binario: %b", $number);             // 11111111
    </pre></div>

  </div>
</body>
</html>
