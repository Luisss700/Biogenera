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
                      $sql = "SELECT Nombre,IDperiodo FROM periodo";
		                    $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
		                    $nfilas = mysqli_num_rows ($consulta);

                            echo '<select id="selectPeriodo" class="browser-default custom-select btnEscuelaSelect">';

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
                                                        // <option value="1">One</option>
                                                        //selected="selected
                                                        if($id == $idPOST){
                                                        echo "  <option  selected='selected' value = '$id' data-nombre='$nombre' >$nombre</option>  ";
                                                        }else{
                                                        echo "  <option  value = '$id' data-nombre='$nombre' >$nombre</option>  ";
                                                        }
		                                            }
                            echo '</select>';
         
                      ?>
                      <br>
                      <br>
                      <button type="button" id="btnActualizarPeriodo" class="btn btn-primary">Ver escuelas de este periodo</button>
                      <br>
                      <br>
                      <?php
                        $idPOSTescuela = -1;
                        if(isset($_POST['escuela'])){
                        $idPOSTescuela =$_POST['escuela'];
                        }

                        if(isset($_POST['periodo'])){
                            $periodo = $_POST['periodo'];
                            echo "<h4>Seleccionar una escuela del periodo </h4>";
                            echo "<br>";

                            echo '<select id="selectEscuela" class="browser-default custom-select btnEscuelaSelect">';

                                 $sql = "SELECT * FROM escuela WHERE escuela.IDperiodo = $idPOST";
		                         $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
		                         $nfilas = mysqli_num_rows ($consulta);
                                 for ($i=0; $i<$nfilas; $i++)
		                                  {
			                               $tupla = mysqli_fetch_array ($consulta);
			                              $nombre = $tupla["Nombre"];
                                          $id = $tupla["IDescuela"];
                                              // <option value="1">One</option> 
                                              if($idPOSTescuela == $id){
                                                   echo "  <option  selected='selected' value = '$id' data-nombre='$nombre' >$nombre</option>  ";
                                              }else{
                                                   echo "  <option  value = '$id' data-nombre='$nombre' >$nombre</option>  ";
                                              }                              
		                                  }

                                 echo '</select>';
                                 echo '<br>';
                                 echo'<br>';
                                 echo '<button type="button" id="btnActualizarEscuela" class="btn btn-primary">Ver estudiantes de esta escuela</button>';

                        }  
                         if(isset($_POST['escuela'])){  
                                echo '<input class="form-control" type="hidden" id="agregarJS"  value="agregarJS" ></input>';
                                 $idEscuela = $_POST['escuela'];
                                 $sql = "SELECT * FROM escuela WHERE escuela.IDescuela = $idEscuela";
		                         $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
                                 $tupla = mysqli_fetch_array ($consulta);
                            echo '<br>';
                            echo '<br>';
                                $nombreEscuela = $tupla['Nombre'];
                                $turno = $tupla['Turno'];
                                $colaborador = $tupla['Colaborador'];
                                $cupo = $tupla['Cupo'];
                                $nombreContacto = $tupla['NombreContacto'];
                                $contacto = $tupla['Contacto'];
                            echo '<h5> Datos de la escuela </h5>';
                            echo "<strong>Escuela: </strong> $nombreEscuela <br>";
                            echo "<strong>Turno: </strong> $turno <br>";
                            echo "<strong>Colaborador: </strong> $colaborador <br>";
                            echo "<strong>Cupo: </strong> $cupo <br>";
                            echo "<strong>Nombre del contacto: </strong> $nombreContacto <br>";
                            echo "<strong>Contacto: </strong> $contacto <br>";
                            echo "<br>";
                         }         
                        
    
                                   
                      ?>
                      <br>
                       <div id="divAgregarEstudiante" <?php if(!isset($_POST['escuela'])){echo 'style="display:none"';} ?>>
                            <h3> Agregar un estudiante a esta escuela. </h3>
                                      
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control" type='text' id="txtNombreEstudiante" placeholder="Nombre"></input><br>
                                    <input class="form-control" type='number' id="txtEdad" placeholder="Edad"></input><br>
                                    <input class="form-control" type='text' id="txtGrado" placeholder="Grado"></input><br>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" type='text' id="txtNombreTutor" placeholder="Nombre del tutor"></input><br>
                                    <input class="form-control" type='text' id="txtTelefonoTutor" placeholder="Tel. Tutor"></input><br>
                                    <input class="form-control" type='hidden' id="txtEscuelaId"  value="<?php echo $_POST['escuela'];?>" ></input>
                                    <button type="button" id="btnAgregarEstudiante" class="btn btn-primary">Agregar Estudiante</button>
                                </div>
                            </div>
                       <div>        
                    </div>                  
                <br>
                <br>
            </div>
            <div class="col-3" ></div>


        </div>
         <div id="divEstudiantes" style='background-color:white'>
                        
         </div>
    </div>
    </body> 
</html> 