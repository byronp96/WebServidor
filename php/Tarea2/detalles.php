<?php
if (isset($_GET['cedula'])) {
	$ced=$_GET['cedula'];



$db = new mysqli('localhost',  'root', '',"registrocivil");
			if  (!$db) {
			    die('No pudo conectarse: ' . mysql_error());
			}

			$sql="SELECT * FROM personas WHERE cedula= ?";
			
			$consulta=$db->prepare($sql);

			$consulta->bind_param("i",$ced);

			$consulta->execute();

			$filas=$consulta->get_result();

			$miFila=$filas->fetch_assoc();

			echo "<h2>Nombre: ".$miFila['nombre']." ".$miFila['apellido']."</h2>";
			echo "<h2>Fecha de Nacimiento: ".$miFila['fechanac']."</h2>";
			echo "<hr><a href='index.php'>Regresar</a>";
}else{
	echo "<a href='index.php'>Volver</a>";
}


			$db->close();

?>