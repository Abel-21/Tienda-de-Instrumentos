



<?php 

include './conexion.php'; 
$link = conectarse(); 
if (!$link) { 
die('Not connected : ' . mysql_error()); 
} 

$query='call p1()'; 




$result = mysqli_query($link,$query); 

if (!$result) { 
echo "error de procedure";
die('Invalid query: ' . mysql_error()); 
} 
else

{

while($row = mysqli_fetch_array($result)) { 
      printf(" <tr><td>&nbsp;%s   </td><td>&nbsp;%s   </td><td>&nbsp;%s   </td> </tr> <br>", $row["id_Materia"],$row["nombre_Materia"],$row["nivel_Materia"]); 
   } 
   mysqli_free_result($result);


}
?> 
   