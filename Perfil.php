<?php

require'conexion.php';
session_start();
	if(!isset($_SESSION['email']))
		{
			header("Location: inicia.php");
		}

ini_set('error_reporting',0);

?>

<!DOCTYPE html>

<html lang=es>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="icon" type="image/gif" href="animated_favicon1.gif" >
    <title>Perfil - Parquí</title>
  </head>

<body>

    <header>
      <div class="subheader">
          <div class="logotipo"><a href="index.php" title="Parquí" ><img src="logo.png" width="100" height="40"></a></div>
                <nav>
                  <ul>
                  	<li><h5><a class="cerrar" title="Cerrar sesión" href="cerrar-sesion.php">Cerrar sesión.</a></h5></li>
                  </ul>
                </nav>
        </div>  
    </header>

    <section class="wrap">
      <section class="main">
         
         <br /><br />
          <br /><br /> 
         <?php $con=mysqli_connect($host,$user,$pw) or die ("Problemas para establecer la conexion");
              mysqli_select_db($con,$db) or die ("Problemas para establecer conexion con la base de datos");
              $row=mysqli_query($con,"SELECT avatar from registro where email='".$_SESSION['email']."' ");
              $busqueda=mysqli_query($con,"SELECT nombre,apellido from registro where email='".$_SESSION['email']."' ");
              ?>
            <h1><p>¡Hola </p></h1> <?php echo "$busqueda"; ?>
              <p> Tus datos. </p>
                <?php if($row['avatar'] !='') {}	?>
                  <img src="" height="100" width="100">
                <form action="guardar.php" method="POST"  enctype="multipart/form-data">
                  <input type="file" name="imagen" value="Cambia o sube tu foto" accept="image/*"> 
                  <br /> 
                  <p><h3>Eso es todo, gracias :)</h3></p>   
                  <input type="submit" name="guardar" value="Guardar"> 
                </form>
          <br /><br />
        <br /><br /> 

        </section>

      </section>

      <footer>
         <div class="pie"> 
          <section class="acerca">
            <div class="logotipo2"><a href="index.php" title="Parquí" ><img src="logo.png" width="80" height="30"></a></div>
                <div  class="info">
                  <article>
                  <hgroup><h4>Información de interés.</h4></hgroup>
                    <ul>
                      <h5></head><a href="#"><li>Términos y condiciones.</li></a></h5>
                      <h5><a href="#"><li>Política de tratamiento de datos.</li></a></h5>
                      <h5><a href="#"><li>Marketing, Performance & Insights.</li></a></h5>
                    </ul>
                  </article>
                </div>
            </section>

          <section class="redes">
              <div><a href="https://www.instagram.com/parquicolombia/"><img  src="instagram.png"><a href="https://twitter.com/ParquiColombia"><img  src="twitter.png"><a href="https://www.facebook.com/Parqu%C3%AD-101328214677230"><img src="facebook.png"></a></a></a>
              <div class="textoredes">
                <p>Instagram parquí.</p>
                <div class="twittertxt"><p >Twitter parquí.</p></div>
                <div class="facebooktxt"><p >Facebook parquí</p></div> 
              </p> 
              </div>
          </section>
          <div class="copyright"><p>© 2019 Parquí</p></div>
        </div>
      </footer>
      <div class="atribucion">Iconos diseñados por <aclass="atribucion" href="https://www.flaticon.es/autores/freepik" title="Freepik">Freepik</a> from <a class="atribucion" href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></div>
    </section>
</body>
</html> 