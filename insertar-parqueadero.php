<?php

include("conexion.php");
include("funciones.php");
if(isset($_POST['nombre']) && !empty($_POST['nombre'])&&
   isset($_POST['apellido']) && !empty($_POST['apellido'])&&
   isset($_POST['email']) && !empty($_POST['email'])&&
   isset($_POST['pw']) && !empty($_POST['pw'])&&
   isset($_POST['cedula']) && !empty($_POST['cedula'])&&
   isset($_POST['telefono']) && !empty($_POST['telefono'])&&
   isset($_POST['ciudad']) && !empty($_POST['ciudad'])&&
   isset($_POST['direccion']) && !empty($_POST['direccion'])&&
   isset($_POST['tipo']) && !empty($_POST['tipo']))
   {
   	$con=mysqli_connect($host,$user,$pw) or die ("Problemas para establecer la conexion");
      mysqli_select_db($con,$db) or die ("Problemas para establecer conexion con la base de datos");
      mysqli_query($con,"insert into parqueadero (nombre,apellido,email,pw,cedula,telefono,ciudad,direccion,tipo)values('$_POST[nombre]','$_POST[apellido]','$_POST[email]','$_POST[pw]','$_POST[cedula]','$_POST[telefono]','$_POST[ciudad]','$_POST[direccion]','$_POST[tipo]')");
         echo include("primeros-pasos-parqueaderos.php");

   }
else
	{
		echo "Problemas para ingresar los datos en la base de datos";
	}

?>