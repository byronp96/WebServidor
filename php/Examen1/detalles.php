

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
			<?php
				if (isset($_GET['cedula'])) {
					$ced=$_GET['cedula'];



				$db = new mysqli('localhost',  'root', '',"registrocivil");
							if  (!$db) {
							    die('No pudo conectarse: ' . mysql_error());
							}

							$sql="SELECT *FROM personas WHERE cedula= ?";
							
							$consulta=$db->prepare($sql);

							$consulta->bind_param("i",$ced);

							$consulta->execute();

							$filas=$consulta->get_result();

							$miFila=$filas->fetch_assoc();

							echo "<p>Nombre: ".$miFila['nombre']."<br>"; 
							echo  "Primer Apellido: ". $miFila['apellido1']."<br>";
							echo "Segundo Apellido: ". $miFila['apellido2']."<br>";
							echo "Cedula: ". $miFila['cedula']."<br>";
							echo "Fecha de Nacimiento: ". $miFila['fechanacimiento']."<br>";
							echo "Estado Civil: ". $miFila['estadocivil']."<br>";
							echo "Provincia: ". $miFila['provincia']."<br>";
							echo "Canton: ". $miFila['canton']."<br>";
							echo "Distrito: ". $miFila['distrito']."<br></p>";

							echo "<hr><a href='index.php' class='btn btn-info'>Regresar</a>";
				}else{
					echo "<a href='crear.php' class='btn btn-info' role='button'>Crear</a>";
				}


			$db->close();

			?>
		</div>
	</div>
	<div class="row">
	
	</div>
</div>
</body>
</html>