<?php
session_start();

 $hoy = date("ymd");
 $id_apartado = $_SESSION["uid"] . $hoy;


$link = mysqli_connect('localhost', 'root', "");
mysqli_select_db($link, "tienda4");

$result4 = mysqli_query($link, "SELECT * FROM instrumento JOIN pedido ON pedido.id_instrumento = instrumento.id_instrumento WHERE id_apartado='$id_apartado'");
                     while ($row = mysqli_fetch_array($result4)) {
                        $precio = $row['precio'];
                        $cantidad = $row['cantidad'];
                        
                        $precio=$precio*$cantidad;
                        $total=$total+$precio;
                    }

mysqli_query($link,"insert into apartado(fecha,id_apartado,total) values('$hoy','$id_apartado','$total')");

header('Location:' . getenv('HTTP_REFERER'));


?>