<?php
require '../../../conexion.php';
session_start();



$tituloMensaje = $_POST['tituloMensaje'];
$mensaje = $_POST['mensaje'];


$insertar = "  INSERT INTO `proyectoappsweb`.`posts` (`tituloMensaje`, `mensaje`) VALUES ('$tituloMensaje', '$mensaje')";
$query= mysqli_query($conectar, $insertar);

if($query){
    echo "<script> alert('Nueva publicacion creada');
    location.href = '../album.php';
   </script>";
    
}else{
    
    echo "<script> alert('No se creo la publicacion');
    location.href = 'crear.php';
    </script>";
}

?>