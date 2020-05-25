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


          <?php
          if($_POST["Fase"]!=1)
          {
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
              <button type="submit" class="btn btn-primary" name="selecionPeriodo"></button>
              <input type="hidden" name="ruta" value="">
              <input type="hidden" name="Fase" value="1">
            <?php }
            if ($_POST["FASE"]!=2) {

            }
             ?>
</form>
  </body>
</html>
