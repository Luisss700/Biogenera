<?php

for ($i=0; $i<100; $i++) {
  if (isset($_SESSION["h".($i+1)])) {
          unset($_SESSION["h".($i+1)]);
  }
}

$tabla="horariovoluntario";
$valores=array();
$columnas= array("IDhorario","IDvoluntario");
require("insert.php");
require("delete.php");
$Delete=new Delete;
$Insert=new Insert;

$id = $_SESSION['id'];
$sql = "SELECT IDhorario FROM horariovoluntario WHERE IDvoluntario = '$id'";
$consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
$tupla = mysqli_fetch_array($consulta);


  for($i=1;$i<=100;$i++)
  {
    if(isset($_POST[$i])&&!isset($tupla['IDhorario']))
    {
      $calculate=$i;
      array_push($valores,$calculate,$id);
      $Insert->insertar($tabla,$columnas,$valores);
      $valores=array();
    }
    if(!isset($_POST[$i])&&isset($tupla['IDhorario']))
    {
      $calculate=$i;
      $Delete->eliminar($tabla,"IDhorario",$calculate);
    }
    $tupla = mysqli_fetch_array($consulta);

  }


 ?>
