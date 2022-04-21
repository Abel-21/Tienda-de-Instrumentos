<?php
   $nombre =$_REQUEST['nm'];
   print ("Hola tu eres: $nombre <BR>");
   $ap =$_REQUEST['ap'];
   print ("Apellido paterno: $ap <BR>");
   $ap2=$_REQUEST['ap2'];
   print ("Apellido materno: $ap2 <BR> ");
   $pwd =$_REQUEST['pwd'];
   print ("Contraseña: $pwd <BR>");
   $email =$_REQUEST['email'];
   print ("Email: $email <BR>");
   $fecha =$_REQUEST['Fnacimiento'];
   print ("Fecha de nacimiento: $fecha <BR>");
   $dir =$_REQUEST['dir'];
   print ("Direccion: $dir <BR>");
   
   $link=mysqli_connect("localhost","root","");
   mysqli_select_db($link,"tienda");
    $result2=mysqli_query($link,"insert into usuarios(nombre,apellidop,apellidom,password,correo,fnacimiento,direccion) 
 values('$nombre','$ap','$ap2','$pwd','$email','$fecha','$dir')");
?>