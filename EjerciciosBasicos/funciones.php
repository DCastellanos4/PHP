<?php
function calculaMedia($a)
{
    $suma = 0;
    foreach ($a as $key => $value) {
        $suma += $value;
    }
    return $suma / count($a);
}
function muestranombre($apel,$titulo="sr"){
    static $i=1; //-> EL STATIC CREA UNA VARIABLE QUE SOLO VIVE DENTRO DE LA FUNCION
    global $a;//-> CREA UNA VARIABLE GLOBAL
    print "estimado $titulo $apel";
}
muestranombre("Fernandez");
print "<br>";
muestranombre("xiyo");
function recursividad($a){
        echo "$a";
        recursividad($a+1);
}

