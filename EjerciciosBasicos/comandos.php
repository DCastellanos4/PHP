<?php
/*
    ======================================
    📌 APUNTES DE SINTAXIS BÁSICA EN PHP
    ======================================
*/

// ---------------------------
// 🔹 Comentarios
// ---------------------------
# Comentario de una línea
// Otro comentario de una línea
/*
   Comentario
   de varias líneas
*/


// ---------------------------
// 🔹 Variables
// ---------------------------
$nombre = "David";
$edad = 20;
$precio = 15.50;
$activo = true;


// ---------------------------
// 🔹 Tipos de datos comunes
// ---------------------------
// String, Integer, Float, Boolean, Array, NULL
$texto = "Hola";
$numero = 123;
$decimal = 12.5;
$booleano = false;
$arreglo = ["uno", "dos", "tres"];
$nulo = NULL;


// ---------------------------
// 🔹 Operadores
// ---------------------------

// Aritméticos
$a + $b;   // Suma
$a - $b;   // Resta
$a * $b;   // Multiplicación
$a / $b;   // División
$a % $b;   // Módulo

// Comparación
$a == $b;   // Igual
$a === $b;  // Igual en valor y tipo
$a != $b;   // Diferente
$a < $b;    // Menor
$a > $b;    // Mayor

// Lógicos
$a && $b;   // AND
$a || $b;   // OR
!$a;        // NOT


// ---------------------------
// 🔹 Estructuras de control
// ---------------------------

// If - Elseif - Else
if ($edad >= 18) {
    echo "Mayor de edad";
} elseif ($edad > 12) {
    echo "Adolescente";
} else {
    echo "Niño";
}

// Switch
$color = "rojo";
switch ($color) {
    case "rojo":
        echo "El color es rojo";
        break;
    case "azul":
        echo "El color es azul";
        break;
    default:
        echo "Color no reconocido";
}

// While
$i = 1;
while ($i <= 5) {
    echo $i;
    $i++;
}

// For
for ($i = 0; $i < 5; $i++) {
    echo $i;
}

// Foreach
$frutas = ["manzana", "pera", "uva"];
foreach ($frutas as $f) {
    echo $f;
}


// ---------------------------
// 🔹 Funciones
// ---------------------------
function saludar($nombre) {
    return "Hola, $nombre!";
}
echo saludar("David");


// ---------------------------
// 🔹 Arrays
// ---------------------------

// Indexado
$numeros = [1, 2, 3];

// Asociativo
$persona = [
    "nombre" => "David",
    "edad" => 20
];

// Acceder
echo $numeros[0];           // 1
echo $persona["nombre"];    // David


// ---------------------------
// 🔹 Superglobales
// ---------------------------
// $_GET, $_POST, $_SESSION, $_COOKIE, $_SERVER

echo $_SERVER['PHP_SELF'];   // Script actual
// echo $_GET['id'];          // Valor pasado por URL (?id=123)


// ---------------------------
// 🔹 Echo vs Print
// ---------------------------
echo "Hola";   // Puede imprimir múltiples valores
print "Hola";  // Solo uno, pero devuelve 1


/*
    📖 TIP:
    PHP es flexible con tipos de datos, pero para proyectos grandes
    conviene usar validaciones y buenas prácticas.
*/
?>
