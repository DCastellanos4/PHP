<HTML>

<HEAD>
    <TITLE>Definición de matrices</TITLE>
</HEAD>

<BODY>
    <H3>Uso del constructor array()</H3>
    <?php
    $tabla = array('Pais' => array('Austria', 'Viena', 'España'), 'Capital' => array('Viena', 'Berlin', 'Madrid'), 'Extension' => array('53', '52', '51'), 'Habitantes' => array('1', '2', '3'));
    ?>
    <TABLE BORDER="5" CELLPADDING="3" CELLSPACING="3">
        <TR ALIGN="center">
            <?php
            foreach ($tabla as $clave => $valor) {
                echo "<TR>";
                echo "<TH> $clave </TH>";
                foreach ($valor as $clave1 => $valor1) {
                    echo "<TD> $valor1 </TD>";
                }
                echo "</TR>";
            }
            echo "<br>";
            echo "<br>";
            echo "<br>";
            //EXPRESIONES REGULARES

            /*EL PUNTO. REPRESENTA CUALQUIER CARACTER DESDE LA A-Z EN MAYUSCULAS Y MINUSCULAS Y DEL 0-9
              USAMOS EL CIRCUNFLEJO ^ PARA INICIAR LA CADENA Y EL DOLAR $ PARA CERRARLA
              SI EL PATRON SE REPITE UN NUMERO N DE VECES USAMOS EL MAS + Y SI ESTA 0 O N VECES USAMOS EL ASTERISCO * .
              EL INTERROGANTE DICE SI EL ELEMENTO ESTA O NO ?
              Y LAS LLAVES DEFINEN CUANTAS VECES VA A ESTAR UN ELEMENTO, {4} SE VA A REPETIR HASTA 4 VECES
              LOS CORCHETES SE USAN PARA ESTABLECER UN RANGO DE CARACTERES [0-9]
              */
            $cadenas = array('abc', 'abcc', 'abccc','abcccc','abccccc','abcccccc');
            $coincidencias = preg_grep('/^abc{4}$/', $cadenas);
            print_r($coincidencias);
            echo "<br>";
            $chains=array('C96AO',"David5","David3","C43NO");
            $corchetes=preg_grep('/C[0-9][2-6][ARN]O/',$chains);
            print_r($corchetes);
            echo '<br>';
            $cadenax=array('roca','rco','rO@','rrrOOOa');
            $arroba=preg_grep('/[a-z]+[A-Z]+[^@]*$/',$cadenax);
            print_r($arroba);

            //FUNCIONES DE ARRAYS

            /**/
            ?>
        </TR>
    </TABLE>
</BODY>

</HTML>
