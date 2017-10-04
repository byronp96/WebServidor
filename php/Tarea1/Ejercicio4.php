<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <div class="wrapper">
        <div class="form-signin">
            <h2 class="form-signin-heading">Ejercicio 4</h2>
            <form action="Ejercicio1.php" method="post">
                <div class="row">
                    <input type="number" class="form-control" name="diametro" placeholder="Diametro" required="" autofocus="" />
                </div>
                <div class="row">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Calcular</button>
                </div>
            </form>
            <div class="row text-center">
                <?php
  if ($_POST) {
    $diametro = $_POST['diametro'];
    $radio = $diametro/2;
    $area = (3.1416)*pow($radio,2);
    $circunferencia = 3.1416*$diametro;
    echo "Area $area";
  }
  ?>
            </div>
            <div class="row text-center">
                <a href="../index.html">Inicio</a>
            </div>
        </div>
    </div>
</body>

</html>