<?php
if(isset($_POST['positivo']))
{
    require ("CONTROLLERPHP/insertarEquipo.php");
}
if(isset($_POST['negativo']))
{
    require ("CONTROLLERPHP/borrarEquipo.php");
}

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Bootstrap ccs, Basicamente aqui se carga bootsrap-->
    <meta charset="utf-8"/>
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1">
    </head>
    <body style="background-color:#6bcabe">
          <h1 class="display-1 text-center">Editado de equipos</h1>
          <br>
<form id="horarioRegistro" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">

  <div class="container">
     <div class="row">
         <div class="col-3" ></div>
         <div class="col-6">

           <?php
           if (!isset($_POST["Fase"])) {
               $sql = "SELECT * FROM periodo";
           $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
           $nfilas = mysqli_num_rows ($consulta);

               echo '<select name="periodo" id="selectPeriodo"class="browser-default custom-select btnEscuelaSelect">';

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
              <br>
              <button type="submit" class="btn btn-primary" name="registroHorario">Seleccionar Periodo</button>
              <input type="hidden" name="ruta" value="editarEquipos">
              <input type="hidden" name="Fase" value="1">
            <?php
          }
            if (@$_POST["Fase"]!=2&&isset($_POST["Fase"])) {
              $periodo=$_POST['periodo'];
              $sql = "SELECT * FROM equipo WHERE IDperiodo=$periodo";
          $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
          $nfilas = mysqli_num_rows ($consulta);

              echo '<select name="equipo" id="selectPeriodo"class="browser-default custom-select btnEscuelaSelect">';

                    for ($i=0; $i<$nfilas; $i++)
                    {
                   $tupla = mysqli_fetch_array ($consulta);
                        $id = $tupla["IDequipo"];
                            // <option value="1">One</option>
                            echo "  <option  value = '$id' data-nombre='$id' >$id</option>  ";
                    }
              echo '</select>';
             echo "<input type='hidden' name='periodo' value='".@$periodo."'>";

          ?>
             <br>
             <button type="submit" class="btn btn-primary" name="registroHorario">Seleccionar Equipo</button>
             <input type="hidden" name="ruta" value="editarEquipos">
             <input type="hidden" name="Fase" value="2">

           <?php }
           if (@$_POST["Fase"]==2) {
         @$equipo=$_POST['equipo'];
         @$periodo=$_POST['periodo'];
         $sql = "SELECT * FROM voluntario WHERE IDvoluntario IN(SELECT IDvoluntario FROM voluntario WHERE IDvoluntario NOT IN(SELECT IDvoluntario FROM equipovoluntario)) AND IDperiodo=$periodo ";
         $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
         $nfilas = mysqli_num_rows ($consulta);
         ?>
         <div style="background-color:white">


         <table class="table">
           <thead>
             <tr>
               <th scope="col">Nombre</th>
               <th scope="col">Agregar</th>
             </tr>
           </thead>
          <tbody>
            <?php
            for ($i=0; $i<$nfilas; $i++) {
            $tupla = mysqli_fetch_array($consulta);

            echo "<tr>";
            echo  "<td>".$tupla['Nombre']."</td>";
            echo  "<td><button type='submit' class='btn btn-primary' name='positivo' value='".$tupla['IDvoluntario']."'>Agregar</button></td>";
            echo "</tr>";
            echo "<input type='hidden' name='periodo' value='".@$periodo."'>";
            echo "<input type='hidden' name='equipo' value='".@$equipo."'>";
          }
            ?>
          </tbody>
        </table>

        <?php
        $sql2 = "SELECT IDvoluntario FROM equipovoluntario WHERE IDequipo=$equipo ";
        $consulta2 = mysqli_query ($conexion,$sql2) or die ("Fallo en la consulta ".$sql);
        $nfilas2 = mysqli_num_rows ($consulta2);
         ?>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <?php
            for ($i=0; $i<$nfilas2; $i++) {
           $tupla2 = mysqli_fetch_array($consulta2);
           $idvoluntario2=$tupla2['IDvoluntario'];
           $sql="SELECT * FROM voluntario WHERE IDvoluntario=$idvoluntario2";
           $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
           $tupla3 = mysqli_fetch_array($consulta);
           echo "<tr>";
           echo  "<td>".$tupla3['Nombre']."</td>";
           echo  "<td><button type='submit' class='btn btn-primary' name='negativo' value='".$tupla3['IDvoluntario']."'>Eliminar</button></td>";
           echo "</tr>";
           echo "<input type='hidden' name='periodo' value='".@$periodo."'>";
           echo "<input type='hidden' name='equipo' value='".@$equipo."'>";
         } ?>
          </tbody>
        </table>


        </div>
        <input type="hidden" name="ruta" value="editarEquipos">
        <input type="hidden" name="Fase" value="2">

       <?php } ?>


        </div>
        <div class="col-3"></div>
    </div>
</div>
</form>
  </body>
</html>
