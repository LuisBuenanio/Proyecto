<html>
    <body>
    <center>
        <h3>Suma de la progresion geometrica</h3>
        <?php
        $x = $_POST['varx'];
        $n = $_POST['varn'];
        $suma = 1;
        for($i = 1;$i <= $n;$i++){
            $suma = $suma + ($x*$i);
        }
        print("<h3>Respuesta = $suma</h3>");
        ?>
    </center>
    </body>
</html>
