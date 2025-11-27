<html>

<head>
    <title>Bienvenido al curso de PHP 7</title>
</head>

<body>
    Estas lineas estan escritas directamente en PHP<br>
    <?php
    $expresion = 1;
    if ($expresion == '1') {
        print('1.Empiezan lineas generadas por PHP <br>');
        print('2. El texto esta por instruccion print de PHP');
    }
    ?>

    <?PHP
    $cadena = <<<aa
        Esta es una liena <br>
        esta otra<br>
        y esta otra
        aa;

    print("<p>Parrafo 1 </p> \n");
    print('<p>Parrafo 2 </p> ');
    echo $cadena;

    //    print_r($_SERVER);

    //usamos print_r para recorrer arrays

    /*PARA ABRIR LOS TAGS DE PHP SE USA <?PHP <CODIGO> ?>
    TODAS LAS VARIABLES VAN PRECEDIDAS DEL DOLAR $
    PARA MOSTRAR POR PANTALLA USAMOS EL ECHO O EL PRINT
    PARA MOSTRAR POR PANTALLA USAMOS LAS COMILLAS SIMPLES
    $GET Y $POST RECIBEN LOS DATOS DE ENTRADA
    SEGUIMOS USANDO CORCHETES PARA ACCEDER A LOS INDICES DEL ARRAY
    PARA CONCATENAR LAS CADENAS USAMOS EL .*/
    echo '<br>';
    $varN = 1;
    $varC = '4 flores';
    $varD = $varN + $varC;
    echo $varD;
    echo '<br>';
    /*USAMOS $VAR PARA CREAR UNA VARIABLE Y USAMOS $$x significa: la variable cuyo nombre está contenido en $x*/
    $var1 = "curso";
    $curso = "PHP";

    // $$var1 = $curso
    echo $$var1; // imprime "PHP"
    echo "<br>";
    echo "<br>";

    //Para crear una funcion en PHP se usa -> function PruebaSinGlobal(){}
    function PruebaSinGlobal()
    {
        $var++;
        echo "Prueba sin global . \$var: " . $var . " <br>";
    }
    function pruebaConGlobal($var)
    {
        //AQUI SE USA EL GLOBAL AL CREAR UNA VARIABLE PARA HACER UNA VARIABLE GLOBAL, LO RECOMENDADO ES ENCAPSULAR VARIABLES
        global $var;
        $var++;
        echo "prueba con gobal . \$var: " . $var . " <br>";
    }

    function pruebaConGlobals()
    {
        $GLOBALS["var"]++;
        echo "Prueba con GLOBALS . \$var: " . $GLOBALS["var"] . "<br>";
    }

    $var = 20; //VARIABLE GLOBAL
    PruebaSinGlobal();
    echo $var;
    echo "<br>";

    pruebaConGlobal($var);
    echo $var;
    echo "<br>";

    pruebaConGlobals();


    echo "<br>";
    echo "<br>";

    define ("PI", 3.141516);

    echo PI;

    $PI=1;

    echo "<br>";
    echo PI;
    ?>
</body>

</html>
