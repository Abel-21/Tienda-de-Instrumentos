<?php 
//establecemos el camino de almacenamiento de cookies
//iniciamos la sesi�n
session_start(); 

if ($_SESSION['Numero']==2){ 
echo "Usuario".$_SESSION['Nombre']."<br>";
echo "la sesi�n ".session_id()."esta activa<br>";
echo "<A HREF='SesionesSalir.php'>Salir</A>";}
else
echo "conexion invalida";
?>

