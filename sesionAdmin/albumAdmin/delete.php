<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM posts  WHERE idPost='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: album.php");
    }
?>
