<html>
    <body>
    <center>
        <h1>SUMA DE LOS N PRIMEROS NUMEROS</h1>
        <?php
        $n = $_POST['Num'];
        $suma = 0;
        for($i = 1;$i <= $n;$i++){
            $suma = $suma+$i;
        }
        print("<h2>Respuesta= $suma</h2>");
        ?>
    </center>
    </body>
</html>

