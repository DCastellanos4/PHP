<?php
//ESTRUCTURAS DE CONTROL
for ($i = 0; $i < 0; $i++) {
}
if ($i > 0) {
    # code...
} else {
}

do {
} while ($i > 0);

print("<UL>\n");
$i = 1;
while ($i <= 5) {
    print("<LI>Elemento $i</LI>\n");
    $i++;
}
print("</UL>\n");

foreach ($array as $indice => $valor) {
    # echo ($indice)
    //EN CADA ITERACION DEL BUCLE ME VA A ENSEÑAR $INDICE EN CADA ITERACION DEL FOR
}

//INICILALIZAR ARRAY
$provincias["TOLEDO"] = 500000;
$provincias["CR"] = 60000;
$provincias["ALBACETE"] = 20000;
$provincias["CUENCA"] = 25000;
$provincias["GUADALAJARA"] = 70000;

foreach ($provincias as $key => $value) {
    echo $key;
    echo '<br>';
    echo $value;
    echo '<br>';
}
echo '<br>';
echo '<br>';

//CREAR ARRAY VACIOS
$idiomasVAcio = array();


$idiomas = array('Alejandro' => 'Ingles', 'DavidR' => 'Frances', 'DavidRomo' => array('Ingles', 'Frances'), 'Roy' => 'Aleman');
foreach ($idiomas as $key => $value) { //con esto imprimimos el prmer array
    if (is_array($value)) {
        echo $key . ':';
        echo '<ul>';
        foreach ($value as $key1 => $value1) { // y coon esto saco el array dentro del array
            echo '<li>' . $value1 . '</li>';
        }
        echo '</ul>';
    } else {
        echo $key . '->' . $value;
        echo '<br>';
    }
}
echo '<br>';
echo '<pre>';
var_dump(value: $idiomas);
echo '</pre>';
/////////////////////////////////

//INICIALIZAR ARRAY

$array = array();

//PARA ELIMINAR EL ARRAY SE USA unset

unset($array);

//VAMOS A BORRAR UN IDIOMA DEL ARRAY IDIOMAS

unset($idiomas["DavidR"]);

foreach ($idiomas as $key => $value) { //con esto imprimimos el prmer array
    if (is_array($value)) {
        echo $key . ':';
        echo '<ul>';
        foreach ($value as $key1 => $value1) { // y coon esto saco el array dentro del array
            echo '<li>' . $value1 . '</li>';
        }
        echo '</ul>';
    } else {
        echo $key . '->' . $value;
        echo '<br>';
    }
}

echo '<br>';
//Para acceder a un elemento bidimensional

unset($idiomas["DavidRomo"][1]);

foreach ($idiomas as $key => $value) { //con esto imprimimos el prmer array
    if (is_array($value)) {
        echo $key . ':';
        echo '<ul>';
        foreach ($value as $key1 => $value1) { // y coon esto saco el array dentro del array
            echo '<li>' . $value1 . '</li>';
        }
        echo '</ul>';
    } else {
        echo $key . '->' . $value;
        echo '<br>';
    }
}

//ARRAYS TRIDIMENSIONALES

$tabla = array('Pais' => array('Austria', 'Viena', 'España'), 'Capital' => array('Viena', 'Berlin', 'Madrid'), 'Extension' => array('53', '52', '51'), 'Habitantes' => array('1', '2', '3'));

foreach ($tabla as $key => $value) { //con esto imprimimos el prmer array
    if (is_array($value)) {
        echo $key . ':';
        echo '<ul>';
        foreach ($value as $key1 => $value1) { // y coon esto saco el array dentro del array
            echo '<li>' . $value1 . '</li>';
        }
        echo '</ul>';
    } else {
        echo $key . '->' . $value;
        echo '<br>';
    }
}

