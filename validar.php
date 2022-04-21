<?php
session_start();

function Conectarse()
{
   if (!($link = mysqli_connect('localhost', 'root', ""))) {
      echo "Error conectando a la base de datos.";
      exit();
   }
   if (!mysqli_select_db($link, "tienda4")) {
      echo "Error seleccionando la base de datos.";
      exit();
   }
   return $link;
}
$link = Conectarse();
$username = $_POST['mail'];
$pass = md5($_POST['pass']);
//echo $username." pass: ".$pass;
$consulta = "select * from usuario where correo='" . $username . "'";
//echo $consulta;
$sql2 = mysqli_query($link, $consulta);

if ($f2 = mysqli_fetch_array($sql2)) {
   if (strcmp($pass, $f2['psw']) == 0) {
      $_SESSION["uid"] = $f2["id_usuario"];
		$_SESSION["name"] = $f2["nombre"];
      echo '<script> alert("¡Bienvenido!")</script>';
      echo "<script> location.href='index.php'</script>";
   } else {
      echo '<script> alert("Usuario no registrado.")</script>';
      echo "<script> location.href='login.php'</script>";
   }
} else {
   echo '<script> alert("Usuario no registrado.")</script>';
   echo "<script> location.href='login.php'</script>";
}
?>