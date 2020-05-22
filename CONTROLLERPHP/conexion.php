<?php
	
	$server = ("localhost");
	$user = "luis";
	$pass = "123";
	$dbname = "BIOGENERA";

	$conexion = mysqli_connect ($server,$user,$pass,$dbname) or die ("Error de conexión:".mysqli_connect_error());

if(!$conexion){
      echo 'Error de conexion' . mysqli_connect_error();
    }else{
     //echo 'Conexion exitosa';
    }
?>
