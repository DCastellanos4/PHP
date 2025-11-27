<html>
    <head>
        <title>TITULO</title>
        <!-- Incluir biblioteca de funciones -->

        <!-- EL REQUIRE SE USA PARA LINKEAR VARIOS ARCHIVOS Y EL INCLUDE IGUAL
             SI USAMOS REQUIRE Y EL PROGRAMA NO ENCUENTRA EL ARCHIVO, EL PROGRAMA REVIENTA
             PERO SI USAMOS EL INCLUDE Y NO ENCUENTRA EL ARCHIVO, NO PASA NADA-->
         <?php
         require ("conecta.php");
         echo ("<br>");
         require ("fecha.php");
         echo ("<br>");
         require ("cadena.php");
         echo ("<br>");
         require ("globals.php");
         echo ("<br>");
         ?>
    </head>
    <body>
        <?php
           include ("cabecera.html");
           require ("pie.html");
        ?>
    </body>
</html>
