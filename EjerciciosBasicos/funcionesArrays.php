<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*FUNCIONES ARRAY*/
    $array = array("hola");
    in_array($valor, $array, true);
    //Busca el valor en el array y si es strict compara tambien el tipo de dato
    //SOLO MIRA EL CONTENIDO NO LOS INDICES

    #echo "<br>";

    array_count_values($array);
    //CUENTA LS VECES QUE APARECE CADA ELEMENTO DE UN ARRAY EN ESE ARRAY
    //LOS VALORES SE CONVIERTE EN CLAVES

    #echo "<br>";

    array_pop($array);
    //BORRA EL ULTIMO ELEMENTO DEL ARRAY, Y SI HACEMOS UN ECHO,NOS ENSEÑA ELEMENTO QUE HA BORRADO

    # echo "<br>";

    array_push($array, $valor);
    //INSERTA ELEMENTOS AL FINAL DEL ARRAY ES LO MISMO QUE EL ADD DEL ARRAYLIST

    #echo "<br>";

    array_shift($array);
    //EXTRAE EL PRIMER ELEMENTO, DESPLAZANDO TODOS LOS ELEMENTOS HACIA DELANTE

    #echo "<br>";

    array_unshift($array, $valor, $valor1);
    //PERMITE AÑADIR UNO O MAS ELEMENTOS AL ARRAY DESDE EL PRINCIPIO, DESPLAZANDO LOS DEMAS

    /*PRUEBA SHIFT Y UNSHIFT*/

    $coloress = array('Blanco', 'Rojo', 'Amarillo', 'Rojo');
    array_shift($coloress);
    array_unshift($coloress, "Azul", "verde");
    foreach ($coloress as $clave => $colors) {
        echo "<p>" . $colors . "</p>";
    }

    echo "<br>";

    array_walk($array, function () {});
    //PERMITE APLICAR UNA FUNCION A CADA UNO DE LOS ELEMENTOS DE UN ARRAY
    //LA FUNCION TIENE QUE TENER 2 PARAMETROS, EN EL PRIMERO SIEMPRE LE DAMOS EL $VALOR Y EN EL SEGUNDO LA $CLAVE
    //LO NECESITA PARA TENER SU VALOR Y SU CLAVE ASOCIADA
    $temperatura = array('Madrid' => 25, 'Cordoba' => 35, 'Sevilla' => 40, 'Guadalajara' => 15);
    function kelvinACelsius(&$valor, $clave)
    {
        $valor = ($valor - 273.15);
    }

    array_walk($temperatura, 'kelvinACelsius');
    foreach ($temperatura as $key => $value) {
        echo $value;
        echo "<br>";
    }

    echo "<br>";
    /* $array2 = array("hola", "a");
    array_replace($array2, $array1);
    //DEVUELVE UN ARRAY QUE ES RESULTADO DE SOBREESCRIBIR AL PRIMERO
    $destino = array("185", "85");
    $origen = array("moreno", "95");
    $final = array_replace($destino, $origen);
    var_dump($final); */

    #array_merge($array, $array1, $array2);
    //SUMA LOS VALORES DE LOS ARRAYS

    #array_merge_recursive($array, $array1, $array2);
    //PERMITE COMBINAR MATRICES SIN PERDER ELEMENTOS, DEVUELVE LA MATRIZ RESULTADO DE LA SUMA Y CON LAS CLAVES DUPLICADAS GENERA UNA NUEVA

    #array_slice($array,0,1);
    //LE DAMOS UN ARRAY Y LE DECIMO INICIO Y CUANTOS ELEMENTOS RECORTAR Y NOS DEVOLVERA UN ARRAY CON LA CANTIDAD DE ELEMENTOS INDICADA
    $colors = array('AZUL', 'VERDE', 'ROJO', 'AMARILLO');

    print_r(array_slice($colors, 1, 2));

    echo '<br>';

    array_splice($colors, 0, 2, array('marron', 'azul', 'violeta'));
    //ELIMINA DE LA MATRIZ UNA CANTIDAD DE ELEMENTOS A PARTIR DE INICIO Y LOS SUSTITUYE POR ELEMENTOS DE REEMPLAZO
    print_r($colors);

    echo '<br>';

    #implode($delimitador,$array);
    //CONVIERTE ARRAY EN UNA CADENA SEPARANDO SUS ELEMENTOS CON LA CADENA INDICADA EN DELIMITADOR
    $prueba = array('7', 'Julio', '2021');
    echo implode(' de ', $prueba);
    echo '<br>';

    #shuffle($array);
    //DESORDENA LOS ELEMENTOS DE UN ARRAY DE MANERA ALEATORIA
    $loco = array('hola', 'estoy', 'loco');
    shuffle($loco);
    print_r($loco);
    echo '<br>';

    /*FORMAS DE ORDENAR UN ARRAY*/
    $ordenacion = array('1', '4', '7', '3', '2');
    $ordenacion . sort($ordenacion, SORT_REGULAR);
    print_r($ordenacion);
    echo '<br>';
    $ordenacion . rsort($ordenacion, SORT_REGULAR);
    print_r($ordenacion);
    echo '<br>';
    $ordenacion . asort($ordenacion, SORT_REGULAR); #-> ESTO ORDENA EL ARRAY MANTIENDO LOS INDICES CON LOS ELEMENTOS ASOCIADOS
    print_r($ordenacion);
    echo '<br>';
    $ordenacion . arsort($ordenacion, SORT_REGULAR); #-> ESTO ORDENA EL ARRAY INVERSO MANTIENDO INDICES CON ELEMENTOS ASOCIADOS
    print_r($ordenacion);
    echo '<br>';

    $colores = array('Calidos' => array('Rojo', 'Naranja', 'Amarillo'), 'Frios' => array('Azul', 'Gris', 'Morado', 'Verde'), 'Neutros' => array('Beige', 'Blanco', 'rosa'));
    foreach ($colores as $key => $value) {
        foreach ($value as $key1 => $value1) {
            $colores1[] = $value1;
        }
    }
    print_r($colores1);
    ?>

</body>

</html>
