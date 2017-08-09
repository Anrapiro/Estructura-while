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
    <h1 class="alert alert-success">Numeros del 100 al 1</h1>
    <h4 class="alert alert-info">
      <?php $i = 101;
      while ($i > 1):
        $i--;
       echo $i." - ";
       endwhile;
       ?>
     </h4>
     <a href="index.php" class="btn btn-success">Inicio</a>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
