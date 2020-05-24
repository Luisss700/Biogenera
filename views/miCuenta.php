<!doctype html>
<html lang="en">
  <head>
    <!-- Bootstrap ccs, Basicamente aqui se carga bootsrap-->
    <link href="./ASSETS/CSS/miCuentaCSS.css" rel="stylesheet" />
    <meta charset="utf-8"/>
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1">
    </head>
    <body style="background-color:#6bcabe">
    <script type ="text/javascript" src="CONTROLLER/miCuentaController.js"></script>
<form id="horarioRegistro" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
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
            <td><input class="form-check-input" type="checkbox" value="1" name="1"<?php if (@$_REQUEST["1"]==1) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="2" name="2"<?php if (@$_REQUEST["2"]==2) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="3" name="3"<?php if (@$_REQUEST["3"]==3) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="4" name="4"<?php if (@$_REQUEST["4"]==4) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="5" name="5"<?php if (@$_REQUEST["5"]==5) echo "checked"?>></td>
        </tr>
        <tr>
            <th scope="row">7:30-8:00</th>
            <td><input class="form-check-input" type="checkbox" value="6" name="6"<?php if (@$_REQUEST["6"]==6) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="7" name="7"<?php if (@$_REQUEST["7"]==7) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="8" name="8"<?php if (@$_REQUEST["8"]==8) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="9" name="9"<?php if (@$_REQUEST["9"]==9) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="10" name="10"<?php if (@$_REQUEST["10"]==10) echo "checked"?>></td>
        </tr>
        <tr>
            <th scope="row">8:00-8:30</th>
            <td><input class="form-check-input" type="checkbox" value="11" name="11"<?php if (@$_REQUEST["11"]==11) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="12" name="12"<?php if (@$_REQUEST["12"]==12) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="13" name="13"<?php if (@$_REQUEST["13"]==13) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="14" name="14"<?php if (@$_REQUEST["14"]==14) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="15" name="15"<?php if (@$_REQUEST["15"]==15) echo "checked"?>></td>
        </tr>
        <tr>
            <th scope="row">8:30-9:00</th>
            <td><input class="form-check-input" type="checkbox" value="16" name="16"<?php if (@$_REQUEST["16"]==16) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="17" name="17"<?php if (@$_REQUEST["17"]==17) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="18" name="18"<?php if (@$_REQUEST["18"]==18) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="19" name="19"<?php if (@$_REQUEST["19"]==19) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="20" name="20"<?php if (@$_REQUEST["20"]==20) echo "checked"?>></td>
        </tr>
        <tr>
            <th scope="row">9:00-9:30</th>
            <td><input class="form-check-input" type="checkbox" value="21" name="21"<?php if (@$_REQUEST["21"]==21) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="22" name="22"<?php if (@$_REQUEST["22"]==22) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="23" name="23"<?php if (@$_REQUEST["23"]==23) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="24" name="24"<?php if (@$_REQUEST["24"]==24) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="25" name="25"<?php if (@$_REQUEST["25"]==25) echo "checked"?>></td>
        </tr>
        <tr>
            <th scope="row">9:30-10:00</th>
            <td><input class="form-check-input" type="checkbox" value="26" name="26"<?php if (@$_REQUEST["26"]==26) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="27" name="27"<?php if (@$_REQUEST["27"]==27) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="28" name="28"<?php if (@$_REQUEST["28"]==28) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="29" name="29"<?php if (@$_REQUEST["29"]==29) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="30" name="30"<?php if (@$_REQUEST["30"]==30) echo "checked"?>></td>
        </tr>
        <tr>
            <th scope="row">10:00-10:30</th>
            <td><input class="form-check-input" type="checkbox" value="31" name="31"<?php if (@$_REQUEST["31"]==31) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="32" name="32"<?php if (@$_REQUEST["32"]==32) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="33" name="33"<?php if (@$_REQUEST["33"]==33) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="34" name="34"<?php if (@$_REQUEST["34"]==34) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="35" name="35"<?php if (@$_REQUEST["35"]==35) echo "checked"?>></td>
        </tr>
        <tr>
            <th scope="row">10:30-11:00</th>
            <td><input class="form-check-input" type="checkbox" value="36" name="36"<?php if (@$_REQUEST["36"]==36) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="37" name="37"<?php if (@$_REQUEST["37"]==37) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="38" name="38"<?php if (@$_REQUEST["38"]==38) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="39" name="39"<?php if (@$_REQUEST["39"]==39) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="40" name="40"<?php if (@$_REQUEST["40"]==40) echo "checked"?>></td>
        </tr>
        <tr>
            <th scope="row">11:00-11:30</th>
            <td><input class="form-check-input" type="checkbox" value="41" name="41"<?php if (@$_REQUEST["41"]==41) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="42" name="42"<?php if (@$_REQUEST["42"]==42) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="43" name="43"<?php if (@$_REQUEST["43"]==43) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="44" name="44"<?php if (@$_REQUEST["44"]==44) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="45" name="45"<?php if (@$_REQUEST["45"]==45) echo "checked"?>></td>
        </tr>
        <tr>
            <th scope="row">11:30-12:00</th>
            <td><input class="form-check-input" type="checkbox" value="46" name="46"<?php if (@$_REQUEST["46"]==46) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="47" name="47"<?php if (@$_REQUEST["47"]==47) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="48" name="48"<?php if (@$_REQUEST["48"]==48) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="49" name="49"<?php if (@$_REQUEST["49"]==49) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="50" name="50"<?php if (@$_REQUEST["50"]==50) echo "checked"?>></td>
        </tr>
        <tr>
            <th scope="row">12:00-12:30</th>
            <td><input class="form-check-input" type="checkbox" value="51" name="51"<?php if (@$_REQUEST["51"]==51) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="52" name="52"<?php if (@$_REQUEST["52"]==52) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="53" name="53"<?php if (@$_REQUEST["53"]==53) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="54" name="54"<?php if (@$_REQUEST["54"]==54) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="55" name="55"<?php if (@$_REQUEST["55"]==55) echo "checked"?>></td>
        </tr>
        <tr>
            <th scope="row">12:30-1:00</th>
            <td><input class="form-check-input" type="checkbox" value="56" name="56"<?php if (@$_REQUEST["56"]==56) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="57" name="57"<?php if (@$_REQUEST["57"]==57) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="58" name="58"<?php if (@$_REQUEST["58"]==58) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="59" name="59"<?php if (@$_REQUEST["59"]==59) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="60" name="60"<?php if (@$_REQUEST["60"]==60) echo "checked"?>></td>
        </tr>
        <tr>
            <th scope="row">1:00-1:30</th>
            <td><input class="form-check-input" type="checkbox" value="61" name="61"<?php if (@$_REQUEST["61"]==61) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="62" name="62"<?php if (@$_REQUEST["62"]==62) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="63" name="63"<?php if (@$_REQUEST["63"]==63) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="64" name="64"<?php if (@$_REQUEST["64"]==64) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="65" name="65"<?php if (@$_REQUEST["65"]==65) echo "checked"?>></td>
        </tr>
        <tr>
            <th scope="row">1:30-2:00</th>
            <td><input class="form-check-input" type="checkbox" value="66" name="66"<?php if (@$_REQUEST["66"]==66) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="67" name="67"<?php if (@$_REQUEST["67"]==67) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="68" name="68"<?php if (@$_REQUEST["68"]==68) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="69" name="69"<?php if (@$_REQUEST["69"]==69) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="70" name="70"<?php if (@$_REQUEST["70"]==70) echo "checked"?>></td>
        </tr>
        <tr>
            <th scope="row">2:00-2:30</th>
            <td><input class="form-check-input" type="checkbox" value="71" name="71"<?php if (@$_REQUEST["71"]==71) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="72" name="72"<?php if (@$_REQUEST["72"]==72) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="73" name="73"<?php if (@$_REQUEST["73"]==73) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="74" name="74"<?php if (@$_REQUEST["74"]==74) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="75" name="75"<?php if (@$_REQUEST["75"]==75) echo "checked"?>></td>
        </tr>
        <tr>
            <th scope="row">2:30-3:00</th>
            <td><input class="form-check-input" type="checkbox" value="76" name="76"<?php if (@$_REQUEST["76"]==76) echo "checked"?>></td>
            <td><input class="form-check-input" type="checkbox" value="77" name="77"></td>
            <td><input class="form-check-input" type="checkbox" value=78 name="78"></td>
            <td><input class="form-check-input" type="checkbox" value=79 name="79"></td>
            <td><input class="form-check-input" type="checkbox" value=80 name="80"></td>
        </tr>
        <tr>
            <th scope="row">3:00-3:30</th>
            <td><input class="form-check-input" type="checkbox" value="81" name="81"></td>
            <td><input class="form-check-input" type="checkbox" value=82 name="82"></td>
            <td><input class="form-check-input" type="checkbox" value=83 name="83"></td>
            <td><input class="form-check-input" type="checkbox" value=84 name="84"></td>
            <td><input class="form-check-input" type="checkbox" value="85" name="85"></td>
        </tr>
        <tr>
            <th scope="row">3:30-4:00</th>
            <td><input class="form-check-input" type="checkbox" value="86" name="86"></td>
            <td><input class="form-check-input" type="checkbox" value="87" name="87"></td>
            <td><input class="form-check-input" type="checkbox" value="88" name="88"></td>
            <td><input class="form-check-input" type="checkbox" value="89" name="89"></td>
            <td><input class="form-check-input" type="checkbox" value="90" name="90"></td>
        </tr>
        <tr>
            <th scope="row">4:00-4:30</th>
            <td><input class="form-check-input" type="checkbox" value="91" name="91"></td>
            <td><input class="form-check-input" type="checkbox" value="92" name="92"></td>
            <td><input class="form-check-input" type="checkbox" value="93" name="93"></td>
            <td><input class="form-check-input" type="checkbox" value="94" name="94"></td>
            <td><input class="form-check-input" type="checkbox" value="95" name="95"></td>
        </tr>
        <tr>
            <th scope="row">4:30-5:00</th>
            <td><input class="form-check-input" type="checkbox" value="96" name="96"></td>
            <td><input class="form-check-input" type="checkbox" value="97" name="97"></td>
            <td><input class="form-check-input" type="checkbox" value="98" name="98"></td>
            <td><input class="form-check-input" type="checkbox" value="99" name="98"></td>
            <td><input class="form-check-input" type="checkbox" value="100" name="100"></td>
        </tr>
      </tbody>

    </table>
    </div>
    <button type="submit" class="btn btn-primary" name="registroHorario">Register</button>
    <input type="hnameden" name="ruta" value="miCuenta">
</div>
</form>

  </body>
</html>
