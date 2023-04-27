<?php
require '../../../conexion.php';
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

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">

    

    

<link href="../bootstrap/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
<div class="contvoP
    <br>
    <br>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Nueva publicacion</h4>
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
          <a type="button" class="w-100 btn btn-outline-danger" href="../album.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cancelar</font></font></a
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

