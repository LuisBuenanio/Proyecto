<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $n=$_POST['numero'];
                
    echo 'el numero: '.$n.'<br>';
    for($b = 1;$b < $n; $b++){
        if($n % $b == 0){
            $primo++;
        }
    }
    if($primo >= 2 ){
        echo "No es primo";
    } else {
        echo "Es primo";
    }
        ?>
    </body>
</html>
