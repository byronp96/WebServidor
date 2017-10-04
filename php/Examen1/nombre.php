

<!DOCTYPE html>
<html>
<head>
	<title>Examen 1</title>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <script src="../../js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12 text-center">
			<h2>Insertar Datos</h2>
			<p>Digita el nombre completo dividido con comas(',')</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 text-center">
			<form action="nombre.php" method="post">

				<div class="form-group">
				  <label for="nombre">Nombre:</label>
				  <input type="text" name="nombre" id="nombre">
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn">Crear</button>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 text-center">
		<?php
			if ($_POST) {
			if (isset($_POST['nombre'])) {

				$nombre=$_POST['nombre'];
				$fecha = "04/30/1973";
				list($Nombre, $ape1, $ape2) = explode(",", $nombre);
				echo "<p>Nombre: $Nombre <br> Primer Apellido: $ape1 <br> Segundo Apellido: $ape2 <br></p>";

			}else{
				echo "<a href='index.php'>Volver</a>";
			}
			}
		?>
		</div>
	</div>
	<div class="row">
		<a href="index.php" class="btn btn-info" role="button">Volver</a>
	</div>
</div>

</body>
</html>