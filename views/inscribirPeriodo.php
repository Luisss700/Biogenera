<?php
  if(isset($_POST['insertar']))
  {require("CONTROLLERPHP/inscribirPeriodoVoluntario.php");$impresion=0;}
  else {
    $id=$_SESSION['id'];
    $sql = "SELECT IDperiodo FROM voluntario WHERE IDvoluntario = '$id'";
    $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
    $tupla = mysqli_fetch_array($consulta);
}
  
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Bootstrap ccs, Basicamente aqui se carga bootsrap-->
    <link href="./ASSETS/CSS/miCuentaCSS.css" rel="stylesheet" />
    <meta charset="utf-8"/>
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1">
    </head>
    <body style="background-color:#6bcabe">
          <h1 class="display-1 text-center">Inscribir Periodo</h1>
          <br>
          <form id="registroPeriodo" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">

            <div class="container">
              <div class="row">
                <div class="col-3"></div>
                  <div class="col-6">
                    <input class="form-control" type="text" name="nombre" placeholder="Nombre del periodo">
                    <br>
                    <input class="form-control" type="text" name="contra"placeholder="Contraseña del periodo">
                    <br>
                    <button class="btn btn-primary" id="btnAgregarPeriodo">Registrar</button>
                    <input type="hidden" name="ruta" value="inscribirPeriodo">
                    <input type="hidden" name="insertar" value="insterate">
                    <br>
                    <br>

                    <?php

                          $identificador=$tupla['IDperiodo'];
                          $sql = "SELECT Nombre FROM periodo WHERE IDperiodo = '$identificador'";
                          $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
                          $tupla = mysqli_fetch_array($consulta);
                          ?>
                        <h2>Mi periodo es:<h2>
                          <br>

                          <div id="divPeriodos" style="background-color:white; text-align: center;">
                            <?php echo $tupla["Nombre"]; ?>
                          </div>


                  </div>
                <div class="col-3"></div>

              </div>
            </div>
          </form>


    </body>
  </html>
