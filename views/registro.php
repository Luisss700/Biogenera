<!DOCTYPE html>
<html LANG="en">
    <head>
    <meta charset="utf-8"/>
        <title>Registro</title>
    </head>
    <body>

       <script type ="text/javascript" src="./CONTROLLER/registroController.js"></script>

<div class="container">
<br>
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<a href="" class="float-right btn btn-outline-primary mt-1">Inicia Sesi�n</a>
	<h4 class="card-title mt-2">Resgistro</h4>
</header>
<article class="card-body">
<form id="formaRegistro" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
	<div class="form-row">
		<div class="col form-group">
			<label>Nombre</label>
		  	<input type="text"  minlength="3" name="nombre" class="form-control" placeholder="" required>
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>Apellidos</label>
		  	<input type="text"  minlength="3" name ="apellidos" class="form-control" placeholder=" " required>
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
        <label>Fecha de Nacimiento</label>
		<input type="date" class="form-control" name="fechaN" placeholder="" required>
        <br>
        <label>N�mero de Celular</label>
		<input type="text" class="form-control" name="celular" placeholder="" required>
        <br>
		<label>Correo Electr�nico</label>
		<input type="email" id="txtCorreo" class="form-control" name="correo" placeholder="" required>
		<small class="form-text text-muted">No compartiremos tu correo con nadie m�s.</small>
	</div> <!-- form-group end.// -->
	<div class="form-group">
			<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="sexo" value="hombre" required>
		  <span class="form-check-label"> Hombre </span>
		</label>
		<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="sexo" value="mujer" required>
		  <span class="form-check-label"> Mujer </span>
		</label>
	</div> <!-- form-group end.// -->

    <div class="form-group">
        <div class="form-row">
		<div class="col form-group">
			<label>Universidad</label>
		  	<input type="text"  minlength="3" name="universidad" class="form-control" placeholder="" required>
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>Matricula</label>
		  	<input type="number" name ="matricula" class="form-control" placeholder="" required>
		</div>
        <div class="col form-group">
			<label>Semestre</label>
		  	<input type="number"  name ="semestre" class="form-control" placeholder=" " required>
		</div>
 <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
    </div>
	<div class="form-group">
        <label>�Cuentas con automovil propio?</label>
	    <input class="form-control" type="checkbox" name="automovil">
        <br>
        <br>
		<label>Crear contrase�a</label>
	    <input class="form-control" type="password" name="contrasena" minlength="6" id="txtContrasena" required>
        <label>Verificar contrase�a</label>
	    <input class="form-control" type="password" id="txtContrasena2" id="txtContrasena2" required>
        <input  type="hidden" id="actionRegistro" name="actionRegistro" value = "1">
	</div> <!-- form-group end.// -->
    <div class="form-group">
        <div  class="btn btn-primary btn-block" id="btnRegistrate"> Registrate  </div>
        <button type="submit" id= "hiddenRegistro" style="visibility: hidden;" > Registrate  </button>
    </div> <!-- form-group// -->
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center"> �Ya tienes cuenta? <a href="">Inicia Sesi�n</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div>
<!--container end.//-->
    </body>
</html>
