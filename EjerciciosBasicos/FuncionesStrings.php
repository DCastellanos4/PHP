<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $cadena = "que tal?";
    $correo = "david.castellanos2@educa.madrid.org";
    echo strstr($correo, "@");
    echo "<br>";
    echo strstr($cadena, "tal", true);
    #DEVUELVE LA PRIMERA APARACION DE CADENA BUSCADA INCLUYENDOLA HASTA EL FINAL, Y EL BOOLEANO ES CASE-SENSITIVE
    echo "<br>";
    echo strchr($cadena, "a", true);
    #DEVUELVE TODOS LOS CARACTERES ANTES DE ENCONTRAR EL BUSCADO, BOOLEAN= CASE-SENSITIVE
    echo "<br>";
    echo strpos($correo, "d", 1);
    #DEVUELVE EL LUGAR DE LA CADENA DONDE APARECE EL CARACTER A BUSCAR, EL DESPLAZAMIENTO ES A PARTIR DE DONDE EMPIEZA A BUSCAR
    echo "<br>";
    echo stripos($correo, "d");
    echo "<br>";
    echo strspn("ESTE ESPACIO ES MUY BONITO", "ESTADO");
    #FUNCION SUPER UTIL
    #DEVUELVE LA LONGITUD DEL SEGMENTO INICIAL DE UN STRING QUE CONSISTE EN CARACTERES CONTENIDOS DENTRO DE UNA MASCARA DADA
    #BUSCAMOS CARACTERES QUE QUEREMOS QUE ESTEN EN LA CADENA
    #LA MASCARA ES UN CONJUNTO DE CARACTERES QUE PUEDEN APARECER EN CUALQUIER ORDEN EN LA CADENA INICIAL
    echo "<br>";
    echo strcmp("hola", "adios");

    #COMPARA DOS CADENAS EN CASE-SENSITIVE Y DEVUELVE
    /*
> 0, si cad1>cad2
< 0,si cad1<cad2
0, si ambas cadenas son iguales
*/
    echo "<br>";
    echo strcasecmp("hola", "adios");
    #IGUAL QUE STRCMP SIN CASE-SENSITIVE
    echo "<br>";
    echo strncmp("hola", "adholaaaaios", 2);
    #SOLO COMPARA LOS LENGTH PRIMEROS CARACTERES
    echo "<br>";
    strnatcmp("hola", "adios");
    #COMPARACION NATURAL
    #STRCMP(10,2) 10 es menor que 2
    #STRNATCMP(10,2) 10 es mayor que 2
    echo "<br>";
    echo strlen($correo);
    #CUENTA CUENTOS CARACTERES TIENE UNA CADENA
    echo "<br>";
    echo substr($correo, 2, 19);
    #DEVUELVE UNA SUBCADENA DE LONGITUD OFFSET Y LONGITUD LENGTH
    echo "<br>";

    echo strtok("hola soy david", " ");
    #PARTE LA CADENA EN BASE A EL CARACTER DELMITADOR
    echo "<br>";

    echo str_replace("Busqueda", "e", "Busqueda de personas");
    #CAMBIA cadBUSCADA por CADREEMPLAZAD EN TEXTO
    echo "<br>";


    $cadena = "Holá a todos";
    echo $cadena;
    echo "<br>";
    echo strtr($cadena, 'á', 'a ');
    #CAMBIA CARACTER A CARACTER DEL STRING
    echo "<br>";


    echo substr_count("Hola a todos los presentes", "os");
    #CUENTA LAS APARICIONES DE PATRON EN LA CADENA
    echo "<br>";

    print_r(count_chars("prueba", 3));
    echo "<br>";

    echo rtrim("HOLA SOY DAVID                ");
    echo "a";
    #QUITA ESPACIOS EN BLANCO AL FINAL DE LA LINEA Y SALTOS DE LINEA, ADEMAS PERMITE INTRODUCIR UNA LISTA PARA QUITAR CARACTERES
    echo "<br>";

    echo trim(" HOLA SOY DAVID");
    #LIMPIA ESPACIOS DE IZQUIERDA Y DE DERECHA
    echo "<br>";

    echo addslashes('"hola"');
    #Mete la cadena entre slashes
    echo "<br>";

    echo stripslashes(addslashes('"hola"'));
    #QUITA los slashes
    echo "<br>";

    echo nl2br("too isnt\n bar");
    #CONVIERTE SALTOS DE LINEA EN BR
    echo "<br>";

    $string = "Esto es\tun ejemplo\nstring";
    /* Use tab and newline as tokenizing characters as well  */
    $tok = strtok($string, " \n\t");

    while ($tok !== false) {
        echo "Palabra= {$tok}\n";
        echo "<br>";
        $tok = strtok(" \n\t");
    };
    echo "<br>";
    $mail = "david.castellanos2@gmail.com";
    print_r(explode("@", $mail));
    #SEPARA EL CONTENIDO DE LA CADENA MEDIANTE UN SEPARADOR Y LO CONVIERTE EN UN ARRAY
    echo "<br>";
    $fecha=array("7","Julio","2005");
    echo implode("de",$fecha);

    ?>
</body>

</html>
