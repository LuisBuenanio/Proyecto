<html>
    <body>
<?php
    $num1=8;
    $num2=6;
    $num3=15;
    if($num1==$num2 && $num2==$num3)
        echo "Los tres numeros son iguales!!!";
    else {
        if($num1>$num2 && $num1>$num3)
            echo $num1.' es el mayor';
        else {
            if($num2>$num1 && $num2>$num3)
                echo $num2.' es el mayor';
            else {
                echo $num3.' es el mayor';
            }
        }
    }
?>
</body>
</html>

