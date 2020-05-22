<!DOCTYPE html> 
<html> 
    <head> 
        <link href="./ASSETS/CSS/loginCSS.css" rel="stylesheet" />
        <title>Inicio de Sesión</title> 
    </head> 
    <body>  
      <div class="container">
    <div clss="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Inicia Sesíon</h5>
            <form class="form-signin">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Iniciar Sesión</button>
              <hr class="my-4">
                 </form>
              <button class="btn btn-lg btn-google btn-block text-uppercase" id="btnRegistroRuta"><i class="fab fa-google mr-2"></i> Registrate</button>
           
          </div>
        </div>
      </div>
    </div>
  </div>
    </body> 
</html> 