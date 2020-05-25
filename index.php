
<!DOCTYPE html>
<html  LANG="en">
<head>
<link href="ASSETS/Bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="ASSETS/CSS/indexCSS.css" rel="stylesheet" />
</head>
<body style="background-color:#6bcabe">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type ="text/javascript" src="ASSETS/Bootstrap/js/bootstrap.min.js"></script>
    <script type ="text/javascript" src="CONTROLLER/indexController.js"></script>


    <?php
        session_start();

         require('CONTROLLERPHP/conexion.php');

        function setID(){
        require('CONTROLLERPHP/conexion.php');
            $correo = $_SESSION['correo'];
            $sql = "SELECT IDvoluntario FROM voluntario WHERE correo = '$correo'";
		    $consulta = mysqli_query ($conexion,$sql) or die ("Fallo en la consulta ".$sql);
		    $tupla = mysqli_fetch_array ($consulta);
			$_SESSION['id'] = $tupla["IDvoluntario"];
            echo "id = ".$_SESSION['id'];
        }

        if(isset($_POST['cerrarSesion'])){

            session_destroy();
            session_start();
        }
         if(isset($_POST['loginExito'])){

            $_SESSION['sesionIniciada']=1;
             $_SESSION['correo'] = $_POST['loginExito'];
             setID();

        }
        if(isset($_POST['admin'])){

            $_SESSION['sesionIniciada']=2;
             $_SESSION['correo'] = $_POST['admin'];

        }

        if(isset($_POST['actionRegistro'])){
            $valores = array();
            $columnas = array("Nombre","Apellidos","Matricula","Semestre","FechaN","Celular","Automovil","Correo","Contrasena","Sexo");
            $hash = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
            $tabla = "voluntario";
            if(isset($_POST['automovil'])){
                $auto = 1;
            }else{
                $auto = 0;
            }
            array_push($valores, $_POST['nombre'], $_POST['apellidos'],$_POST['matricula'],$_POST['semestre'],$_POST['fechaN'],$_POST['celular'],$auto,$_POST['correo'],$hash,$_POST['sexo']);
            require('CONTROLLERPHP/insert.php');
            $Insert = new Insert;
            $Insert->insertar($tabla,$columnas,$valores);
            $_SESSION['sesionIniciada'] = 1;
            $_SESSION['correo'] = $_POST['correo'];
            setID();


        }



        if (isset($_SESSION['sesionIniciada'])) {
           if ($_SESSION['sesionIniciada']==1){ ?>

<nav class="navbar navbar-expand-lg  info-color" style="background-color:white">
    <a class="navbar-brand mb-0 h1" href="Index.php" style="font-size:40px;padding-right:5em">
                <img src="Assets/Imagenes/biogenera_logo.jpg" width="50" height="50" class="d-inline-block align-top" alt="" />Biogenera</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
               <a class="nav-link waves-effect waves-light"  id="btnMiCuenta" href="#">Mi Horario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" id="btnInscribirPeriodo" href="#">Inscribir Periodo</a>
            </li>
                        <li class="nav-item" id="btnMiEquipo">
                <a class="nav-link waves-effect waves-light azul" >Mi Equipo</a>
            </li>

        </ul>
        <form class="form-inline">
            <a  id="btnCerrarSesion" class=" cerrarSesion" >Cerrar Sesion</a>
        </form>
    </div>
</nav>
       <br>
<br>

    <?php
            }
            if ($_SESSION['sesionIniciada']==2){
             ?>

             <nav class="navbar navbar-expand-lg  info-color" style="background-color:white">
    <a class="navbar-brand mb-0 h1" href="Index.php" style="font-size:40px;padding-right:5em">
                <img src="Assets/Imagenes/biogenera_logo.jpg" width="50" height="50" class="d-inline-block align-top" alt="" />Biogenera</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active" id="btnVoluntarios">
               <a class="nav-link waves-effect waves-light azul" > Voluntarios </a>
            </li>
            <li class="nav-item" id="btnEscuelas">
                <a class="nav-link waves-effect waves-light azul" >Escuelas</a>
            </li>
            <li class="nav-item" id="btnPeriodos">
                <a class="nav-link waves-effect waves-light azul" >Periodos</a>
            </li>
             <li class="nav-item" id="btnRegistroEscuela">
                <a class="nav-link waves-effect waves-light azul" >Registro Escuela</a>
            </li>
            <li class="nav-item" id="btnEditarEquipos">
               <a class="nav-link waves-effect waves-light azul" >Editar Equipos</a>
           </li>
             <li class="nav-item" id="btnRegistroEquipo">
                <a class="nav-link waves-effect waves-light azul" >Registro de Equipo</a>
            </li>
        </ul>
        <form class="form-inline">
            <a  id="btnCerrarSesion" class="nav-link waves-effect waves-light cerrarSesion" >Cerrar Sesion</a>
        </form>
    </div>
</nav>
       <br>
<br>


             <?php
            }
        }
    ?>
    <?php
    if(isset($_POST["ruta"])){
        if($_POST["ruta"]=="miCuenta"){
            require("VIEWS/miCuenta.php");
        }
        if($_POST["ruta"]=="registro"){
            require("VIEWS/registro.php");
         }
         if($_POST["ruta"]=="inscribirPeriodo"){
             require("VIEWS/inscribirPeriodo.php");
         }
        if($_POST["ruta"]=="miEquipo"){
              require("VIEWS/miEquipo.php");
         }
    }else{

    if (isset($_SESSION['sesionIniciada'])){
        if($_SESSION['sesionIniciada']==1){
                 require("VIEWS/miCuenta.php"); //No soy admin
        }
    }else{
        require("VIEWS/login.php");
    }
    }
    //SOY ADMIN
    if (isset($_SESSION['sesionIniciada'])){
        if($_SESSION['sesionIniciada'] == 2){

            if(isset($_POST["ruta"])){
                 $ruta = $_POST["ruta"];
                 if($ruta=="voluntarios"){
                    require("VIEWS/voluntarios.php");
                 }
                 if($ruta=="escuelas"){
                    require("VIEWS/escuelas.php");
                 }
                 if($ruta=="periodos"){
                    require("VIEWS/periodos.php");
                 }
                 if($ruta=="registroEscuela"){
                     require("VIEWS/registroEscuela.php");
                 }
                 if($ruta=="editarEquipos"){
                     require("VIEWS/editarEquipos.php");
                 }
                  if($ruta=="registroEquipo"){
                     require("VIEWS/registrarEquipo.php");
                 }
            }else{
                 require("VIEWS/voluntarios.php");
            }
        }
    }




    ?>


</body>
</html>
