<!DOCTYPE html> 
<html LANG="en"> 
    <head> 
    <meta charset="utf-8"/>
        <title>Voluntarios</title> 
    </head> 
    <body>  
    <script type ="text/javascript" src="./CONTROLLER/voluntariosController.js"></script>
    <h1 class="display-1 text-center">Voluntarios</h1>
    <br>
     <div class="container">
        <div class="row">
            <div class="col-2" ></div>
            <div class="col-8">
                <div class ="row">
                <div class="col-4" >
                    <input type="text" class="form-control" placeholder="Busqueda" id="txtBusqueda"> </input>
                </div>
                <div class="col-4" >
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
                                                        echo "  <option  selected='selected'  data-id='$id' value = '$id' data-nombre='$nombre' >$nombre</option>  ";
                                                        }else{
                                                        echo "  <option  value = '$id' data-id='$id' >$nombre</option>  ";
                                                        }
		                                            }
                            echo '</select>';
         
                      ?>
                </div>
                <div class="col-2" >
                    <select id="selectFiltro" class="browser-default custom-select btnEscuelaSelect">
                         <option  selected='selected' value = 'Todos' >Todos</option>  
                        <option  value = 'Nombre'  >Nombre</option>
                        <option  value = 'Apellidos'  >Apellidos</option>
                        <option  value = 'Matricula'  >Matricula</option>
                        <option  value = 'Celular'  >Celular</option>
                        <option  value = 'Automovil'  >Automovil</option>
                        <option  value = 'Correo'  >Correo</option>
                    </select>
                </div>
                <div class="col-2">
                    <button type="button" class="btn btn-primary" id="btnBuscar">Buscar</button>
                </div>
            </div>
            </div>

        </div>
        <br>
        <br>
        <br>
        <?php
            /*
            <table class="table" style='background-color:white'>
  <thead>
    <tr>
      <th scope="col">Nombre del Periodo</th>
      <th scope="col">Contraseña para el Periodo</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">OT15</th>
      <td>OT15</td>
    </tr>
  </tbody>
</table>

            */

            if(isset($_POST['busqueda'])){
                $busqueda = $_POST['busqueda'];
                $filtro = $_POST['filtro'];
                $idPeriodo = $_POST['periodo'];

                if($filtro == "Todos"){
                    $sql = "SELECT * FROM voluntario WHERE voluntario.IDperiodo = '$idPeriodo'";
                }else{
                    $sql = "SELECT * FROM voluntario WHERE voluntario.IDperiodo = '$idPeriodo' AND voluntario.$filtro LIKE '%$busqueda%' ";
                }
		        $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta");
		        $nfilas = mysqli_num_rows ($consulta);

                echo '
		                         <table class="table" style="background-color:white">
                          <thead>
                            <tr>
                              <th scope="col">Nombre</th>
                              <th scope="col">Apellidos</th>
	                          <th scope="col">Matricula</th>
                              <th scope="col">Semestre</th>
                              <th scope="col">Nacimiento</th>
                              <th scope="col">Celular</th>
                              <th scope="col">Automovil</th>
                              <th scope="col">Correo</th>
                            </tr>
                          </thead>
                          <tbody>
		                        ';

		                         for ($i=0; $i<$nfilas; $i++)
		                         {
			                        $tupla = mysqli_fetch_array ($consulta);
			                        $nombre = $tupla["Nombre"] ;
			                        $apellidos = $tupla["Apellidos"];
                                    $matricula = $tupla["Matricula"];
                                    $semestre = $tupla["Semestre"];
                                    $fechaN = $tupla["FechaN"];
                                    $celular = $tupla["Celular"];
                                    $automovil = $tupla["Automovil"];
                                    $correo = $tupla["Correo"];
			
			                        echo "<tr>";
			                        echo '<th scope="col">'.$nombre.'  </th>';
			                        echo '<td scope="col" >'.$apellidos.'  </td>';
                                    echo '<td scope="col" >'.$matricula.'  </td>';
                                    echo '<td scope="col" >'.$semestre.'  </td>';
                                    echo '<td scope="col" >'.$fechaN.'  </td>';
                                    echo '<td scope="col" >'.$celular.'  </td>';
                                    echo '<td scope="col" >'.$automovil.'  </td>';
                                    echo '<td scope="col" >'.$correo.'  </td>';
			                        echo "</tr>";

		                        }

		                        echo "</tbody>
                        </table>";

                //SELECT * FROM Customers WHERE CustomerName LIKE '%or%';

            }


        ?>

  
    </div>
    </body> 
</html> 