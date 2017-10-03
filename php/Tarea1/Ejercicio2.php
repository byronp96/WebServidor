<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <div class="wrapper">
<div class="form-signin" >
  <h2 class="form-signin-heading">Ejercicio 2</h2>
  <form action="Ejercicio1.php" method="post">
  <div class="row">
    <input type="number" class="form-control" name="natural" placeholder="Numero" required="" autofocus="" />
  </div>
  <div class="row">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Calcular</button>
  </div>
  </form>
  <div class="row text-center">
  <?php
  if ($_POST) {
    $natural = $_POST['natural'];
    $fibonacci = array();
    $fibonacci[0] = $natural;
    $fibonacci[1] = $natural+1;
    for ($i = 2; $i < 50; $i++) {
      $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
      echo $fibonacci[$i]." - ";
    }

    print array_sum($fibonacci);
  }
  ?>
</div>
</div>
</div>
  </body>
</html>
