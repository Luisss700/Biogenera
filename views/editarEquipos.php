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
              echo "<h4>Seleccione un periodo</h4>";
               echo '<select  name="periodo" id="selectPeriodo"class="browser-default custom-select btnEscuelaSelect">';

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
              <br>
              <button type="submit" class="btn btn-primary"  name="registroHorario">Seleccionar Periodo</button>
              <input type="hidden"  name="ruta" value="editarEquipos">
              <input type="hidden"  name="Fase" value="1">
            <?php
          }
            if (@$_POST["Fase"]!=2&&isset($_POST["Fase"])) {
              $periodo=$_POST['periodo'];
              $sql = "SELECT * FROM equipo WHERE IDperiodo=$periodo";
          $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
          $nfilas = mysqli_num_rows ($consulta);
            echo "<h4>Seleccion un equipo existente dentro del periodo</h4>";
              echo '<select  name="equipo" id="selectPeriodo"class="browser-default custom-select btnEscuelaSelect">';

                    for ($i=0; $i<$nfilas; $i++)
                    {
                   $tupla = mysqli_fetch_array ($consulta);
                        $id = $tupla["IDequipo"];
                            // <option value="1">One</option>
                            echo "  <option  value = '$id' data-nombre='$id' >$id</option>  ";
                    }
              echo '</select>';
             echo "<input type='hidden'  name='periodo' value='".@$periodo."'>";

          ?>
             <br>
             <br>
             <button type="submit" class="btn btn-primary"  name="registroHorario">Seleccionar Equipo</button>
             <input type="hidden"  name="ruta" value="editarEquipos">
             <input type="hidden"  name="Fase" value="2">

           <?php }
           if (@$_POST["Fase"]==2) {
         @$equipo=$_POST['equipo'];
         @$periodo=$_POST['periodo'];
         $sql = "SELECT * FROM voluntario WHERE IDvoluntario IN(SELECT IDvoluntario FROM voluntario WHERE IDvoluntario NOT IN(SELECT IDvoluntario FROM equipovoluntario)) AND IDperiodo=$periodo ";
         $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
         $nfilas = mysqli_num_rows ($consulta);
         ?>

         <h4>De la lista porfavor elija quien agregar y a quien eliminar</h4>
         <div style="background-color:white">
         <table class="table">
           <thead>
             <tr>
               <th scope="col">Nombre</th>
               <th scope="col">Agregar</th>
               <th scope="col">Informacion</th>
             </tr>
           </thead>
          <tbody>
            <?php
            for ($i=0; $i<$nfilas; $i++) {
            $tupla = mysqli_fetch_array($consulta);

            echo "<tr>";
            echo  "<td>".$tupla['Nombre']."</td>";
            echo  "<td><button type='submit' class='btn btn-primary'  name='positivo' value='".$tupla['IDvoluntario']."'>Agregar</button></td>";
            echo  "<td><button type='submit' class='btn btn-primary'  name='Informacion' value='".$tupla['IDvoluntario']."'>Mostrar Informaicon</button></td>";
            echo "</tr>";
            echo "<input type='hidden'  name='periodo' value='".@$periodo."'>";
            echo "<input type='hidden'  name='equipo' value='".@$equipo."'>";
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
              <th scope="col">Informacion</th>
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
           echo  "<td><button type='submit' class='btn btn-primary'  name='negativo' value='".$tupla3['IDvoluntario']."'>Eliminar</button></td>";
          echo  "<td><button type='submit' class='btn btn-primary'  name='Informacion' value='".$tupla3['IDvoluntario']."'>Mostrar Informaicon</button></td>";
           echo "</tr>";
           echo "<input type='hidden'  name='periodo' value='".@$periodo."'>";
           echo "<input type='hidden'  name='equipo' value='".@$equipo."'>";
         } ?>
          </tbody>
        </table>


        </div>
        <input type="hidden"  name="ruta" value="editarEquipos">
        <input type="hidden"  name="Fase" value="2">

       <?php }
       if (isset($_POST['Informacion'])) {
         $_SESSION['id']=$_POST['Informacion'];
         require ('CONTROLLERPHP/leerHorario.php');
         ?>
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
                   <td><input class="form-check-input" type="checkbox" value="1"  disabled name="1"<?php if (@$_REQUEST["1"]==1||isset($_SESSION["h"."1"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="2"  disabled name="2"<?php if (@$_REQUEST["2"]==2||isset($_SESSION["h"."2"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="3"  disabled name="3"<?php if (@$_REQUEST["3"]==3||isset($_SESSION["h"."3"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="4"  disabled name="4"<?php if (@$_REQUEST["4"]==4||isset($_SESSION["h"."4"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="5"  disabled name="5"<?php if (@$_REQUEST["5"]==5||isset($_SESSION["h"."5"])) echo "checked style='outline:1px solid black;'"?>></td>
               </tr>
               <tr>
                   <th scope="row">7:30-8:00</th>
                   <td><input class="form-check-input" type="checkbox" value="6"  disabled name="6"<?php if (@$_REQUEST["6"]==6||isset($_SESSION["h"."6"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="7"  disabled name="7"<?php if (@$_REQUEST["7"]==7||isset($_SESSION["h"."7"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="8"  disabled name="8"<?php if (@$_REQUEST["8"]==8||isset($_SESSION["h"."8"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="9"  disabled name="9"<?php if (@$_REQUEST["9"]==9||isset($_SESSION["h"."9"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="10"  disabled name="10"<?php if (@$_REQUEST["10"]==10||isset($_SESSION["h"."10"])) echo "checked style='outline:1px solid black;'"?>></td>
               </tr>
               <tr>
                   <th scope="row">8:00-8:30</th>
                   <td><input class="form-check-input" type="checkbox" value="11"  disabled name="11"<?php if (@$_REQUEST["11"]==11||isset($_SESSION["h"."11"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="12"  disabled name="12"<?php if (@$_REQUEST["12"]==12||isset($_SESSION["h"."12"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="13"  disabled name="13"<?php if (@$_REQUEST["13"]==13||isset($_SESSION["h"."13"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="14"  disabled name="14"<?php if (@$_REQUEST["14"]==14||isset($_SESSION["h"."14"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="15"  disabled name="15"<?php if (@$_REQUEST["15"]==15||isset($_SESSION["h"."15"])) echo "checked style='outline:1px solid black;'"?>></td>
               </tr>
               <tr>
                   <th scope="row">8:30-9:00</th>
                   <td><input class="form-check-input" type="checkbox" value="16"  disabled name="16"<?php if (@$_REQUEST["16"]==16||isset($_SESSION["h"."16"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="17"  disabled name="17"<?php if (@$_REQUEST["17"]==17||isset($_SESSION["h"."17"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="18"  disabled name="18"<?php if (@$_REQUEST["18"]==18||isset($_SESSION["h"."18"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="19"  disabled name="19"<?php if (@$_REQUEST["19"]==19||isset($_SESSION["h"."19"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="20"  disabled name="20"<?php if (@$_REQUEST["20"]==20||isset($_SESSION["h"."20"])) echo "checked style='outline:1px solid black;'"?>></td>
               </tr>
               <tr>
                   <th scope="row">9:00-9:30</th>
                   <td><input class="form-check-input" type="checkbox" value="21"  disabled name="21"<?php if (@$_REQUEST["21"]==21||isset($_SESSION["h"."21"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="22"  disabled name="22"<?php if (@$_REQUEST["22"]==22||isset($_SESSION["h"."22"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="23"  disabled name="23"<?php if (@$_REQUEST["23"]==23||isset($_SESSION["h"."23"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="24"  disabled name="24"<?php if (@$_REQUEST["24"]==24||isset($_SESSION["h"."24"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="25"  disabled name="25"<?php if (@$_REQUEST["25"]==25||isset($_SESSION["h"."25"])) echo "checked style='outline:1px solid black;'"?>></td>
               </tr>
               <tr>
                   <th scope="row">9:30-10:00</th>
                   <td><input class="form-check-input" type="checkbox" value="26"  disabled name="26"<?php if (@$_REQUEST["26"]==26||isset($_SESSION["h"."26"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="27"  disabled name="27"<?php if (@$_REQUEST["27"]==27||isset($_SESSION["h"."27"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="28"  disabled name="28"<?php if (@$_REQUEST["28"]==28||isset($_SESSION["h"."28"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="29"  disabled name="29"<?php if (@$_REQUEST["29"]==29||isset($_SESSION["h"."29"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="30"  disabled name="30"<?php if (@$_REQUEST["30"]==30||isset($_SESSION["h"."30"])) echo "checked style='outline:1px solid black;'"?>></td>
               </tr>
               <tr>
                   <th scope="row">10:00-10:30</th>
                   <td><input class="form-check-input" type="checkbox" value="31"  disabled name="31"<?php if (@$_REQUEST["31"]==31||isset($_SESSION["h"."31"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="32"  disabled name="32"<?php if (@$_REQUEST["32"]==32||isset($_SESSION["h"."32"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="33"  disabled name="33"<?php if (@$_REQUEST["33"]==33||isset($_SESSION["h"."33"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="34"  disabled name="34"<?php if (@$_REQUEST["34"]==34||isset($_SESSION["h"."34"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="35"  disabled name="35"<?php if (@$_REQUEST["35"]==35||isset($_SESSION["h"."35"])) echo "checked style='outline:1px solid black;'"?>></td>
               </tr>
               <tr>
                   <th scope="row">10:30-11:00</th>
                   <td><input class="form-check-input" type="checkbox" value="36"  disabled name="36"<?php if (@$_REQUEST["36"]==36||isset($_SESSION["h"."36"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="37"  disabled name="37"<?php if (@$_REQUEST["37"]==37||isset($_SESSION["h"."37"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="38"  disabled name="38"<?php if (@$_REQUEST["38"]==38||isset($_SESSION["h"."38"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="39"  disabled name="39"<?php if (@$_REQUEST["39"]==39||isset($_SESSION["h"."39"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="40"  disabled name="40"<?php if (@$_REQUEST["40"]==40||isset($_SESSION["h"."40"])) echo "checked style='outline:1px solid black;'"?>></td>
               </tr>
               <tr>
                   <th scope="row">11:00-11:30</th>
                   <td><input class="form-check-input" type="checkbox" value="41"  disabled name="41"<?php if (@$_REQUEST["41"]==41||isset($_SESSION["h"."41"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="42"  disabled name="42"<?php if (@$_REQUEST["42"]==42||isset($_SESSION["h"."42"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="43"  disabled name="43"<?php if (@$_REQUEST["43"]==43||isset($_SESSION["h"."43"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="44"  disabled name="44"<?php if (@$_REQUEST["44"]==44||isset($_SESSION["h"."44"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="45"  disabled name="45"<?php if (@$_REQUEST["45"]==45||isset($_SESSION["h"."45"])) echo "checked style='outline:1px solid black;'"?>></td>
               </tr>
               <tr>
                   <th scope="row">11:30-12:00</th>
                   <td><input class="form-check-input" type="checkbox" value="46"  disabled name="46"<?php if (@$_REQUEST["46"]==46||isset($_SESSION["h"."46"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="47"  disabled name="47"<?php if (@$_REQUEST["47"]==47||isset($_SESSION["h"."47"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="48"  disabled name="48"<?php if (@$_REQUEST["48"]==48||isset($_SESSION["h"."48"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="49"  disabled name="49"<?php if (@$_REQUEST["49"]==49||isset($_SESSION["h"."49"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="50"  disabled name="50"<?php if (@$_REQUEST["50"]==50||isset($_SESSION["h"."50"])) echo "checked style='outline:1px solid black;'"?>></td>
               </tr>
               <tr>
                   <th scope="row">12:00-12:30</th>
                   <td><input class="form-check-input" type="checkbox" value="51"  disabled name="51"<?php if (@$_REQUEST["51"]==51||isset($_SESSION["h"."51"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="52"  disabled name="52"<?php if (@$_REQUEST["52"]==52||isset($_SESSION["h"."52"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="53"  disabled name="53"<?php if (@$_REQUEST["53"]==53||isset($_SESSION["h"."53"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="54"  disabled name="54"<?php if (@$_REQUEST["54"]==54||isset($_SESSION["h"."54"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="55"  disabled name="55"<?php if (@$_REQUEST["55"]==55||isset($_SESSION["h"."55"])) echo "checked style='outline:1px solid black;'"?>></td>
               </tr>
               <tr>
                   <th scope="row">12:30-1:00</th>
                   <td><input class="form-check-input" type="checkbox" value="56"  disabled name="56"<?php if (@$_REQUEST["56"]==56||isset($_SESSION["h"."56"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="57"  disabled name="57"<?php if (@$_REQUEST["57"]==57||isset($_SESSION["h"."57"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="58"  disabled name="58"<?php if (@$_REQUEST["58"]==58||isset($_SESSION["h"."58"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="59"  disabled name="59"<?php if (@$_REQUEST["59"]==59||isset($_SESSION["h"."59"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="60"  disabled name="60"<?php if (@$_REQUEST["60"]==60||isset($_SESSION["h"."60"])) echo "checked style='outline:1px solid black;'"?>></td>
               </tr>
               <tr>
                   <th scope="row">1:00-1:30</th>
                   <td><input class="form-check-input" type="checkbox" value="61"  disabled name="61"<?php if (@$_REQUEST["61"]==61||isset($_SESSION["h"."61"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="62"  disabled name="62"<?php if (@$_REQUEST["62"]==62||isset($_SESSION["h"."62"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="63"  disabled name="63"<?php if (@$_REQUEST["63"]==63||isset($_SESSION["h"."63"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="64"  disabled name="64"<?php if (@$_REQUEST["64"]==64||isset($_SESSION["h"."64"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="65"  disabled name="65"<?php if (@$_REQUEST["65"]==65||isset($_SESSION["h"."65"])) echo "checked style='outline:1px solid black;'"?>></td>
               </tr>
               <tr>
                   <th scope="row">1:30-2:00</th>
                   <td><input class="form-check-input" type="checkbox" value="66"  disabled name="66"<?php if (@$_REQUEST["66"]==66||isset($_SESSION["h"."66"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="67"  disabled name="67"<?php if (@$_REQUEST["67"]==67||isset($_SESSION["h"."67"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="68"  disabled name="68"<?php if (@$_REQUEST["68"]==68||isset($_SESSION["h"."68"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="69"  disabled name="69"<?php if (@$_REQUEST["69"]==69||isset($_SESSION["h"."69"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="70"  disabled name="70"<?php if (@$_REQUEST["70"]==70||isset($_SESSION["h"."70"])) echo "checked style='outline:1px solid black;'"?>></td>
               </tr>
               <tr>
                   <th scope="row">2:00-2:30</th>
                   <td><input class="form-check-input" type="checkbox" value="71"  disabled name="71"<?php if (@$_REQUEST["71"]==71||isset($_SESSION["h"."71"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="72"  disabled name="72"<?php if (@$_REQUEST["72"]==72||isset($_SESSION["h"."72"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="73"  disabled name="73"<?php if (@$_REQUEST["73"]==73||isset($_SESSION["h"."73"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="74"  disabled name="74"<?php if (@$_REQUEST["74"]==74||isset($_SESSION["h"."74"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="75"  disabled name="75"<?php if (@$_REQUEST["75"]==75||isset($_SESSION["h"."75"])) echo "checked style='outline:1px solid black;'"?>></td>
               </tr>
               <tr>
                   <th scope="row">2:30-3:00</th>
                   <td><input class="form-check-input" type="checkbox" value="76"  disabled name="76"<?php if (@$_REQUEST["76"]==76||isset($_SESSION["h"."76"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="77"  disabled name="77"<?php if (@$_REQUEST["77"]==77||isset($_SESSION["h"."77"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value=78  disabled name="78"<?php if (@$_REQUEST["78"]==78||isset($_SESSION["h"."78"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value=79  disabled name="79"<?php if (@$_REQUEST["79"]==79||isset($_SESSION["h"."79"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value=80  disabled name="80"<?php if (@$_REQUEST["80"]==80||isset($_SESSION["h"."80"])) echo "checked style='outline:1px solid black;'"?>></td>
               </tr>
               <tr>
                   <th scope="row">3:00-3:30</th>
                   <td><input class="form-check-input" type="checkbox" value="81"  disabled name="81"<?php if (@$_REQUEST["81"]==81||isset($_SESSION["h"."81"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value=82  disabled name="82"<?php if (@$_REQUEST["82"]==82||isset($_SESSION["h"."82"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value=83  disabled name="83"<?php if (@$_REQUEST["83"]==83||isset($_SESSION["h"."83"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value=84  disabled name="84"<?php if (@$_REQUEST["84"]==84||isset($_SESSION["h"."84"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="85"  disabled name="85"<?php if (@$_REQUEST["85"]==85||isset($_SESSION["h"."85"])) echo "checked style='outline:1px solid black;'"?>></td>
               </tr>
               <tr>
                   <th scope="row">3:30-4:00</th>
                   <td><input class="form-check-input" type="checkbox" value="86"  disabled name="86"<?php if (@$_REQUEST["86"]==86||isset($_SESSION["h"."86"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="87"  disabled name="87"<?php if (@$_REQUEST["87"]==87||isset($_SESSION["h"."87"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="88"  disabled name="88"<?php if (@$_REQUEST["88"]==88||isset($_SESSION["h"."88"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="89"  disabled name="89"<?php if (@$_REQUEST["89"]==89||isset($_SESSION["h"."89"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="90"  disabled name="90"<?php if (@$_REQUEST["90"]==90||isset($_SESSION["h"."90"])) echo "checked style='outline:1px solid black;'"?>></td>
               </tr>
               <tr>
                   <th scope="row">4:00-4:30</th>
                   <td><input class="form-check-input" type="checkbox" value="91"  disabled name="91"<?php if (@$_REQUEST["91"]==91||isset($_SESSION["h"."91"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="92"  disabled name="92"<?php if (@$_REQUEST["92"]==92||isset($_SESSION["h"."92"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="93"  disabled name="93"<?php if (@$_REQUEST["93"]==93||isset($_SESSION["h"."93"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="94"  disabled name="94"<?php if (@$_REQUEST["94"]==94||isset($_SESSION["h"."94"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="95"  disabled name="95"<?php if (@$_REQUEST["95"]==95||isset($_SESSION["h"."95"])) echo "checked style='outline:1px solid black;'"?>></td>
               </tr>
               <tr>
                   <th scope="row">4:30-5:00</th>
                   <td><input class="form-check-input" type="checkbox" value="96"  disabled name="96"<?php if (@$_REQUEST["96"]==96||isset($_SESSION["h"."96"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="97"  disabled name="97"<?php if (@$_REQUEST["97"]==97||isset($_SESSION["h"."97"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="98"  disabled name="98"<?php if (@$_REQUEST["98"]==98||isset($_SESSION["h"."98"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="99"  disabled name="98"<?php if (@$_REQUEST["99"]==99||isset($_SESSION["h"."99"])) echo "checked style='outline:1px solid black;'"?>></td>
                   <td><input class="form-check-input" type="checkbox" value="100"  disabled name="100"<?php if (@$_REQUEST["100"]==100||isset($_SESSION["h"."100"])) echo "checked style='outline:1px solid black;'"?>></td>
               </tr>
             </tbody>

           </table>
           </div>
       <?php } ?>

       <?php
       for ($i=0; $i<100; $i++) {
         if (isset($_SESSION["h".($i+1)])) {
                 unset($_SESSION["h".($i+1)]);
         }
       }
        ?>

        </div>
        <div class="col-3"></div>
    </div>
</div>
</form>
  </body>
</html>
