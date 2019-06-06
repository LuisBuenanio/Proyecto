<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           
            $valor= $_GET["numero"];
            $opcion=$_GET["seleccion"];
                        
            
    if($opcion=="2"){
    echo "<h1>Resultado</h1><br>";
               
     function octal($valor) {
     $finished=0;
     $base=1;
     if(preg_match("/[^0-9]/", $valor)) {
         for($i=0; $valor!=chr($i); $i++);
         $dec_nr=$i;
     }
     else $dec_nr=$valor;
     while($dec_nr>$base) {
         $base=$base*2;
         if($base>$dec_nr) {
             $base=$base/2;
             break;
         }
     }
     while(!$finished) {
         if(($dec_nr-$base)>0) {
             $dec_nr=$dec_nr-$base;
             $bin.=1;
             $base=$base/2;
         }
         elseif(($dec_nr-$base)<0) {
             $bin.=0;
             $base=$base/2;
         }
         elseif(($dec_nr-$base)==0) {
             $bin.=1;
             $finished=1;
             while($base>1) {   
                 $bin.=0;
                 $base=$base/2;
             }
         }
     }
     return $bin;
}
echo octal($valor)." Es el Resultado en binario ";  
               
            }

            function control($valor,$ingresar){
                $opc=0;
                while ($valor>=1){
                    if($valor%10 >= $ingresar){
                        $opc=1;
                        $valor=0;
                    }
                    $valor=(int)($valor/10);
                }
                return $opc;
                
  
  if($opcion=="binario"){
                $veri= control($valor,2);
                if($veri!=0){
                    echo 'Debe ingresar ceros o unos por favor:<br>';
                }
                else{  
                    
                }  
                $decimal=0;
                $base=1;
                for($i = strlen($valor)-1;$i>=0;$i--){
                    $decimal +=$valor[$i]*$base;
                    $base*=2;
                }
                echo $decimal." Valor en Base Decimal ";
                   
                }
            }           
            
        ?>
    </body>
</html>
