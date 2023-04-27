<?php
require '../../conexion.php';
session_start();

$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

$buscar = "SELECT idUsuario, email, contrasena FROM registro where(email=\"$email\") and contrasena= \"$contrasena\"";
$query = $conectar->query($buscar);

			while ($r=$query->fetch_array()){
                $user_id=$r["email"];
				break;

            }
            if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='Isesion.php';</script>";
			}else{
				$user=$_SESSION["email"]=$user_id;
				print "<script>window.location='../../principal/album.php';</script>";				
			}
		

			



?>