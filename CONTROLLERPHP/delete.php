<?php


class Delete{

function eliminar($tabla,$columna,$valor){

require('conexion.php');

 $sql = " DELETE FROM $tabla WHERE $columna = '$valor'";
 mysqli_query($conexion,$sql) or die ("Fallo en la consulta " . $sql);


}


}


if(isset($_POST['eliminar'])){

    if($_POST['eliminar']==1){
              
            $tabla = $_POST['tabla'];
            $columna = $_POST['columna'];
            $valor = $_POST['valor'];

           // var_dump($valores);

            $Delete= new Delete;
            $Delete->eliminar($tabla,$columna,$valor);

    }

}

            

?>