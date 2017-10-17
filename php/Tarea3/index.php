

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
					include_once 'insert_class.php';
					$db = new DB_con();
					$data = $db->datos();
					echo $data;
				?>
			</tbody>
		</table>
	</div>
	<div class="row">
		<a href="crear.php" class="btn btn-info" role="button">Crear</a>
	</div>
</div>
</body>
</html>