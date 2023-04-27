<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>

    <link rel ="stylesheet" href="css/bootstrap.min.css" />
    <nav class="navbar navbar-expand navbar-light bg-light fixed-top">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../sesionAdmin/sesion.php">Administrador
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../principal/crear post/crear.php">Crear publicacion</a>
            </li>
            <li class="nav-item ">
            <a class="nav-link active" href="../inicio/sesion/Isesion.php"><?php echo "Cerrar sesion" .session_unset();?></a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <br/><br>
        <div class="row">