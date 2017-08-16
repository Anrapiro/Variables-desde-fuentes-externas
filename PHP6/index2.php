<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container ">

    <div class="container">
      <h1 class="alert alert-success">Numero de elementos de un array no ordenados </h1>
      <form class="" action="index2.php" method="post">
        <div class="row justify-content-around">
        </div>
        <input  class="btn btn-success rounded-circle"type="submit" name="" value="Evaluar" required>
      </form><br>
      <h4 class="alert alert-info">
        <?php
       $nombres = array('Mirna','Paola','maira','jose','sebastian','carlos');
       echo "Nombres de la lista : ".count($nombres)." <br>";
       shuffle($nombres);
       foreach ($nombres as $nombre) {
         echo ucfirst($nombre)."<br>";
       }
        ?>
       </h4>
       <a href="index.php" class="btn btn-success">Inicio</a>

    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
