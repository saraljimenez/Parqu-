<script >
	alert("Registro exitoso ahora inicia sesion!")
</script>

<?php

require'conexion.php';

$con=mysqli_connect($host,$user,$pw) or die ("Problemas para establecer la conexion");
      mysqli_select_db($con,$db) or die ("Problemas para establecer conexion con la base de datos");
      mysqli_query($con,"insert into parqueadero foto where='$_SESSION[email]'");
         echo "datos insertados de forma correcta";

 		 echo "<meta http-equiv='refresh' content='1;url=inicia.php' />";

?>