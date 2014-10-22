<?php
require('../utilidades.php');//tiene conexion a BD

if (isset($_POST["Agregar"])) {  
	$name = $_REQUEST['nombre'];
	$codCarrera = $_REQUEST['codigoCarrera'];
	$cantCreditos = $_REQUEST['creditos'];
	$sql = "INSERT INTO carreras (nombre, codigoCarrera, creditos) VALUES ('$name','$codCarrera','$cantCreditos')";
	$mysqli = connect_db();
	if ($result = $mysqli->query($sql)) { 
		echo '<script> alert ("Carrera insertada Exitosamente");</script>';
		header("location:carrera.php");
	}
	$mysqli->close();
	
}else if(isset($_POST['ver'])) {
		var_dump($_POST);
     die('Selecciona una carrera.');    

}else if(isset($_POST['Eliminar'])) {
	$id = $_REQUEST['opciones'];
	$sql = "DELETE FROM `carreras` WHERE ID_Carrera = $id";
    $mysqli = connect_db();   
    if ($result = $mysqli->query($sql)) { 
		echo '<script> alert ("Carrera Eliminada Exitosamente");</script>';
		header("location:carrera.php");
	}   
	$mysqli->close();
}
?>

