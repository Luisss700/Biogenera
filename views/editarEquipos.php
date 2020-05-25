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
            if (@$_POST["FASE"]!=2&&isset($_POST["Fase"])) {
              $sql = "SELECT * FROM equipo WHERE IDperiodo=$_POST[periodo]";
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
          ?>
             <br>
             <button type="submit" class="btn btn-primary" name="registroHorario">Seleccionar Periodo</button>
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
