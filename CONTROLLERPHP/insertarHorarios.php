<?php

  $tabla="Horario";
  $valores=array();
  $columnas= array("IDhorario","HorarioInicio","HorarioFin");
  require("insert.php");
  $Insert=new Insert;
  $selectedTime="7:00";
  $datetime=DateTime::createFromFormat('h:i', $selectedTime);
  $aftertime=DateTime::createFromFormat('h:i', $selectedTime);
  $aftertime->modify('+30 minutes');
  for($k=0;$k<=19;$k++)
  {
    $string1=$datetime->format('h:i');
    $string2=$aftertime->format('h:i');

    for($i=1;$i<=5;$i++)
  { $calculate=($i+($k*5));
    array_push($valores,$calculate,$string1,$string2);
    $Insert->insertar($tabla,$columnas,$valores);
  $valores=array();
  }
    $datetime->modify('+30 minutes');
    $aftertime->modify('+30 minutes');


  }

 ?>
