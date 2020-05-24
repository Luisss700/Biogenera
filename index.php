
<!DOCTYPE html>
<html  LANG="en">
<head>
<link href="ASSETS/Bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link href="ASSETS/CSS/indexCSS.css" rel="stylesheet" />
</head>
<body style="background-color:#6bcabe">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
    <script type ="text/javascript" src="ASSETS/Bootstrap/js/bootstrap.min.js"></script> 
    <script type ="text/javascript" src="CONTROLLER/indexController.js"></script>


    <?php 
        session_start();
        var_dump($_POST);

        if(isset($_POST['cerrarSesion'])){

            session_destroy();
            session_start();
        }
         if(isset($_POST['loginExito'])){

            $_SESSION['sesionIniciada']=1;
             $_SESSION['correo'] = $_POST['loginExito'];
            
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
               <a class="nav-link waves-effect waves-light"  id="btnMiCuenta">Mi Cuenta <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink"               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                    <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                    <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
                </div>
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
            }else{
                 require("VIEWS/voluntarios.php");
            }
        }
    }




    ?>


</body>
</html>