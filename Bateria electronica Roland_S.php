<?php

session_start();
if (!isset($_SESSION["uid"])) {
    header("location:Bateria electronica Roland.php");
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
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

</head>

<body style="padding: 55px 0px">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav" style="background-color: #212529!important">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php">Penthagrom Music</a>
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
                        <a href="#" class="nav-link js-scroll-trigger" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>

                            <?php echo "¡Hola, " . $_SESSION["name"] . "!"; ?>
                        </a>
                        <ul class="dropdown-menu" style="right: auto; left: auto; background: #212529eb;">
                            <li style="border-bottom: groove"><a href="cart.php" class="nav-link js-scroll-trigger"><span class="glyphicon glyphicon-shopping-cart">Carrito</a></li>
                            <!-- <li class="divider"></li>
                            <li><a href="customer_order.php">Orders</a></li> -->
                            <li class="divider"></li>
                            <li class="divider"></li>
                            <li><a href="logout.php" class="nav-link js-scroll-trigger">Salir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row align-items-center my-5 ">
            <!-- Project Details Go Here -->
            <center>
                <h2 class="text-uppercase">Bateria electronica Roland</h2>
                <p class="item-intro text-muted">
                <?php
                $link = mysqli_connect("localhost","root","");
                mysqli_select_db($link, "tienda4");
                $id=15;
                $result = mysqli_query($link,"select nombre from instrumento where id_instrumento=".$id.";");
                while($row=mysqli_fetch_array($result)){
                  $nombre=$row['nombre'];
                  echo "$nombre";
                }
                ?>
                </p>
                <table style=”width: 100%”>
                    <colgroup>
                        <col style="width: 55%" />
                        <col style="width: 45%" />

                    </colgroup>
                    <td>
                        <center>
                            <img class="img-fluid" src="img/Baterias/bateria4.jpg" width="300" height="500">
                            <b>
                                <h4 style="color:red">Precio:$
                                <?php
                                $link = mysqli_connect("localhost","root","");
                                mysqli_select_db($link, "tienda4");
                                $no=15;
                                $result = mysqli_query($link,"select precio from instrumento where id_instrumento=".$no.";");
                                while($row=mysqli_fetch_array($result)){
                                $precio=$row['precio'];
                                echo "$precio";
                                }
                                ?>
                                </h4>
                                <br>
                                Confirmación del pedido
                            </b>

                            <form action="guardarbd.php">
                                <div class="form-group">
                                    <label for="cant">Cantidad:</label>
                                    <input type="number" class="form-control" id="cant" placeholder="Ingrese el número de unidades" name="cant" min="1" required>
                                </div>

                                <div>
                                    <input type="hidden" name="g1" value="15">
                                </div>

                                <button onclick="comprobar(this.form)" type="submit" class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Comprar</button>

                                <br>
                    </td>
                    <td>
                        <br>
                        <b>
                            <center>
                                Descripción:
                                <br>

                        </b>
                        <div style="color: #6c757d">
                            La TD-17 KV de V-Drums de Roland es un kit de batería electroníca que te permite desarrollar tu técnica
                            con herramientas didácticas incluidas en su modulo, ofreciendote
                            una experiencia realista gracias a sus nuevos pads , soportado por su motor de sonido al nivel de la
                            Roland TD-50.
                            Las funciones didácticas integradas evalúan la técnica, miden el progreso y te mantienen motivado.

                            El modulo TD-17 ofrece diferentes sonidos y kits modelados y expresivos . Además, el clásico Coach Mode te
                            ayudara a dominar los aspectos básicos para asentar las bases que te ayudaran a desarrollar tus
                            habilidades como baterísta.

                            Podrás calentar, trabajar el ritmo, la sincronización, el tempo e incluso la dinámica, todo con una
                            puntuación para saber como lo haces

                            Este modelo está compuesto por una caja de malla de 12" PDX-12, 3 tom pads de goma súper realista PDX-8, 2
                            platos de 8" de dos zonas de golpeo CY-8, 1 Hihat CY-5 junto con el increíble pedal de control FD-9 y el
                            nuevo pad de bombo KD-10.


                        </div>
                </table>
            </center>
        </div>
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

    <script language=Javascript>
        function comprobar(formulario) {
            alert ("El producto se ha añadido al carrrito");
        }
        function ventanaEmergente(formulario) {
                
        }
    </script>

</body>

</html>