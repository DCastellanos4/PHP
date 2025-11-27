<HTML>

<HEAD>
    <TITLE>Definición de matrices</TITLE>
</HEAD>

<BODY>
    <H3>Uso del constructor array()</H3>
    <?php
    $Estad = array(1 => "Alemania", "Austria", 5 => "Bélgica");
    ?>
    <TABLE BORDER="5" CELLPADDING="1" CELLSPACING="2">
        <TR ALIGN="center">
            <TD>Elemento</TD>
            <?php
            foreach ($Estad as $clave => $valor)
                echo "<TD>$clave</TD>";
            ?>
        </TR>
        <TR ALIGN="center">
            <TD>Valor</TD>
            <?php
            foreach ($Estad as $clave => $valor)
                echo "<TD> $valor </TD>";
            ?>
        </TR>
    </TABLE>
</BODY>

</HTML>
