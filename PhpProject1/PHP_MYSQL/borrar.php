<?php
$id = $_GET[id];

try {
     require_once ('conexion.php');
       
     $sql = " delete from tablacurso1 where id = $id";
     //echo "$sql";
     $result = $mysqli->query($sql);
} catch (Exception $e){
        $error = $e -> getMessage();
    }
    header("Location: eliminareg.php");
   ?>
