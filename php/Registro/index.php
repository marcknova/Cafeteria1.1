<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="favicon.ico">
<title>Registro de usuario usando Ajax PHP y MySQL</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="assets/signup-form.css" type="text/css" />

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
</head>

<body>
<header> 
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <a class="navbar-brand" href="#">BaulPHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="../sesion.html">Inicio <span class="sr-only">(current)</span></a> </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
      </form>
    </div>
  </nav>
</header>

<!-- Begin page content -->

<div class="container">
  <h3 class="mt-5">Registro de usuario usando Ajax PHP y MySQL</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
      
      <div class="signup-form-container"> 
        
        <!-- form start -->
        <form method="post" role="form" id="register-form" autocomplete="off">
          <div class="form-header">
            <h3 class="form-title"><i class="fa fa-user"></i>
            <span class="glyphicon glyphicon-user"></span>  Registrarme</h3>
          </div>
          <div class="form-body"> 
            
            <!-- json response will be here -->
            <div id="errorDiv"></div>
            <!-- json response will be here -->
            
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span> </div>
                <input name="name" type="text" id="name" class="form-control" placeholder="Nombres" maxlength="40" autofocus="true">
              </div>
              <span class="help-block" id="error"></span> 
            </div>
            
            
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span> </div>
                <input name="email" id="email" type="text" class="form-control" placeholder="Email" maxlength="50">
              </div>
              <span class="help-block" id="error"></span> 
              </div>
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><span class="glyphicon glyphicon-phone"></span></span> </div>
                <input name="celular" type="text" id="celular" class="form-control" placeholder="Celular" maxlength="40">
              </div>
              <span class="help-block" id="error"></span> 
            </div>
            
            <div class="row">
              <div class="form-group col-lg-6">
                <div class="input-group mb-3">
                  <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span> </div>
                  <input name="password" id="password" type="password" class="form-control" placeholder="Contraseña">
                </div>
                <span class="help-block" id="error"></span> </div>
              <div class="form-group col-lg-6">
                <div class="input-group mb-3">
                  <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span> </div>
                  <input name="cpassword" type="password" class="form-control" placeholder="Repita contraseña">
                </div>
                <span class="help-block" id="error"></span> </div>
            </div>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn btn-primary" id="btn-signup"> <span class="glyphicon glyphicon-log-in"></span> Registrarme </button>
          </div>
        </form>
      </div>
            
      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>
<!-- Fin container -->
<footer class="footer">

</footer>
<script src="assets/jquery-1.12.4-jquery.min.js"></script> 
<script src="assets/jquery.validate.min.js"></script> 
<script src="assets/ValidarRegistro.js"></script> 
<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script> 
<script src="assets/js/vendor/popper.min.js"></script> 
<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>