<?php
session_start();

$eliminar = $_REQUEST['quitar'];

$link = mysqli_connect('localhost', 'root', "");
mysqli_select_db($link, "tienda4");

mysqli_query($link, "DELETE FROM pedido where id_instrumento=$eliminar");

header('Location:' . getenv('HTTP_REFERER'));


?>