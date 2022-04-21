<HTML>
<HEAD>
<TITLE>InsertarMostrar.php</TITLE>
</HEAD>
<BODY>
<h1>Insertar un registro</h1>
<br>

<FORM METHOD="POST" ACTION="InsertaMuestra.php">

Materia: <INPUT TYPE="text" NAME="materia">
Nivel: <INPUT TYPE="text" NAME="nivel">
   <INPUT TYPE="submit" VALUE="insertar">
<?php
include './conexion.php'; 
   $link=Conectarse(); 

if (!(isset($_REQUEST['insertar'])))
{$sSQL="insert into materia(nombre_Materia,nivel_Materia) values('".$_REQUEST['materia']."','".$_REQUEST['nivel']."')";

$result=mysqli_query($link,$sSQL); 
$sSQL="Select * From materia";
$result2=mysqli_query($link,$sSQL);
echo "<br>";
while($row = mysqli_fetch_array($result2)) { 
     printf(" <tr><td>&nbsp;%s   </td><td>&nbsp;%s   </td><td>&nbsp;%s   </td> </tr> <br>", $row["id_Materia"],$row["nombre_Materia"],$row["nivel_Materia"]); 
   } 
}
?>
</FORM>
</HTML>