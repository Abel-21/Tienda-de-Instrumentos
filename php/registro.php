<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

  <!--<title>Small Business - Start Bootstrap Template</title>-->
  <title>Agency - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/small-business.css" rel="stylesheet">

</head>

<body>


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="../index.html">Penthagrom Music</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        </ul>
      </div>
    </div>
  </nav>

  <!--Registro-->
<div class="container" id="Registro">
  <h1>Registro</h1>
  <form action="action_page.php" method="post">
    <div class="form-group">
      <label for="nm">Nombre:</label>
      <input type="text" class="form-control" id="nm" placeholder="Ingrese Nombre" name="nm" required>
    </div>

  <div class="form-group">
      <label for="ap">Apellido Paterno:</label>
      <input type="text" class="form-control" id="ap" placeholder="Ingrese Apellidos" name="ap" required>
    </div>

    <div class="form-group">
      <label for="ap2">Apellido Materno:</label>
      <input type="text" class="form-control" id="ap2" placeholder="Ingrese Apellidos" name="ap2" required>
    </div>

    <div class="form-group">
      <label for="pwd">Contrase&#241a:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Ingrese contrase&#241a" name="pwd" required>
    </div>

  <div class="form-group">
      <label for="email">Correo:</label>
      <input type="email" class="form-control" id="email" placeholder="Ingrese correo" name="email" required>
    </div>

    <div class="form-group">
      <label for="Fnacimiento">Fecha de nacimiento:</label>
      <input type="date" class="form-control" id="dir" placeholder="Ingrese Fecha de nacimiento" name="Fnacimiento">
    </div>

  <div class="form-group">
      <label for="Direccion">Direcci&#243n:</label>
      <input type="text" class="form-control" id="dir" placeholder="Ingrese Direccion" name="dir" required size="100">
    </div>

    
  <button type="submit" class="btn btn-danger center-block" >Crear Cuenta</button>
  </form>
</div>


  <!-- Footer -->
   <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
          <p class="m-0 text-center text-white">Copyright &copy; Penthagrom Website 2019</p>  
      </div>
    </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>