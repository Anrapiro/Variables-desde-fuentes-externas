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
      <h1 class="alert alert-success"> Numeros pares del 1 al 10 en forma descendente</h1>
      
      <h4 class="alert alert-info">
        <?php
        $numeros=Range(1,10);
        arsort($numeros);
        foreach ($numeros as $numero) {
          if ($numero%2==0) {
            echo "$numero <br>";
          }
        }
        ?>
       </h4>
       <a href="index.php" class="btn btn-success">Inicio</a>

    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
