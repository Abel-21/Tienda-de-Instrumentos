<?php 
//establecemos el camino de almacenamiento de cookies
//session_save_path("./sesiones2");
session_start(); //iniciamos la sesión
$_SESSION['Acceso']=time(); //guardamos la hora del ultimo acceso
$_SESSION['Nombre']="luis"; 
$_SESSION['Numero']=2; 

echo "Usuario:".$_SESSION['Nombre']."<br>";
echo "la sesión ".session_id()."esta activa<br>";
echo "<A HREF='sesionessig.php'>Avanzar</A>";
?>

