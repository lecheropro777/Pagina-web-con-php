<?php
require '../../conexion.php';
session_start();
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Crear publicacion</title>
    <link rel ="stylesheet" href="../css/bootstrap.min.css" />

  </head>
  <body class="bg-light">
<div class="container">
  <main>
    <br>
    <br>
      <div class="col-md-7 col-lg-8">
      <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nueva publicacion</font></font></h1>
        <br>
        <br>

        <form class="needs-validation" action="nuevoPost.php" method="POST">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Titulo</label>
              <input type="text" class="form-control" name="tituloMensaje" required>
            </div>
            <p></p>
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Mensaje</label>
              <textarea type="text" class="form-control" name="mensaje" placeholder="Mensaje" style="width:500px; height:200px;" required> </textarea>
              <br>
            </div>
          <button class="w-100 btn btn-primary btn-lg" type="submit">Publicar</button>
          <a type="button" class="w-100 btn btn-outline-danger" href="../album.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cancelar</font></font></a>
        </form>



      </div>
    </div>
  </main>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2022 Company Name</p>
  </footer>
</div>
    <script src="../bootstrap/assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

