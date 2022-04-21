<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Small Business - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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

          <li class="nav-item active">
            <a class="nav-link" href="..\1-Guitarras\indexG.html">Guitarras</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="..\2-Bajos\indexB.html">Bajos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="..\3-Teclados\indexT.html">Teclados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="..\4-Baterias\indexBat.html">Baterias</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <center>
    <h2 class="text-uppercase">Tus pedidos</h2>
    <form action="action3.php" method="post">
      <p class="item-intro text-muted"></p>

      <?php
      $id_instrumento = $_REQUEST['g1'];
      $cant = $_REQUEST['cant'];


      // $d=rand(1,1000000000);
      // $d=2222;
      $hoy = date("ymd");

      $link = mysqli_connect('localhost', 'root', "");
      mysqli_select_db($link, "tienda4");

      $id_apartado = $_SESSION["uid"] . $hoy;



      $result = mysqli_query($link, "SELECT * FROM instrumento WHERE id_instrumento = '$id_instrumento'");
      while ($row = mysqli_fetch_array($result)) {
        //  $nombre = $row['descripcion'];
        $precio = $row['precio'];
      }

      $result=mysqli_query($link,"SELECT * FROM instrumento JOIN pedido ON pedido.id_instrumento = instrumento.id_instrumento WHERE instrumento.id_instrumento = '$id_instrumento' OR id_apartado='$id_apartado'");

      while ($row = mysqli_fetch_array($result)) {
        $cantidad = $row['cantidad'];
      }

      //  $precio = $precio * $cant;
      $sql = "SELECT id_instrumento FROM pedido";
      $condicion = mysqli_query($link, $sql);
      $count = mysqli_num_rows($condicion);
      if($count>0) {
        $valor=$cantidad+$cant;
        mysqli_query($link,"UPDATE pedido SET cantidad=$valor WHERE id_instrumento='$id_instrumento'"); 
      } else {
        $result = mysqli_query($link, "insert into pedido(id_instrumento,cantidad,id_apartado) values('$id_instrumento','$cant','$id_apartado')");
      }


      //  print ("precio: $nombre <BR> ")
      print("id_instrumento: $id_instrumento <BR> ");
      //  print ("precio: $precio <BR> ");
      print("cantidad: $cant <BR> ");
      print("id_apartado: $id_apartado <BR> ");
      // print ("fecha: $hoy <BR> ");

      $result=mysqli_query($link,"SELECT * FROM instrumento JOIN pedido ON pedido.id_instrumento = instrumento.id_instrumento WHERE instrumento.id_instrumento = '$id_instrumento' OR id_apartado='$id_apartado'");


      // ***********CORREGIR*************
      // $result = mysqli_query($link, "SELECT * FROM `instrumento` WHERE id_instrumento='$id_instrumento'");

      // $result=mysqli_query($link,"SELECT descripcion, cantidad FROM pedido, instrumento GROUP BY id_apartado");
      // ***********CORREGIR*************



      echo "<form>";
      //  <!-- Area de texto extensa -->
      echo "<textarea placeholder='Escribe aquí...'' name='texto' cols='80' rows='10'> \t\tInstrumento: \t\t\t\tCantidad:\n";
      while ($row = mysqli_fetch_array($result)) {
        $nombre = $row['nombre'];
        $cantidad = $row['cantidad'];

        print("$nombre \t $cantidad \n");
      }

      // $result2 = mysqli_query($link, "SELECT * FROM `pedido` WHERE cantidad='$cant'");
      // while ($row = mysqli_fetch_array($result2)) {
      //   $cant = $row['cantidad'];
      //   //$cantidad = $row['cantidad'];

      // }
      // print("$cant");


      echo "</textarea>";
      echo "</form>";


      //  $result=mysqli_query($link,"DELETE FROM pedido where id_apartado =quitar");


      //  echo "<input type='submit' name='' value='Buscar' id='boton1' onclick = ''>";
      echo "<button type='submit' class='btn btn-danger center-block' >Quitar";
      //  do{


      //   $quitar =$_POST['quitar'];
      // $quitar=$_REQUEST['quitar'];


      //}while ($b=1);
      echo "</button>";

      // $result=mysqli_query($link,"DELETE FROM pedido where id_apartado =quitar");

      //  $quitar =$_POST['quitar'];
      //   $quitar=$_REQUEST['quitar'];
      //   print ("fecha: $quitar");





      echo "<p> Quitar de la lista <br> ";

      // ***********CORREGIR*************
      $result3 = mysqli_query($link, "SELECT * FROM instrumento WHERE id_instrumento = '$id_instrumento'");
      //$result=mysqli_query($link,"SELECT descripcion, cantidad FROM pedido, instrumento GROUP BY id_apartado");
      // ***********CORREGIR*************

      echo "<select name= 'quitar'>";

      while ($row = mysqli_fetch_array($result3)) {
        $nombre = $row['descripcion'];
        echo "<option value =" . $row["descripcion"] . ">" . $row["descripcion"];
      }
      echo "</select>";

      $result = mysqli_query($link, "DELETE FROM pedido where id_apartado =quitar");
      ?>

      <form>
        <button type="submit" class="btn btn-primary"> Apartar </button>
      </form>
    </form>
    <br>

  </center>

  <!-- /.container -->

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