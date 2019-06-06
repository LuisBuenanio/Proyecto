<html>
    <body>
    <center>
        <h1>NUMERO ROMANO</h1>
        <?php
        function Romano($a,$b){
            switch ($b){
                case 1:
                    switch ($a){
                    case 1:
                        echo "M";
                        break;
                    case 2 :
                        echo "MM";
                        break;
                    }
                    break;
                case 2:
                    switch ($a){
                    case 1:
                        echo "C";
                        break;
                    case 2:
                        echo "CC";
                        break;
                    case 3:
                        echo "CCC";
                        break;
                    case 4:
                        echo "CD";
                        break;
                    case 5:
                        echo "D";
                        break;
                    case 6:
                        echo "DC";
                        break;
                    case 7:
                        echo "DCC";
                        break;
                    case 8:
                        echo "DCCC";
                        break;
                    case 9:
                        echo "CM";
                        break;
                    }
                    break;
                case 3:
                    switch ($a){
                    case 1:
                        echo "X";
                        break;
                    case 2:
                        echo "XX";
                        break;
                    case 3:
                        echo "XXX";
                        break;
                    case 4:
                        echo "XL";
                        break;
                    case 5:
                        echo "L";
                        break;
                    case 6:
                        echo "LX";
                        break;
                    case 7:
                        echo "LXX";
                        break;
                    case 8:
                        echo "LXXX";
                        break;
                    case 9:
                        echo "XC";
                        break;
                    }
                    break;
                case 4:
                    switch ($a){
                    case 1:
                        echo "I";
                        break;
                    case 2:
                        echo "II";
                        break;
                    case 3:
                        echo "III";
                        break;
                    case 4:
                        echo "IV";
                        break;
                    case 5:
                        echo "V";
                        break;
                    case 6:
                        echo "VI";
                        break;
                    case 7:
                        echo "VII";
                        break;
                    case 8:
                        echo "VIII";
                        break;
                    case 9:
                        echo "IX";
                        break;
                    }
                    break;
            }            
        }
        $año = $_POST['año'];
        print("<h1>AÑO: $año</h1>");
        $cont = 1;
        $div = 1000;
        print("<h3>ROMANO: ");
        while ($año >= 1){
            Romano(((int)($año/$div)), $cont);
            $año = ($año%$div);
            $div = $div/10;
            if($año >= 100)
                $cont = 2;
            else {
            if($año >= 10)
                $cont = 3;
            else
                $cont = 4;
            }
        };
        print("</h3>")
        ?>
    </center>
    </body>
</html>
