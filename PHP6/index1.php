<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Datos personales</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <div class="container ">

    <div class="container">
      <h1 class="alert alert-success">Datos personales</h1>
      <form class="" action="index1.php" method="post">
        <div class="row justify-content-around">
        <label for="" >Nombre »</label>
        <input type="text" name="nombre" value="">
        <label for="">Direccion</label>
        <input type="text" name="direccion" value="">
        <label for="">Telefono</label>
        <input type="tel" name="telefono" value="">
      </div><br>
        <input  class="btn btn-success rounded-circle "type="submit" name="" value="Evaluar" required>
      </form>
      <br>
      <h4 class="alert alert-info">
        <?php
        if ($_POST) {
          $datos= array($_POST['nombre'],$_POST['direccion'],$_POST['telefono'] );
          list($nombre,$direccion,$telefono)=$datos;
          echo "Nombre: $nombre <br>Direccion: $direccion <br>Telefono: $telefono";
        }else {

          echo "No se ha ingresado ningun valor";
        }
        ?>
       </h4>
       
       <a href="index.php" class="btn btn-success">Inicio</a>

    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
