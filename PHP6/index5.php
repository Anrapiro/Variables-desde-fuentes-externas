<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Operaciones con 10 numeros de un array</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container ">

    <div class="container">
      <h1 class="alert alert-success">Operaciones con 10 numeros de un array </h1>
      <form class="" action="index5.php" method="get">
        <div class="row justify-content-around">
        <div class="col-12 col-md-3 ">
          numero 1<input class="form-control" type="number" name="num1" value="">
          numero 2<input class="form-control" type="number" name="num2" value="">
          numero 3<input class="form-control" type="number" name="num3" value="">
          numero 4<input class="form-control" type="number" name="num4" value="">
          numero 5<input class="form-control" type="number" name="num5" value="">
        </div>
        <div class="col-12 col-md-3 ">
          numero 6<input  class="form-control"type="number" name="num6" value="">
          numero 7<input  class="form-control"type="number" name="num7" value="">
          numero 8<input  class="form-control"type="number" name="num8" value="">
          numero 9<input  class="form-control"type="number" name="num9" value="">
          numero 10<input class="form-control" type="number" name="num0" value="">
        </div>
        </div>
        <input  class="btn btn-success rounded-circle"type="submit" name="" value="Evaluar" required>
      </form>
      <h4 class="alert alert-info">
        <?php
        error_reporting(0);
        if ($_GET) {
          
         $numeros=array($_GET['num1'],$_GET['num2'],$_GET['num3'],$_GET['num4'],$_GET['num5'],$_GET['num6'],$_GET['num7'],$_GET['num8'],$_GET['num9'],$_GET['num0']);
        $suma=0;$mul=1;$div=1;$res=0;
        $n=count($numeros);
        /*for ($i=0; $i <$n ; $i++) { 
        $res=$res-$numeros[$i];
        echo "$numeros[$i]";
        echo ($i==9)? "=" : "-";  //cuando $i llegue a 10 imprima igual sino imprima +
      }
      echo "$res";
      echo "<br>";*/
  
        foreach ($numeros as $numero) {
          $suma=$suma+$numero;
          $res=$res-$numero;
          $mul=$mul*$numero;
          $div=$div/$numero;
          
          echo "numero : $numero <br>";
          //echo ($numero==$n)? "=" : ",";
        }echo "<br>";
        echo "La suma es igual a: $suma <br>";
          echo "La resta es igual a: $res <br>";
            echo "La multiplicacion es igual a: $mul <br>";
              echo "La divicion es igual a: $div";
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
