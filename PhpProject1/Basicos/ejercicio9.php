<html>
   <body>
       <?php
        echo"Realizar Sumas con cambio de base";
        echo"Sumar números enteros menores a 100 representados en base 12 y 16 y muestre el resultado en base 7. Se sugiere utilizar variables para poner los números a sumar.<br><br>";
        ?>
        <form action="ejercicio9.php" method="POST">
            INGRESE PRIMER NUMERO:<input type="text" name="num1"><br>
            INGRESE SEGUNDO NUMERO:<input type="text" name="num2">
            <input type="submit" value="enviar">

        </form>
        <?php
            $num1=$_POST['num1'];
            $num2=$_POST['num2'];
            $num1_12= base_convert($num1,10,12);
            $num2_12= base_convert($num2,10,12);
            $num1_16= base_convert($num1,10,16);
            $num2_16= base_convert($num2,10,16);
            $sum=$num1+$num2;
            echo "Los números a sumar  en base 10 son: ".$num1." y ".$num2."<br><br>";
            //12
            echo "Suma de los números en base 12";
            echo "La suma de ".$num1_12." + ".$num2_12." = ". base_convert($sum, 10, 7)." (base 7) ";
          // 16
            echo "Suma de los números en base 16 ";
            echo "La suma de ".$num1_16." + ".$num2_16." = ". base_convert($sum, 10, 7)." (base 7) ";
        ?>
    </body>
</html
