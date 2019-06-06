<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $fecha1=strtotime($_POST['fecha']);
        
         $fecha2=strtotime(now);
        $c=($fecha2-$fecha1);
        echo 'El numero de dias desde la fecha de nacimiento hasta la fecha actual es: '.$c;
        ?>
    </body>
</html>
