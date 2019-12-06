
<script >
	alert("Registro exitoso ahora inicia sesion!")
</script>

<?php

$carpeta="imagenes/";

opendir($carpeta);
$destino=$carpeta.$_FILES['imagen']['name'];

copy($_FILES['imagen']['tmp_name'],$destino);

$nombre=$_FILES['imagen']['name'];
//echo "<img src=\"imagenes/$nombre\"><br>";

  echo "<meta http-equiv='refresh' content='1;url=inicia.php' />";

?>