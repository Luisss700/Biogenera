<!DOCTYPE html> 
<html LANG="en"> 
    <head> 
    <meta charset="utf-8"/>
        <link href="./ASSETS/CSS/loginCSS.css" rel="stylesheet" />
        <title>Registro de Escuela</title> 
    </head> 
    <body>  
    <script type ="text/javascript" src="./CONTROLLER/registroEscuelaController.js"></script>
    <h1 class="display-1 text-center">Registro de Escuela</h1>
    <br>
     <div class="container">
        <div class="row">
            <div class="col-2" ></div>
            <div class="col-8">
                
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" id="txtNombre" placeholder="Nombre de la escuela" required></input>
                            <br>
                            <input type="text" class="form-control" id="txtColonia" placeholder="Colonia" required></input>
                            <br>
                            <input type="date" class="form-control" id="txtFechaVisita" placeholder="Fecha de Visita" required> Fecha de Visita</input>
                            <br>
                            <br>
                            <br>
                            <input type="txt" class="form-control" id="txtColaborador" placeholder="Colaborador" required></input>
                            <br>
                            <br>
                            <h5>Periodo</h5>
                            <?php 

                                $sql = "SELECT * FROM periodo";
		                        $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
	                        	$nfilas = mysqli_num_rows ($consulta);
        
                                echo '<select id="selectPeriodo"class="browser-default custom-select btnEscuelaSelect">';

                                      for ($i=0; $i<$nfilas; $i++)
		                                  {
			                               $tupla = mysqli_fetch_array ($consulta);
			                              $nombre = $tupla["Nombre"];
                                          $id = $tupla["IDperiodo"];
                                              // <option value="1">One</option>
                                              echo "  <option  value = '$id' data-nombre='$nombre' >$nombre</option>  ";
		                                  }
                                echo '</select>';
         

                            ?>


                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" id="txtNombreContacto" placeholder="Nombre del Contacto" required></input>
                            <br>
                            <input type="text" class="form-control" id="txtContactoTel" placeholder="Contacto(Tel.)" required></input>
                            <br>
                            <input type="number" class="form-control" id="txtCupo" placeholder="Cupo" required></input>
                            <br><br>
                            <br>
                            <input type="text" class="form-control" id="txtTurno" placeholder="Turno" required></input>

                        </div>

                    </div>
                    <br>
                    <br>
                     <button  id="btnRegistrarEscuela" class=" text-align-center btn btn-primary">Registrar Escuela</button>
                
            </div>
            <div class="col-2" ></div>
        </div>
    </div>
    </body> 
</html> 