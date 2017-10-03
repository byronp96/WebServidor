<?php
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
				echo "<a href='index.php'>Regresar</a>";
			}
}else{
	echo "<a href='index.php'>Volver</a>";
}


			$db->close();

?>