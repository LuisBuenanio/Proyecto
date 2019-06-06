<html>
    <body>
    <center>
        <h1>AREA DEL TIRNAGULO</h1>
        <?php
        $li = $_POST['ladoi'];
        $ld = $_POST['ladod'];
        $ba = $_POST['base'];
        $h = sqrt(($ld*$ld)-(($ba/2)*($ba/2)));
        $area = ($ba*$h)/2;
        print("<h2>AREA= $area </h2>");
        ?>
    </center>
    </body>
</html>

