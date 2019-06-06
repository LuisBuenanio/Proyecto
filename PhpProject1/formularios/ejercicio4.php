<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    <div>Ejercicio 4</div>
    <h2>Diseñar un programa en PHP que produzca el abecedario inverso:</h2>
    </head>
    <body>
        <?php
        
        $a=90;
     while($a>0){
      for($i=$a; $i>=65; $i--) {  
      echo chr($i);  
      
      }
      $a--;
      echo '<br>';
     
}  
        ?>
    </body>
</html>
