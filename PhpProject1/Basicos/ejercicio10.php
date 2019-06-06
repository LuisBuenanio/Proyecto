<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
       <?php
        echo "<h1>Calendario Junio</h1>";
        echo "Supongamos que el día de la semana es martes, el cual supuestamente es el primer dia de Junio, entonces muestre la hoja de calendario correspondiente a dicho mes.<br><br>";
            $pos=2;

            echo "<table>"
                    . "<tr>"
                        . "<td> Lun </td>"
                        . "<td> Mar </td>"
                        . "<td> Mie </td>"
                        . "<td> Jue </td>"
                        . "<td> Vie </td>"
                        . "<td> Sab </td>"
                        . "<td> Dom </td>"
                    . "</tr>"
                    ."<tr>";
                for($i=1;$i<$pos;$i++)
                    echo "<td>R</td>";
                    for($j=1;$j<=30;$j++){
                        echo "<td".($dia==$j?"":"").">$j</td>";
                        if(++$pos>7){
                            echo"</tr>\n";
                            $pos=1;
                        }
                    }
            echo "</tr>"
            . "</table>";
        ?>
    </body>
</html>
