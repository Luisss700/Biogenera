<?php
require('CONTROLLERPHP/conexion.php');
    $id = $_SESSION['id'];
    $periodo=$_POST['nombre'];
    $contra=$_POST['contra'];
    //busca si la persona ya tiene un periodo
    $sql = "SELECT IDperiodo FROM voluntario WHERE IDvoluntario = '$id'";
    $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
    $tupla = mysqli_fetch_array($consulta);
    //Busca el id del periodo

    $sql2 = "SELECT IDperiodo FROM periodo WHERE Nombre = '$periodo' AND Contrasena='$contra'";
    $consulta2 = mysqli_query ($conexion,$sql2) or die ("Fallo en la consulta ".$sql2);
    $tupla2 = mysqli_fetch_array($consulta2);
    $identificador=$tupla2['IDperiodo'];

    if($tupla['IDperiodo']==0&&isset($tupla2['IDperiodo']))
    {
      $sql3="UPDATE voluntario SET IDperiodo='$identificador' WHERE IDvoluntario= '$id'"  ;
      $consulta = mysqli_query ($conexion,$sql3) or die ("Fallo en la consulta ".$sql3);
    }


 ?>
