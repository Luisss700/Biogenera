<!DOCTYPE html> 
<html LANG="en"> 
    <head> 
    <meta charset="utf-8"/>
        <link href="./ASSETS/CSS/loginCSS.css" rel="stylesheet" />
        <title>Escuelas</title> 
    </head> 
    <body>  
    <script type ="text/javascript" src="./CONTROLLER/escuelasController.js"></script>
    <h1 class="display-1 text-center">Escuelas</h1>
    <br>
     <div class="container">
        <div class="row">
            <div class="col-3" ></div>
            <div class="col-6">
                 <h3> Selecciona un Periodo </h3><br>
                    <div id="selectPeriodos">
                      <?php   
                      $sql = "SELECT Nombre FROM periodo";
		$consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
		$nfilas = mysqli_num_rows ($consulta);

        echo '<select class="browser-default custom-select btnEscuelaSelect">';

             for ($i=0; $i<$nfilas; $i++)
		                         {
			                        $tupla = mysqli_fetch_array ($consulta);
			                        $nombre = $tupla["Nombre"];
                                    // <option value="1">One</option>
                                    echo "  <option  value = '$nombre' data-nombre='$nombre' >$nombre</option>  ";
		                        }
        echo '</select>';
         
                      ?>
                    </div>
            </div>
            <div class="col-3" ></div>
        </div>
    </div>
    </body> 
</html> 