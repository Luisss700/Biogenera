<!DOCTYPE html> 
<html LANG="en"> 
    <head> 
    <meta charset="utf-8"/>
        <link href="./ASSETS/CSS/loginCSS.css" rel="stylesheet" />
        <title>Registro de Equipos</title> 
    </head> 
    <body>  
    <script type ="text/javascript" src="./CONTROLLER/registrarEquipoController.js"></script>
    <h1 class="display-1 text-center">Registro de Equipos</h1>
    <br>
     <div class="container">
        <div class="row">
            <div class="col-3" ></div>
            <div class="col-6">
                 <h5>Periodo</h5>
                            <?php 

                                $sql = "SELECT * FROM periodo";
		                        $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
	                        	$nfilas = mysqli_num_rows ($consulta);
        
                                echo '<select id="selectPeriodo"class="browser-default custom-select btnEscuelaSelect">';
                                if(isset($_POST['periodo'])){
                                $idPOST = $_POST['periodo'];
                            }else{
                                $idPOST = -1;
                            }
                                      for ($i=0; $i<$nfilas; $i++)
		                                  {
			                               $tupla = mysqli_fetch_array ($consulta);
			                              $nombre = $tupla["Nombre"];
                                          $id = $tupla["IDperiodo"];
                                              if($id == $idPOST){
                                                        echo "  <option  selected='selected' value = '$id' data-nombre='$nombre' >$nombre</option>  ";
                                                        }else{
                                                        echo "  <option  value = '$id' data-nombre='$nombre' >$nombre</option>  ";
                                                        }
		                                  }
                                echo '</select>';

                            ?>
                              <br>
                             <button class="btn btn-primary" id="btnEquipos">Ver equipos en este periodo</button>

                             <div id="divPeriodos" style='background-color:white'>
               
                             <div>
            </div>
            <div class="col-3" ></div>
        </div>
    </div>
    </body> 
</html> 