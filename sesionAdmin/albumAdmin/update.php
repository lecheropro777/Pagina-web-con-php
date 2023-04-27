<?php

include("conexion.php");
$con=conectar();
$id=$_POST['id'];
$titulo=$_POST['tituloMensaje'];
$mensaje=$_POST['mensaje'];

$sql="UPDATE posts SET tituloMensaje='$titulo',mensaje='$mensaje' WHERE idPost='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: album.php");
    }
?>