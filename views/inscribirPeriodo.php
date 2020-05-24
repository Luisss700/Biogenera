
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
                    <input class="form-control" type="text" placeholder="Nombre del periodo">
                    <br>
                    <input class="form-control" type="text" placeholder="Contraseña del periodo">
                    <br>
                    <button class="btn btn-primary" id="btnAgregarPeriodo">Registrar</button>
                    <input type="hidden" name="ruta" value="inscribirPeriodo">
                  </div>
                <div class="col-3"></div>
              </div>
            </div>
          </form>
    </body>
  </html>
