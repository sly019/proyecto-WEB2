<?php 

// Parametros a configurar para la conexion de la base de datos 

$hotsdb = "localhost";    // sera el valor de nuestra BD 
$basededatos = "proyecto";    // sera el valor de nuestra BD 

$usuariodb = "dbAdmin";    // sera el valor de nuestra BD 
$clavedb = "Admin%";    // sera el valor de nuestra BD 

$tabla = "estudiantes";    // sera el valor de una tabla 

// Fin de los parametros a configurar para la conexion de la base de datos 

$conexion_db = mysql_connect("$hotsdb","$usuariodb","$clavedb") 
    or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE"); 
    $db = mysql_select_db("$basededatos", $conexion_db) 
    or die ("La Base de Datos <b>$basededatos</b> NO EXISTE"); 
?> 