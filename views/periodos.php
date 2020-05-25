<!DOCTYPE html> 
<html LANG="en"> 
    <head> 
    <meta charset="utf-8"/>
        <link href="./ASSETS/CSS/loginCSS.css" rel="stylesheet" />
        <title>Periodos</title> 
    </head> 
    <body>  
    <script type ="text/javascript" src="./CONTROLLER/periodosController.js"></script>
    <h1 class="display-1 text-center">Periodos</h1>
    <br>
     <div class="container">
        <div class="row">
            <div class="col-3" ></div>
            <div class="col-6">
                <h3> Agregar un periodo </h3>
                <input type="text" class="form-control" id="txtNombrePeriodo" placeholder="Nombre del periodo">  </input>
                <br>
                <input type="text" class="form-control" id="txtContrasenaPeriodo" placeholder="Contraseña para el periodo">  </input>
                <br>
                <button class="btn btn-primary" id="btnAgregarPeriodo">Agregar</button>
                <br>
                <br>

                <h5> Lista de periodos </h5>
                <div id="divPeriodos" style='background-color:white'>
                    
                <div>
            </div>
            <div class="col-3" ></div>
        </div>
    </div>
    </body> 
</html> 