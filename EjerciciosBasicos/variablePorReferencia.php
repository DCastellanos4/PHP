<?php
//SI LLEGA & DELANTE DEL NOMBRE DE LA VARIABLE, LA FUNCION NO HACE UNA COPIA DE LA VARIABLE SINO QUE CREA 2 PUNTEROS AL MISMO SITIO DE MEMORIA
//
function incrementacontador($cont)
{
    $cont++;
    echo ($cont . '<br>');
}
$i = 20;
incrementacontador($i);
echo ($i);
