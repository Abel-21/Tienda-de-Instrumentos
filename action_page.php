<?php
session_start();
if(isset($_SESSION["uid"])){
    header("location:Guitarras_S.php");
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



<?php
function Conectarse()
{
    if (!($link = mysqli_connect('localhost', 'root', ""))) {
        echo "Error conectando a la base de datos.";
        exit();
    }
    if (!mysqli_select_db($link, "tienda4")) {
        echo "Error seleccionando la base de datos.";
        exit();
    }
    return $link;
}
$nombre = $_REQUEST['nm'];
$apellidoP = $_REQUEST['ap'];
$apellidoM = $_REQUEST['am'];
$fecha = $_REQUEST['fn'];
$correo = $_REQUEST['email'];
$telefono = $_REQUEST['nt'];
$direccion = $_REQUEST['dir'];
$password = md5($_REQUEST['pass']);

$link = Conectarse();

$error_encontrado = "";
if (validar_clave($_POST["pass"], $error_encontrado)) {
    $result2 = mysqli_query($link, "insert into usuario (nombre,apellido_pat,apellido_mat,fecha_nacimiento,correo,telefono,direccion,psw) values('$nombre','$apellidoP','$apellidoM','$fecha','$correo','$telefono','$direccion','$password')");
    printf(" ". $result2);
    print("El usuario: $nombre se ha registrado con éxito. <BR>");
} else {
    echo "<center>";
    //echo "PASSWORD NO VÁLIDO " . $error_encontrado;
    echo "<br><h1 style='Color:red'>PASSWORD NO VÁLIDO</h1><br><br><br>" . $error_encontrado;
}

function validar_clave($clave, &$error_clave)
{
    if (strlen($clave) < 6) {
        $error_clave = " ";
        echo "<center>";
         echo '<br><br><br><h1 style="Color:orange">La clave debe tener al menos 6 caracteres</h1><br><br><br>';
        return false;
    }
    if (strlen($clave) > 16) {
        $error_clave = " ";
        echo "<center>";
         echo '<br><br><br><h1 style="Color:orange">La clave no puede tener más de 16 caracteres</h1><br><br><br>';
        return false;
    }
    if (!preg_match('`[a-z]`', $clave)) {
        $error_clave = " ";
        echo "<center>";
         echo '<br><br><br><h1 style="Color:orange">La clave debe tener al menos una letra minúscula</h1><br><br><br>';
        return false;
    }
    if (!preg_match('`[A-Z]`', $clave)) {
        $error_clave = " ";
        echo "<center>";
         echo '<br><br><br><h1 style="Color:orange">La clave debe tener al menos una letra mayúscula</h1><br><br><br>';
        return false;
    }
    if (!preg_match('`[0-9]`', $clave)) {
        $error_clave = " ";
        echo "<center>";
         echo '<br><br><br><h1 style="Color:orange">La clave debe tener al menos un caracter numérico</h1><br><br><br>';
        return false;
    }
    $error_clave = "";
    return true;
}
?>

  <!-- Footer
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
  </footer>-->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>