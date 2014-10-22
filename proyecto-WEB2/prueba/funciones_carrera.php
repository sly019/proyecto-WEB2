<?php
require('../utilidades.php');


if ($_POST["Agregar"]) {  
	$name = $_REQUEST['nombre'];
	$codCarrera = $_REQUEST['codigoCarrera'];
	$cantCreditos = $_REQUEST['creditos'];

	$sql = "INSERT INTO carreras (nombre, codigoCarrera, creditos) VALUES ('$name','$codCarrera','$cantCreditos')";

	$mysqli = connect_db();

	if ($result = $mysqli->query($sql)) { 
		echo "carrera insertada";
	}

	$mysqli->close();
	
}elseif (isset($_POST['casa']))  {
	var_dump($_POST);
}     

?>

