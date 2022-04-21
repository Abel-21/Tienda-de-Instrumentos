<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:Teclados_S.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <title>Agency - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
    type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body style="padding: 55px 0px">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav"
    style="background-color: #212529!important">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">Penthagrom Music</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
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

  <!-- Page Content -->
  <div class="container">
    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <div class="col-lg-7">
          <video src="video/motif.mp4" width="600" height="300" autoplay controls> </video>
        </div>
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <div class="row align-items-center my-5">
          <div class="col-lg-7">
            <img class="img-fluid" src="img/Teclados/teclado.jpg" width="600" height="300">
          </div>
        </div>
        <h1 class="font-weight-light">Descripción</h1>
        <p style="color: #6c757d">MOTIF XF8 Nueva generación de estaciones de trabajo de la línea MOTIF con una
          capacidad de expansión flash
          añadida y un sistema de producción musical extremadamente sencillo. </p>
        <a class="btn btn-primary" href="MOTIF XF8.php">Comprar</a>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <div class="card text-white bg-secondary my-5 py-4 text-center" style="background-color: #212529!important">
      <div>
        <p style="margin-bottom: 0">A continuación te presentamos más modelos...</p>
      </div>
    </div>


    <!-- Content Row -->
    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Piano Kurzweil PC3A8</h2>
            <img class="img-fluid" src="img/Teclados/teclado2.jpg" width="250" height="150">
            <p class="card-text">Empieza con el legado del venerable PC3, adhiere el KORE64 y el gran piano de cola
              Aleman D Artis, lo que da un increible poder en el PC3A8 Artis® Alemán 9 'Piano de cola Alemán D Exp
              Muestras de increíble tono, realismo y expresión.</p>
          </div>
          <div class="card-footer">
            <audio src="audio/Teclados/kurzweilpiano.mp3" preload="none" controls></audio>
            <audio src="audio/kurzweilpiano.ogg" autoplay loop></audio>
            <a href="Piano Kurzweil.php" class="btn btn-primary btn-sm">Comprar</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Piano Profesional Roland RD-2000</h2>
            <img class="img-fluid" src="img/Teclados/teclado3.jpg" width="250" height="150">
            <p class="card-text">Estructura híbrida de madera y plástico, con escape y sensación de ébano / marfil (88
              teclas) GENERADOR DE SONIDO SECCIONES Generador de sonido 2x motores de sonido independientes Sound
              Engine1: Tecnología V-Piano Sonido Engine2 </p>
          </div>
          <div class="card-footer">
            <audio src="audio/Teclados/kurzweilpiano.mp3" preload="none" controls></audio>
            <audio src="audio/kurzweilpiano.ogg" autoplay loop></audio>
            <a href="Piano Profesional Roland.php" class="btn btn-primary btn-sm">Comprar</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Piano Yamaha NP32</h2>
            <img class="img-fluid" src="img/Teclados/teclado4.jpg" width="300" height="200">
            <p class="card-text">Un diseño esbelto, ligero y compacto, con teclado de 76 teclas con repuesta a la
              pulsación. Le impresionará no solamente por su tamaño compacto y estructura ligera, sino también por la
              calidad superior...</p>
          </div>
          <div class="card-footer">
            <audio src="audio/Teclados/kurzweilpiano.mp3" preload="none" controls></audio>
            <audio src="audio/kurzweilpiano.ogg" autoplay loop></audio>
            <a href="Piano Yamaha NP32.php" class="btn btn-primary btn-sm">Comprar</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Your Website 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>