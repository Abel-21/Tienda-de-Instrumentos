<?php 
//establecemos el camino de almacenamiento de cookies
 //iniciamos la sesi�n

if ($_SESSION['Numero']==2) 
{echo "la sesi�n ".session_id()."esta activa";}
else
echo "ya no existe";
?>

