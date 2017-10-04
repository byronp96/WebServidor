

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
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 text-center">
			<form action="Crear.php" method="post">

				<div class="form-group">
				  <label for="usr">Cedula:</label>
				  <input type="text" name="ced" id="ced">
				</div>

				<div class="form-group">
					<label for="usr">Nombre:</label>
				 	<input type="text" name="nom" id="nom">
				</div>

				<div class="form-group">
					<label for="ape1">Primer Apellido:</label>
				 	<input type="text" name="ape1" id="ape1">
				</div>

				<div class="form-group">
					<label for="ape2">Segundo Apellido:</label>
				 	<input type="text" name="ape2" id="ape2">
				</div>

				<div class="form-group">
					<label for="fec">Fecha de Nacimiento:</label>
				 	<input type="text" name="fec" id="fec">
				</div>

				<div class="form-group">
					<label for="est">Estado Civil:</label>
				 	<input type="text" name="est" id="est">
				</div>

				<div class="form-group">
					<label for="pro">Provincia</label>
				 	<input type="text" name="pro" id="pro">
				</div>

				<div class="form-group">
					<label for="can">Canton:</label>
				 	<input type="text" name="can" id="can">
				</div>

				<div class="form-group">
					<label for="dis">Distrito:</label>
				 	<input type="text" name="dis" id="dis">
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn">Crear</button>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<?php
			if ($_POST) {
			if (isset($_POST['ced'])) {
				$ced=$_POST['ced'];
				$nom=$_POST['nom'];
				$ape1=$_POST['ape1'];
				$ape2=$_POST['ape2'];
				$fec=$_POST['fec'];
				$est=$_POST['est'];
				$pro=$_POST['pro'];
				$cant=$_POST['can'];
				$dis=$_POST['dis'];


					$db = new mysqli('localhost',  'root', '',"registrocivil");
						if  (!$db) {
						    die('No pudo conectarse: ' . mysql_error());
						}

						$sql="INSERT INTO `personas`(`cedula`, `nombre`, `apellido1`, `apellido2`, `fechanacimiento`, `estadocivil`, `provincia`, `canton`, `distrito`) VALUES (?,?,?,?,?,?,?,?,?)";
						
						$consulta=$db->prepare($sql);

						$consulta->bind_param("issssssss",$ced,$nom,$ape1,$ape2,$fec,$est,$pro,$cant,$dis);

						$consulta->execute();

						if ($consulta->affected_rows>0) {
							echo "<h2>Insercion Exitosa</h2>";
						}
			}else{
				echo "<a href='index.php'>Volver</a>";
			}


						$db->close();
			}
		?>
		<a href="index.php" class="btn btn-info" role="button">Ver Registros</a>
	</div>
</div>

</body>
</html>