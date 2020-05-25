<?php
require('CONTROLLERPHP/conexion.php');
    $id = $_SESSION['id'];
    $sql = "SELECT IDhorario FROM horariovoluntario WHERE IDvoluntario = '$id'";
    $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
    $tupla = mysqli_fetch_array($consulta);
    $nrenglones=mysqli_num_rows ($consulta);
for ($k=0; $k <100 ; $k++) {

  for ($i=0; $i<100 ; $i++) {

    $numero=($i+1);
    if (@$tupla["IDhorario"]==@$numero) {
      $_SESSION["h".($i+1)]=($i+1);
    }
  }
  $tupla = mysqli_fetch_array($consulta);
}


 ?>
