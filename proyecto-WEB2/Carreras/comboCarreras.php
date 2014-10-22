<?php 

require('utilidades.php');

$mysqli = connect_db();


$sql = "SELECT * FROM carreras;";

if ($result = $mysqli->query($sql)) { 
    $dropdown_students = "<select class=\"dropdown\" name=\"carreras\">";
    while($obj = $result->fetch_object()){ 
        $dropdown_students.="<option value=\"$obj->nombre\">$obj->nombre</option>";
    }
    $dropdown_students.="</select>";
} 
$result->close();
$mysqli->close();
?>