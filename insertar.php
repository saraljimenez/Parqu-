<?php

include("conexion.php");
include("funciones.php");
if(isset($_POST['nombre']) && !empty($_POST['nombre'])&&
   isset($_POST['apellido']) && !empty($_POST['apellido'])&&
   isset($_POST['email']) && !empty($_POST['email'])&&
   isset($_POST['pw']) && !empty($_POST['pw'])&&
   isset($_POST['cedula']) && !empty($_POST['cedula'])&&
   isset($_POST['telefono']) && !empty($_POST['telefono'])&&
   isset($_POST['ciudad']) && !empty($_POST['ciudad']))
   {
   	$con=mysqli_connect($host,$user,$pw) or die ("Problemas para establecer la conexion");
      mysqli_select_db($con,$db) or die ("Problemas para establecer conexion con la base de datos");
      mysqli_query($con,"insert into registro (nombre,apellido,email,pw,cedula,telefono,ciudad)values('$_POST[nombre]','$_POST[apellido]','$_POST[email]','$_POST[pw]','$_POST[cedula]','$_POST[telefono]','$_POST[ciudad]')");
      echo include("primeros-pasos.php");

   }
else
	{
		echo "Problemas para ingresar los datos en la base de datos";
	}

?>