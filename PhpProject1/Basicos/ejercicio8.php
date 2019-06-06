<html>
    <body>
<?php
 $numero=468;
 $cont=2;
 
 while($cont<=$numero){
   if($numero%$cont==0){
     $numero= $numero/$cont;
     echo $cont.", ";
       }
    else 
       $cont++;
       
   }
?>
    </body>
</htmal>

