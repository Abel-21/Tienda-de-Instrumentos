<?php 
//establecemos el camino de almacenamiento de cookies
session_start(); //iniciamos la sesi�n

if ($_SESSION['Numero']==2) {
unset($_SESSION['Nombre']);
unset($_SESSION['Acceso']);
unset($_SESSION['Numero']);
session_destroy();

}
header('Location:SesionesPrueba.php');
?>

