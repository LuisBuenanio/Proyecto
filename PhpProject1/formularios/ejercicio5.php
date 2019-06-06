<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $c=$_POST['cadena'];
        $pal=explode(" ",$c);
       
        
       $cant= str_word_count($c,0);
        echo 'la cadena <br> '.$c.' contiene :' .  str_word_count($c,0).' palabras<br>';
        $aux=strlen($pal[0]);
         for($i=0 ;$i<$cant; $i++){
            if(strlen($pal[$i])>=$aux){
               $aux=strlen($pal[$i]);
        }
        
        }
        
        echo 'La palabra mas larga en el texto es de:  '.$aux.' caracteres';
        

        ?>
    </body>
</html>
