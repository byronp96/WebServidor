<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="wrapper">
        <div class="form-signin">
            <h2 class="form-signin-heading">Ejercicio 1</h2>
            <form action="Ejercicio1.php" method="post">
                <div class="row">
                    <input type="number" class="form-control" name="precio" placeholder="Precio" required="" autofocus="" />
                </div>
                <div class="row">
                    <input type="number" class="form-control" name="monto_recibido" placeholder="Monto Recibido" required="" />
                </div>
                <div class="row">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Calcular</button>
                </div>
            </form>
            <div class="row text-center">
                <?php
    if ($_POST) {
      $precio = $_POST['precio'];
      $monto_recibido = $_POST['monto_recibido'];
      $impuesto_ventas = 0.13;
      $subtotal = $precio;
      $total_pagar = $precio + ($precio*$impuesto_ventas);
      $vuelto = $monto_recibido - $total_pagar;
      echo "<p>Total a pagar:".$total_pagar."</p>";
      echo "<p>Monto Recibido:".$monto_recibido."</p>";
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