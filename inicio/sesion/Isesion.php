<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de sesion</title>
    <link rel ="stylesheet" href="../css/bootstrap.min.css" />

  </head>
    <body class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                Inicio de sesion
              </div>
              <div class="card-body">
              <main class="form-signin w-100 m-auto">
                <form action="veriLogin.php" method="POST">
                <img class="mb-4" src="../../imagenes/patas2.jpg" alt="" width="150" height="150">
                <h1 class="h3 mb-3 fw-normal">Porfavor ingrese su usuario y contraseña</h1>

                <div class="form-floating">
                <input type="text" class="form-control" name="email" required>
                <label for="floatingInput">Direccion email</label>
                </div>
                <div class="form-floating">
                <input type="password" class="form-control" name="contrasena" required>
                <label for="floatingPassword">Contraseña</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit"> Iniciar </button>
                </form>
              </main>
              </div>

            </div>
            
          </div>
          
        </div>
      </div>
 
    <a href="../../Registro/registro.html">Aun no tienes cuenta?  registrate</a>

  </body>
</html>
