<?php

session_start();
$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
include("conexion.php");
include("funciones.php");
if(isset($_POST['email']) && !empty($_POST['email'])&&
   isset($_POST['pw']) && !empty($_POST['pw']))
   {
      $con=mysqli_connect($host,$user,$pw) or die ("Problemas para establecer la conexion");
      mysqli_select_db($con,$db) or die ("Problemas para establecer conexion con la base de datos");
      $sel=mysqli_query($con,"select email,pw from registro where email='$_POST[email]'");
      $sesion=mysqli_fetch_array($sel);

      if ($_POST['pw']==$sesion['pw'])
      {
         $_SESSION['email']=$_POST['email'];
        // $_SESSION['id']=$sesion['id'];
         echo "<meta http-equiv='refresh' content='1;url=Perfil.php' />";
      }
      else
      {
         echo"Combinacion incorrecta o usuario no registrado";
      }

   }

?>