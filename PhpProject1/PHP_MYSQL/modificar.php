<?php
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$imagen = $_POST['imagen'];
try {
     require_once ('conexion.php');
       
     $sql = "UPDATE tablacurso1 SET nombre='$nombre', direccion='$direccion', "
             . "telefono='$telefono', email='$email', imagen='$imagen' where id = $id";
     
     $result = $mysqli->query($sql);
} catch (Exception $e){
        $error = $e -> getMessage();
    }
    header("Location: modificarreg.php");
   ?>
