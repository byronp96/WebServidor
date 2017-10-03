<!DOCTYPE html>
<html>
<head>
	<title>Clase 4</title>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <script src="../../js/bootstrap.min.js"></script>
</head>
<body>
	<div align="center" class="container">
		<table class="table">
		 <tr>
    <th>Cedula</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th></th>
  </tr>
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
	echo "<td>" . $apellidos . "</td>";
	echo "<td><a href=$link>Ver Detalles</a> </td></tr>";
	}

$db->close();
?>

</table>
</div>
 <div class="container">
	<div align="center" >
		<h2>Insertar Datos</h2>
		<form action="insert.php" method="post">
			Cedula: <input type="number" name="ced">
			<br />
			Nombre: <input type="text" name="nom">
			<br />
			Apellido 1: <input type="text" name="ape1">
			<br />
			Apellido 2: <input type="text" name="ape2">
			<br />
			Fecha de Nacimiento: <input type="text" name="fec">
			<br />
			Estado Civil: <input type="text" name="est">
			<br />
			Provincia: <input type="text" name="pro">
			<br>
			Canton: <input type="text" name="can">
			<br />
			Distrito: <input type="text" name="dis">
			<br />
			<button type="submit">Crear</button>
		</form>
	</div>
	
    </div>
    <div class="container">
      <a href="../../">Menu Principal</a>
    </div>
</body>
</html>