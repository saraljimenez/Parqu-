<?php

session_start();
session_destroy();
echo "<meta http-equiv='refresh' content='1;url=index.php' />";

?>
<script>
	alert("Cierre de sesión exitoso")
</script>
