<?php
$tabla="horariovoluntario";
$valores=array();
$columnas= array("IDhorario","IDvoluntario");
require("insert.php");
$Insert=new Insert;

for ($i=0; $i<100; $i++) {
  if (isset($_SESSION["h".($i+1)])) {
          unset($_SESSION["h".($i+1)]);
  }
}
  for($i=1;$i<=100;$i++)
  {
    if(isset($_POST[$i]))
    {
      $calculate=$i;
      array_push($valores,$calculate,$_SESSION['id']);
      $Insert->insertar($tabla,$columnas,$valores);
      $valores=array();
    }

  }
 ?>
