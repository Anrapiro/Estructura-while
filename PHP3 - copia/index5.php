<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div class="container">
      <h1 class="alert alert-success">Numeros primos del 1 al 100</h1>
      <h4 class="alert alert-info">
      <?php
      $num=1;

       $i=1;
      while ($i <= 100) {
        $num=$i++;
        $n=0;//numero de veces que se dividira el numero
        $f=1;
        while ($f <= $i) {
          $num2=$f++;
        if ($num%$num2==0) {
          $n=$n+1;
        }
        }
        if ($n==2 or $num==1) {
          echo $num." - " ;
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
