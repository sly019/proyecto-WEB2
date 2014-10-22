<?php
    require '../utilidades.php';
  //   $color_row=array('#cccccc', 'lightblue');
//     $ind_color=0;
     $sql = "SELECT * FROM carreras"; // creo el String de SQL
     $result = array(); // creo arreglo para valores de la BD
     $mysqli = connect_db();
     $result = $mysqli->query($sql);
     $mysqli->close();
      echo $table_Carrera = "<table border=1 align='center'>"; //creo la tabla
       echo " <tr>
                <td>nombre</td>
                <td>codigoCarrera</td>
                <td>creditos</td>     
                <td>Seleccionar</td>               
              </tr>
            ";  
       foreach ($result as $clave=>$key) 
       {
        $radio = "<input type='radio' name='opciones' value='{$key['ID_Carrera']}' />"; //le doy el valor del ID
     // $ind_color++;
       //$ind_color %= 2;
        //echo"<tr bgcolor=${color_row[$ind_color]}>";
        echo"<td>".$key['nombre']."</td>";
        echo"<td>".$key['codigoCarrera']."</td>";
        echo"<td>".$key['creditos']."</td>";
        echo"<td> $radio </td>"; // agrego los radios a la tabla
        echo "</tr>";     
       } 
  //$table_Carrera.= "</table>";
?>


