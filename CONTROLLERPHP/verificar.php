<?php
require('conexion.php');
    $exito = true;
    $modo = 1;
    if(isset($_POST["contrasena"])){
        $modo = 2;
    }

if(isset($_POST["correo"])){
   $correo = $_POST["correo"];
   
    $sql = "SELECT * FROM voluntario WHERE voluntario.correo = '$correo'";
		$consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta");
		$nfilas = mysqli_num_rows ($consulta);

		if($modo == 1){
            echo $nfilas;
        }else{
            if($nfilas==0){

                //checar si esta en la tabla administrador
                    $sql =  "SELECT * FROM adminitrador WHERE adminitrador.correo = '$correo'";
                    $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta" . $sql);
		            $nfilas = mysqli_num_rows ($consulta);

                    if($nfilas>0){
                    //si es administrador
                       $contra = $_POST["contrasena"];
                       $tupla = mysqli_fetch_array ($consulta);
                       $hash = $tupla['2'];
                       if($hash == $contra){
                        echo "admin";
			           }
			           else{
				        echo "fracaso";
			           }	
                    }else{
                    //no es administrador
                        echo "0";
                    }
    
            }else{
                    $contra = $_POST["contrasena"];
                    $tupla = mysqli_fetch_array ($consulta);
			        $hash = $tupla['11'];
			        if(password_verify($contra, $hash)){
                        echo "exito";
			        }
			        else{
				        echo "fracaso";
			        }	
            }
        }




}
?>