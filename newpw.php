<?php

include("conexion.php");
include("funciones.php");
if(array_key_exists(key'email', $_POST))
   {
      try{
   	$con=mysqli_connect($host,$user,$pw) or die ("Problemas para establecer la conexion");
      mysqli_select_db($con,$db) or die ("Problemas para establecer conexion con la base de datos");
      mysqli_query($con,"select email from registro where email= ?");
      $st=$pdo->prepare(sql);
      $st->bindValue(parameter 1,$_POST['email']);
      $st->execute();
      if($resultado=$sst->fetch(fetc_style:$con::FETCH_ASSOC))
      {
         echo "Se ha enviado un correo para cambio de contraseña a ".$resultado['email'];
      }
      else "El usuario no existe, registrate <href='registro.php'>¡Aquí!"

   }
else
	{
		echo "Problemas para ingresar los datos en la base de datos";
	}

?>