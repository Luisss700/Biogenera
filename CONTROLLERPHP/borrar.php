<?php

require('insert.php');

$valores = array("Solo",1,364210,0,8,"2017-06-15","8182102111",1,"luisss700@hotmail.com","rtgrtg");
$columnas = array("Nombre","IDperiodo","Matricula","Activado","Semestre","FechaN","Celular","Automovil","Correo","Contrasena");
$tabla = "voluntario";
insertar($tabla,$columnas,$valores);

echo "Hecho";

?>