<?php 
//establecemos el camino de almacenamiento de cookies
 //iniciamos la sesión

if ($_SESSION['Numero']==2) 
{echo "la sesión ".session_id()."esta activa";}
else
echo "ya no existe";
?>

