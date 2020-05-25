<?php
$id = $_POST['registrarEquipo'];
$equipo=$_POST['equipo'];
$tabla='equipovoluntario';
$columnas= array("IDequipo","IDvoluntario");
$valores=array();
require("insert.php");
$Insert=new Insert;
array_push($valores,$id,$equipo);
$Insert->insertar($tabla,$columnas,$valores);

 ?>
