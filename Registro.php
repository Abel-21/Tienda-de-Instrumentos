<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <title>Penthagrom - Developer Abel</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav" style="background-color: #212529">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">Penthagrom Music</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menú
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php#qs">¿Quiénes somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php#portfolio">Categorías</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php#team">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php#contacto">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="login.php">Iniciar sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header -->
<header>
  <div class=" container">
    <div class="intro-text" style="padding-top: 100px; padding-bottom: 100px">

      <body>
        <!--Registro-->
        <div class="container" id="Registro">
          <h1>Registro</h1>
          <form action="action_page.php" method="post">

            <div class="form-group">
              <label for="nm">Nombre:</label>
              <input type="text" class="form-control" id="nm" placeholder="Ingrese Nombre" name="nm" required>
            </div>

            <div class="form-group">
              <label for="ap">Apellido paterno:</label>
              <input type="text" class="form-control" id="ap" placeholder="Ingrese Apellido paterno" name="ap" required>
            </div>

            <div class="form-group">
              <label for="am">Apellidos materno:</label>
              <input type="text" class="form-control" id="am" placeholder="Ingrese Apellido materno" name="am" required>
            </div>

            <div class="form-group">
              <label for="fn">Fecha de nacimiento:</label>
              <input type="date" class="form-control" id="fn" placeholder="Ingrese Fecha de nacimiento" name="fn" required>
            </div>

            <div class="form-group">
              <label for="email">Correo electrónico:</label>
              <input type="text" class="form-control" id="email" placeholder="Ingrese correo electrónico" name="email" required>
            </div>

            <div class="form-group">
              <label for="nt">Teléfono:</label>
              <input type="text" class="form-control" id="nt" placeholder="Ingrese Número de teléfono" name="nt" required>
            </div>

            <div class="form-group">
              <label for="dir">Dirección:</label>
              <input type="text" class="form-control" id="dir" placeholder="Ingrese Direccion" name="dir" required>
            </div>

            <div class="form-group">
              <label for="pass">Contraseña:</label>
              <input type="password" class="form-control" id="pass" placeholder="Ingrese contraseña" name="pass" required>
            </div>

            <button type="submit" class="btn btn-danger center-block">Crear cuenta</button>

          </form>
        </div>

        <script language=Javascript>
        function comprobar(formulario) {
            alert ("El usuario se ha registrado correctamente.");
        }
        function ventanaEmergente(formulario) {
                
        }
    </script>
      </body>

    </div>
  </div>



</header>

</html>