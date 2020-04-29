
<!DOCTYPE html>
<html>
<head>
<link href="ASSETS/Bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link href="ASSETS/CSS/indexCSS.css" rel="stylesheet" />
</head>

<body style="background-color:#6bcabe">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
    <script type ="text/javascript" src="ASSETS/Bootstrap/js/bootstrap.min.js"></script> 
    <script type ="text/javascript" src="CONTROLLER/indexController.js"></script>

    <nav class="navbar navbar-expand-md" style="background-color:white">
        <div class="container">
            <a class="navbar-brand mb-0 h1" href="Index.php" style="font-size:40px;padding-right:5em">
                <img src="Assets/Imagenes/biogenera_logo.jpg" width="50" height="50" class="d-inline-block align-top" alt="" />Biogenera
            </a>

            <div class="navbar-nav" style="font-size:20px">
                <a class="nav-item nav-link botonBarra" id="btnMiCuenta">
                    Mi cuenta
                    <span class="sr-only">(current)</span>
                </a>
                <a class="nav-item nav-link botonBarra" >
                    Mi equipo
                    <span class="sr-only">(current)</span>
                </a>
            </div>
        </div>
    </nav>

    <?php
    if(isset($_POST["ruta"])){
        if($_POST["ruta"]=="miCuenta"){
            require("VIEWS/miCuenta.php");
        }
    }else{
        require("VIEWS/login.php");
    }
    ?>


</body>
</html>