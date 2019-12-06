<?php

session_start();
if(isset($_SESSION['email']))
  {
    header("Location: Perfil.php");
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
  	<title>Inicio - Parqu&iacute;</title>
  </head>

<body>

    <header>
      <div class="subheader">
          <div class="logotipo"><a href="index.php" title="Parqu&iacute;" ><img src="logo.png" width="100" height="40"></a></div>
              <div class="buscar"><input type="search" id="mySearch" name="q"placeholder="Buscar un parqueadero" size="30">
                <button href="buscar.php">Buscar</button></div> 
                <nav>
                  <ul>
                      <li><h5><a class="dos" title="Iniciar sesión" href="inicia.php">Inicia sesión.</a></h5></li>
                  </ul>
                </nav>
        </div>  
    </header>

    <section class="wrap">
      <section class="main">
          
        <br></br>
          <br></br>
            <br></br>

            <div class="inicia">
              <h1><p class="descubre">Inicia sesión y descubre los parqueaderos disponibles.</p></h1>
               <img class="img" src="http://giphygifs.s3.amazonaws.com/media/2HuGIC5jkH5h6/giphy.gif">

            <div class="cuenta">
              <h1><p>¿Aún no tienes una cuenta?</p></h1>
              <h1><a href="registro.php"><p>¡Regístrate aquí!</p></a></h1> 
              <h1><p>¿Quieres registrar tu parqueadero?</p></h1>
              <h1><a href="registro-parqueadero.php"><p>¡Regístralo aquí!</p></a></h1> 
            </div>    
        
            </div>  

        </section>
      <br></br>
      </section>

      
      <footer>
         <div class="pie"> 
          <section class="acerca">
            <div class="logotipo2"><a href="index.php" title="Parqu&iacute;" ><img src="logo.png" width="80" height="30"></a></div>
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