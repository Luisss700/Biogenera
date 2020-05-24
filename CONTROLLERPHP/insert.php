<?php


class Insert{

function insertar($tabla,$columnas,$valores){

require('conexion.php');

 $sql = " INSERT INTO $tabla (";

 $long = count($columnas);

 for ($i= 0; $i <$long; $i++) {
    if($i==$long-1){
        $sql = $sql . "" . $columnas[$i] . ")";
    } else{
        $sql = $sql . "" . $columnas[$i] . ",";
    }
 }

 $sql = $sql . " VALUES (";
 
  for ($i= 0; $i <$long; $i++) {
    if($i==$long-1){
        $sql = $sql . "'" . $valores[$i] . "');";
    } else{
        $sql = $sql . "'" . $valores[$i] . "',";
    }
 }
 mysqli_query($conexion,$sql) or die ("Fallo en la consulta");
}


}


if(isset($_POST['insertar'])){

    if($_POST['insertar']==1){
            
            if(isset($_POST['sinRepetir'])){

            require('conexion.php');

                $jsonR = $_POST['sinRepetir'];
                $sinRepetir =  json_decode($jsonR, true);
                $columnaSinRepetir = $sinRepetir['columna'];
                $valorSinRepetir = $sinRepetir['valor'];
                $tabla = $_POST['tabla'];

                $sql = "SELECT * FROM $tabla WHERE $tabla.$columnaSinRepetir = '$valorSinRepetir'";
		        $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta");
		        $nfilas = mysqli_num_rows ($consulta);

                if($nfilas > 0){
                    echo "no";
                    return;
                }
            }

            
            $tabla = $_POST['tabla'];
            $jsonCol = $_POST['columnas'];
            $jsonVal = $_POST['valores'];
            $columnas = json_decode($jsonCol, true);
            $valores = json_decode($jsonVal, true);

            //var_dump($valores);

            $Insert = new Insert;
            $Insert->insertar($tabla,$columnas,$valores);

    }

}

            

?>