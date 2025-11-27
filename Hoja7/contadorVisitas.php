<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Realizar un contador de visitas en PHP.
 Crearemos un fchero de tetto “visitas.txt” y escribiremos en él un 0.
 Crearemos un fchero contador.php e implementaremos en él las siguientes instrucciones:
1. Abrir el fchero en modo lectura / escritura.
2. Leer del fchero 8 bytes (ó la cantdad deseada) y guardarlos en una variable que
llamaremos $contador
3. Escribir en pantalla: “Esta es la visita numero: $contador”
4. Incrementar el contador en una unidad
5. Colocar el puntero al principio del fchero
6. Escribir el nuevo valor del contador en el fchero
7. Cerrar el fchero -->
    <?php
    $visitas = fopen("visitas.txt", "r+");
    if (!$visitas) {
        die("ERROR MAXIMO MORTAl");
    }
    $contador = (int) fgets($visitas, 8);
    $contador++;
    rewind($visitas);
    fwrite($visitas, $contador);
    rewind($visitas);
    echo "Visitas: " . fgets($visitas);
    fclose($visitas);
    ?>
</body>

</html>
