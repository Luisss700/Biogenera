<?php
require('CONTROLLERPHP/conexion.php');
    $id = $_SESSION['id'];
    $sql = "SELECT IDperiodo FROM voluntario WHERE IDvoluntario = '$id'";
    $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
    $tupla = mysqli_fetch_array($consulta);

    if(isset($tupla['IDperiodo']))
    {
      
    }
 ?>
