<?php include("templatePost/cabecera.php"); ?>
<?php
require '../conexion.php';
session_start();
?>

</head>
 

  <section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <img src="imagenes/1.jpg"  width="300" height="200" >           
    <img src="imagenes/2.jpg"  width="300" height="200">                
    <img src="imagenes/3.jpg"  width="300" height="200"> 
    <br>
  <br>
  <br>
  </section>
  <br>
  <br>
  <br>
<main>


  <?php
  $sql="SELECT tituloMensaje, mensaje FROM posts ORDER BY  idpost desc";
  $result=mysqli_query($conectar, $sql);
  while($mostrar=mysqli_fetch_array($result)){
  ?>

<h3>
<div class="card border-secondary mb-4" style="max-width: 100%;">
<div class="album py-5 bg-light">
    <div class="container">
<div class="row column-cols-1 column-cols-md-4  g-4">
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="90" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="gray"/><text x="10%" y="50%" fill="#eceeef" dy=".3em"><?php echo $mostrar['tituloMensaje'] ?></text></svg>
            <div class="card-body" style="max-width: 20rem;" >
              <p class="card-text"><font style="vertical-align: inherit;"><?php echo $mostrar['mensaje'] ?></font></font></p>
              
            </div>
          </div>
        </div>
  </div>
  </div>
  </div>
  </h3>
<?php
  }?>
</main>
  </body>
</html>