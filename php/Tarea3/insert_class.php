<?php
class DB_con
{
 function __construct()
 {
  
 }
 
 public function insertar($ced,$nom,$ape1,$ape2,$fec,$est,$pro,$cant,$dis)
 {
 	$db = new mysqli('localhost', 'root', '', "registrocivil");
 	$sql="INSERT INTO `personas`(`cedula`, `nombre`, `apellido1`, `apellido2`, `fechanacimiento`, `estadocivil`, `provincia`, `canton`, `distrito`) VALUES (?,?,?,?,?,?,?,?,?)";
					
	$consulta=$db->prepare($sql);
	
	$consulta->bind_param("issssssss",$ced,$nom,$ape1,$ape2,$fec,$est,$pro,$cant,$dis);

	$consulta->execute();

	if ($consulta->affected_rows>0) {
		return "Insercion Exitosa";
	}else{
		return "Hubo un problema con la inserción";
	}
 }
 
 public function datos()
 {
			$db = new mysqli('localhost', 'root', '', "registrocivil");

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
				$datos = "<tr><td>" . $fila['cedula'] . "</td>";
				$datos = $datos . "<td>" . $fila['nombre'] . "</td>";
				$datos = $datos . "<td>" . $fila['apellido1'] . "</td>";
				$datos = $datos . "<td>" . $fila['apellido2'] . "</td>";
				$datos = $datos . "<td>" . $fila['fechanacimiento'] . "</td>";
				$datos = $datos . "<td>" . $fila['estadocivil'] . "</td>";
				$datos = $datos . "<td><a href=$link>Ver Detalles</a> </td></tr>";
			}


			return $datos;

			$db->close();
 }
}
?>
