<?php

require('../utilidades.php');


$name = $_REQUEST['nombre'];
$picture = $_REQUEST['myfile'];
$id = $_REQUEST['cedula'];
$carrera = $_REQUEST['carrera'];
$idioma = $_REQUEST['nivIngles'];

$sql = "INSERT INTO estudiantes (nombre, cedula, foto, carrera, idioma) VALUES ('$name', '$id', '$picture', '$carrera', '$idioma')";

$mysqli = connect_db();

if ($result = $mysqli->query($sql)) { 
	echo "Estudiante insertado";
}

$mysqli->close();

?>