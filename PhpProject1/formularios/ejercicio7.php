<html>
    <body>
    <center>
        <h2>NUMEROS MENORES DE 2000</h2>
        <?php
        for($a=2000; $a>10; $a-=4)
            {
                if(((($a%4) == 0) && (($a % 100 != 0) || ($a % 400 == 0))) && (($a % 13) == 0))
                {
                    $c1 = $a % 10;
                    $c2 = (($a % 100) - $c1) / 10;
                    if(($c1 + $c2) == 13)
                    {
                        print "<h3>Año $a</h3>";
                    }
                }
            }
        ?>
    </center>
    </body>
</html>

