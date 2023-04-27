<?php
require '../conexion.php';

$nombre = $_POST['nombre'];
$apPaterno = $_POST['apPaterno'];
$apMaterno = $_POST['apMaterno'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];


$insertar = "INSERT INTO registro VALUES ('','$nombre','$apPaterno','$apMaterno','$email','$contrasena')";
$query= mysqli_query($conectar, $insertar);

if($query){
    echo "<script> alert('correcto');
    location.href = '../inicio/sesion/Isesion.php';
   </script>";
    
}else{
    echo "<script> alert('incorrecto o cuenta ya registrada');
    location.href = 'registro.html';
    </script>";
}

?>