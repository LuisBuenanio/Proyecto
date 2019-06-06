<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
       
        <title>
            Ejemplo de PHP
        </title>
        
    </head> 
    <body>
     <h2>Ingresar Nuevos Datos</h2>


<form method = "post" action="agregar.php">
  Nombre:<br>
  <input type="text" name="nombre">
  <br>
  Direccion:<br>
  <input type="text" name="direccion">
  <br>
  Telefono:<br>
  <input type="text" name="telefono">
  <br>
  Email:<br>
  <input type="email" name="email">
  <br>
  Imagen:<br>
  <input type="text" name="imagen">
  <br>
  <br>
  <input type="submit" value="Guardar">
  <br>
 <br>
 <br>
 <br>
</form>   
    <?php
    try {
        require_once ('conexion.php');
        
        $sql = "select * from tablacurso1";
        $result = $mysqli->query($sql);
             
               
    } catch (Exception $e){
        $error = $e -> getMessage();
    }
   ?>
  <table border =1> 
      <TR>
          <TD>&nbsp;Nombre&nbsp;</TD>
          <TD>&nbsp;Direccion&nbsp;</TD>
          <TD>&nbsp;Telefono&nbsp;</TD>
          <TD>&nbsp;Email&nbsp;</TD>
          <TD>&nbsp;Imagen&nbsp;</TD>
      </TR>  
   <?php
       While($row = $result -> fetch_array()){
           printf("<tr><td>&nbsp;%s</td>"
                   . "<td>&nbsp;%s&nbsp;</td>"
                   . "<td>&nbsp;%s&nbsp</td>"
                   . "<td>&nbsp;"
                   . "%s&nbsp</td>"
                   . "<td>&nbsp;<img src =/img/img1</td></tr>", 
                   $row["nombre"],$row["direccion"],$row["telefono"],$row["email"],$row["imagen"]);
                   
       } 
       $result -> close();
       $mysqli -> close();
   
   ?> 
  </table>
  </body>
 </html>
