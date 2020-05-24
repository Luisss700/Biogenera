<!doctype html>
<html lang="en">
  <head>
    <!-- Bootstrap ccs, Basicamente aqui se carga bootsrap-->
    <link href="./ASSETS/CSS/miCuentaCSS.css" rel="stylesheet" />
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body style="background-color:#6bcabe">
    <script type ="text/javascript" src="CONTROLLER/miCuentaController.js"></script>
<form id="formHorario" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"
<div class="form-check">
  <div style="background-color:white">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Hora</th>
          <th scope="col">Lunes</th>
          <th scope="col">Martes</th>
          <th scope="col">Miercoles</th>
          <th scope="col">Jueves</th>
          <th scope="col">Viernes</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <th scope="row">7:00-7:30</th>
            <td><input class="form-check-input" type="checkbox" value="1" id="Lunes7"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="Martes7"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="Miercoles7"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="Jueves7"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="Viernes7"></td>
        </tr>
        <tr>
            <th scope="row">7:30-8:00</th>
            <td><input class="form-check-input" type="checkbox" value="2" id="Lunes73"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="Martes73"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="Miercoles73"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="Jueves73"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="Viernes73"></td>
        </tr>
        <tr>
            <th scope="row">8:00-8:30</th>
            <td><input class="form-check-input" type="checkbox" value="3" id="Lunes8"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="Martes8"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="Miercoles8"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="Jueves8"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="Viernes8"></td>
        </tr>
        <tr>
            <th scope="row">8:30-9:00</th>
            <td><input class="form-check-input" type="checkbox" value="4" id="Lunes83"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="Martes83"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="Miercoles83"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="Jueves83"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="Viernes83"></td>
        </tr>
        <tr>
            <th scope="row">9:00-9:30</th>
            <td><input class="form-check-input" type="checkbox" value="5" id="Lunes9"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="Martes9"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="Miercoles9"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="Jueves9"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="Viernes9"></td>
        </tr>
        <tr>
            <th scope="row">9:30-10:00</th>
            <td><input class="form-check-input" type="checkbox" value="6" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
        </tr>
        <tr>
            <th scope="row">10:00-10:30</th>
            <td><input class="form-check-input" type="checkbox" value="7" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
        </tr>
        <tr>
            <th scope="row">10:30-11:00</th>
            <td><input class="form-check-input" type="checkbox" value="8" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
        </tr>
        <tr>
            <th scope="row">11:00-11:30</th>
            <td><input class="form-check-input" type="checkbox" value="9" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
        </tr>
        <tr>
            <th scope="row">11:30-12:00</th>
            <td><input class="form-check-input" type="checkbox" value="10" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
        </tr>
        <tr>
            <th scope="row">12:00-12:30</th>
            <td><input class="form-check-input" type="checkbox" value="11" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
        </tr>
        <tr>
            <th scope="row">12:30-1:00</th>
            <td><input class="form-check-input" type="checkbox" value="13" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
        </tr>
        <tr>
            <th scope="row">1:00-1:30</th>
            <td><input class="form-check-input" type="checkbox" value="14" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
        </tr>
        <tr>
            <th scope="row">1:30-2:00</th>
            <td><input class="form-check-input" type="checkbox" value="15" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
        </tr>
        <tr>
            <th scope="row">2:00-2:30</th>
            <td><input class="form-check-input" type="checkbox" value="16" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
        </tr>
        <tr>
            <th scope="row">2:30-3:00</th>
            <td><input class="form-check-input" type="checkbox" value="17" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
        </tr>
        <tr>
            <th scope="row">3:00-3:30</th>
            <td><input class="form-check-input" type="checkbox" value="18" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
        </tr>
        <tr>
            <th scope="row">3:30-4:00</th>
            <td><input class="form-check-input" type="checkbox" value="19" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
        </tr>
        <tr>
            <th scope="row">4:00-4:30</th>
            <td><input class="form-check-input" type="checkbox" value="20" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
        </tr>
        <tr>
            <th scope="row">4:30-5:00</th>
            <td><input class="form-check-input" type="checkbox" value="21" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
            <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></td>
        </tr>
      </tbody>

    </table>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</div>
</form>

  </body>
</html>
