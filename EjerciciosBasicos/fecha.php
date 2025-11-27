<?php
echo 'dentro de fecha';
$cadenas = array('abc', 'abcc', 'abccc');
$coincidencias = preg_grep('/abc{4}/', $cadenas);
print_r($coincidencias);
