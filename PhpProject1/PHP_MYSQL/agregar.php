<?php
$nombre = $_POST[nombre];
$direccion = $_POST[direccion];
$telefono = $_POST[telefono];
$email = $_POST[email];
$imagen = $_POST[imagen];
try {
     require_once ('conexion.php');
       
     $sql = "insert into tablacurso1(nombre,direccion,telefono,email,imagen)"
           . "values ('$nombre', '$direccion', '$telefono', '$email', '$imagen')";
     echo "$sql";
     $result = $mysqli->query($sql);
} catch (Exception $e){
        $error = $e -> getMessage();
    }
    header("Location: despliega.php");
   ?>
