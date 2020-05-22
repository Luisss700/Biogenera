<!DOCTYPE html> 
<html> 
    <head> 
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/> 
        <title>Registro</title> 
    </head> 
    <body>  
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
       <script type ="text/javascript" src="./CONTROLLER/registroController.js"></script>

<div class="container">
<br> 
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<a href="" class="float-right btn btn-outline-primary mt-1">Inicia Sesión</a>
	<h4 class="card-title mt-2">Resgistro</h4>
</header>
<article class="card-body">
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
	<div class="form-row">
		<div class="col form-group">
			<label>Nombre</label>   
		  	<input type="text" class="form-control" placeholder="" required>
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>Apellidos</label>
		  	<input type="text" class="form-control" placeholder=" " required>
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Correo Electrónico</label>
		<input type="email" class="form-control" placeholder="" required>
		<small class="form-text text-muted">No compartiremos tu correo con nadie más.</small>
	</div> <!-- form-group end.// -->
	<div class="form-group">
			<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" value="option1" required>
		  <span class="form-check-label"> Hombre </span>
		</label>
		<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" value="option2" required>
		  <span class="form-check-label"> Mujer </span>
		</label>
	</div> <!-- form-group end.// -->

	<div class="form-group">
		<label>Crear contraseña</label>
	    <input class="form-control" type="password" minlength="6" id="txtContrasena" required>
        <label>Verificar contraseña</label>
	    <input class="form-control" type="password" id="txtContrasena2" required>
	</div> <!-- form-group end.// -->  
    <div class="form-group">
        <div  class="btn btn-primary btn-block" id="btnRegistrate"> Registrate  </div>
        <button type="submit" id= "hiddenRegistro" style="visibility: hidden;" id="btnRegistrate"> Registrate  </button>
    </div> <!-- form-group// -->                                               
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center"> ¿Ya tienes cuenta? <a href="">Inicia Sesión</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->
    </body> 
</html> 