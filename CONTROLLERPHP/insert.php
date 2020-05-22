<?php


function insertar($tabla,$columnas,$valores){

require('conexion.php');

 $sql = " INSERT INTO $tabla (";

 $long = count($columnas);

 for ($i= 0; $i <$long; $i++) {
    if($i==$long-1){
        $sql = $sql . "" . $columnas[$i] . ")";
    } else{
        $sql = $sql . "" . $columnas[$i] . ",";
    }
 }

 $sql = $sql . " VALUES (";
 
  for ($i= 0; $i <$long; $i++) {
    if($i==$long-1){
        $sql = $sql . "'" . $valores[$i] . "');";
    } else{
        $sql = $sql . "'" . $valores[$i] . "',";
    }
 }
 mysqli_query($conexion,$sql) or die ("Fallo en la consulta");
}

?>