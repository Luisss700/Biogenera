<?php
$id = $_POST['positivo'];
$equipo=$_POST['equipo'];
$tabla='equipovoluntario';
$columnas= array("IDequipo","IDvoluntario");
$valores=array();
require("insert.php");
$Insert=new Insert;
array_push($valores,$equipo,$id);
$Insert->insertar($tabla,$columnas,$valores);

 ?>
