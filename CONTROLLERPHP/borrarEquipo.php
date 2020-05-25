<?php
$tabla="equipovoluntario";
$columna="IDvoluntario";
$valores=$_POST['negativo'];
require("delete.php");
$Delete=new Delete;
$Delete->eliminar($tabla,$columna,$valores);
 ?>
