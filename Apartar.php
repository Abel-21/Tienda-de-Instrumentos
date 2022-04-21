<?php

session_start();
if (!isset($_SESSION["uid"])) {
    header("profile.php");
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

<body style="padding: 80px 0px">

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


    <center>
        <h3 class="text-uppercase">Se han apartado con éxito tus instrumentos.</h3>
    <form action="guardap.php" method="post">
        <br>
        <br>
        <table style=”width: 100%”>



              <colgroup>
                    <col style="width: 55%" />
                    <col style="width: 45%" />
               </colgroup>
            <td>
        <center>
        <h5>Lista de instrumentos:</h5>

        <p class="item-intro text-muted"></p>

        <?php
        $hoy = date("ymd");

        $link = mysqli_connect('localhost', 'root', "");
        mysqli_select_db($link, "tienda4");

        $id_apartado = $_SESSION["uid"] . $hoy;

        $result = mysqli_query($link, "SELECT * FROM instrumento JOIN pedido ON pedido.id_instrumento = instrumento.id_instrumento WHERE id_apartado='$id_apartado'");
        ?>
        <!-- Area de texto extensa -->

        <textarea placeholder='Escribe aquí...' name='texto' cols='60' rows='10'> 
            <?php
            while ($row = mysqli_fetch_array($result)) {
                $nombre = $row['nombre'];
                $cantidad = $row['cantidad'];

                print("\n$nombre \t $cantidad");
                //print("\n");
            }
            ?>
            </textarea> 

            <br><br>
                 <h5> Dirección:</h5>

                 <p style=Color:orange>Esq. calle Volcán de colima, Av. Manuel Espinosa Yglesias 31 Pte., Los Volcanes, 72410 Puebla, Pue.</p>
        </td>
      
        <td>
            <center>
        <h5> Código para recoger pedido:</h5> 

           
                <?php
                $result3 = mysqli_query($link, "SELECT * FROM instrumento JOIN pedido ON pedido.id_instrumento = instrumento.id_instrumento GROUP BY id_apartado");
                ?>
                
                    <?php
                    while ($row = mysqli_fetch_array($result3)) {
                        $codigo = $row['id_apartado'];
                        echo '<h3 style="Color:red">'.$codigo.'</h3>';
                    }
                    ?>
                

                  <br> 

                 <h5> Total a pagar:</h5> 

                <?php
                $total=0;
                $result4 = mysqli_query($link, "SELECT * FROM instrumento JOIN pedido ON pedido.id_instrumento = instrumento.id_instrumento WHERE id_apartado='$id_apartado'");
                     while ($row = mysqli_fetch_array($result4)) {
                        $precio = $row['precio'];
                        $cantidad = $row['cantidad'];
                        
                        $precio=$precio*$cantidad;
                        $total=$total+$precio;
                    }
                    echo '<h3 style="Color:orange">'.'$'.$total.'</h3>';
                ?>

                 <br>

                <!-- <input type='submit' name='submit'/> -->
                 <h5> Fecha de pedido:</h5>

                 <?php
                    $hoy2 = date("F j Y");
                     echo '<h5 style="Color:blue">'.$hoy2.'</h3>';
                 ?>
                 <br>
                <button onclick="comprobar(this.form)" type="submit" class="btn btn-primary"> ACEPTAR </button>
            </form>
                
            <br>
        </p>
    </td>
</table>

                

    </center>

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
            alert ("GRACIAS POR APARTAR.");
        }
        function ventanaEmergente(formulario) {
                
        }
    </script>

</body>

</html>