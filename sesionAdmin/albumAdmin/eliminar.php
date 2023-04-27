<?php
require "../../conexion.php";

$id=$_GET['id'];
$sql="DELETE FROM posts where idPost='$id";
$query=mysqli_query($conectar,$sql);

if($query){
    echo "<script> alert('Publicacion eliminada');
    location.href = 'album.php';
   </script>";
}
?>