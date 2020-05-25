<!DOCTYPE html> 
<html LANG="en"> 
    <head> 
    <meta charset="utf-8"/>
        <link href="./ASSETS/CSS/loginCSS.css" rel="stylesheet" />
        <title>Mi </title> 
    </head> 
    <body>  
    <script type ="text/javascript" src="./CONTROLLER/miEquipoController.js"></script>
    <h1 class="display-1 text-center">Mi equipo</h1>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div id="divPeriodos" style="background-color:white; text-align: center;">
                            <?php 
                                $id = $_SESSION['id'];
                                $sql = "SELECT * FROM equipovoluntario WHERE equipovoluntario.IDvoluntario ='$id'";
		                        $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
	                        	$nfilas = mysqli_num_rows ($consulta);

                                if($nfilas <1){
                                    echo "<h4>Aun no perteneces a ningun equipo, asegurate de haber registrado tu horario.</h4>"; 
                                }else{
                                    $tupla = mysqli_fetch_array ($consulta);
                                    $idEquipo = $tupla['IDequipo'];

                                    $sql = "SELECT ev.IDequipo as idE,v.Nombre as nombre, v.Correo as correo, v.Celular as celular FROM equipovoluntario as ev,voluntario as v WHERE ev.IDvoluntario = v.IDvoluntario AND ev.IDequipo = '$idEquipo' ";
		                            $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
	                        	    $nfilas = mysqli_num_rows ($consulta);
                                      echo "<h3>Integrantes de tu equipo ($idEquipo)</h3><br>"; 
                                     for ($i=0; $i<$nfilas; $i++)
		                             {
			                        $tupla = mysqli_fetch_array ($consulta);
                                    $nombre = $tupla['nombre'];
                                    $correo = $tupla['correo'];
                                    $celular = $tupla['celular'];
                                         echo "<strong> Nombre:</strong> $nombre      <strong>Correo:</strong>$correo     <strong>Celular:</strong>$celular"; 
			                             echo "<br>"; 
		                             }

                                }
                            ?>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
     
    </body> 
</html> 