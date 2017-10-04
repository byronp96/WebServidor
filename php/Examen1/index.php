

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
		<table class="table">
			<thead>
				<tr>
					<th>Cedula</th>
					<th>Nombre</th>
					<th>Primer Apellido</th>
					<th>Segundo Apellido</th>
					<th>Fecha de Nacimiento</th>
					<th>Estado Civil</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
					$db = new mysqli('localhost', 'root', '', "registrocivil");

					if (!$db)
						{
						die('No pudo conectarse: ' . mysql_error());
						}

					$sql = "select * from personas";
					$consulta = $db->query($sql);

					if ($consulta === FALSE)
						{
						echo "<h2>Error" . $db->error . "</h2>";
						}

					while ($fila = $consulta->fetch_assoc())
						{
						$apellidos = $fila['apellido1']." ".$fila['apellido2'];
						$link="detalles.php?cedula=".$fila['cedula'];
						echo "<tr><td>" . $fila['cedula'] . "</td>";
						echo "<td>" . $fila['nombre'] . "</td>";
						echo "<td>" . $fila['apellido1'] . "</td>";
						echo "<td>" . $fila['apellido2'] . "</td>";
						echo "<td>" . $fila['fechanacimiento'] . "</td>";
						echo "<td>" . $fila['estadocivil'] . "</td>";
						echo "<td><a href=$link>Ver Detalles</a> </td></tr>";
						}

					$db->close();	
				?>
			</tbody>
		</table>
	</div>
	<div class="row">
		<a href="crear.php" class="btn btn-info" role="button">Crear</a>
	</div>
	<br>
	<div class="row">
		<a href="nombre.php" class="btn btn-info" role="button">Ejercicio 2</a>
	</div>
</div>
</body>
</html>