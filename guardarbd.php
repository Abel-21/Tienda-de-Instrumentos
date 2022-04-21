<?php
session_start();

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
      $sql = "SELECT id_instrumento FROM pedido WHERE id_instrumento='$id_instrumento'";
      $condicion = mysqli_query($link, $sql);
      $count = mysqli_num_rows($condicion);
      if($count>0) {
        $valor=$cantidad+$cant;
        mysqli_query($link,"UPDATE pedido SET cantidad=$valor WHERE id_instrumento='$id_instrumento'"); 
      } else {
        $result = mysqli_query($link, "insert into pedido(id_instrumento,cantidad,id_apartado) values('$id_instrumento','$cant','$id_apartado')");
      }

header('Location:' . getenv('HTTP_REFERER'));

