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
      <h1 class="alert alert-success">Numeros desde N° hasta N° </h1>
      <form class="" action="index10.php" method="post">
        <input type="number" name="inicio" value="" placeholder="Numero desde">
        <input type="number" name="fin" value="" placeholder="Numero hasta" min="0">
        <input type="submit" name="" value="enviar">
      </form><br>
      <h4 class="alert alert-info">
       <?php
       $inicio= $_REQUEST['inicio'];
       $fin=$_REQUEST['fin'];
       $i=$inicio-1;
       if ($i<$fin) {
         # code...
         while ($i < $fin) {
           $i++;
           echo "$i -";
       }
     }else {
       echo "El inicio debe ser mayor que el final";
     }
        ?>
      </h4>
    <a href="index.php" class="btn btn-success">Inicio</a>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
