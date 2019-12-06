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
    <title>Recupera tu contraseña - Parquí</title>
  </head>

<body>

    <header>
      <div class="subheader">
          <div class="logotipo"><a href="index.php" title="Parquí" ><img src="logo.png" width="100" height="40"></a></div>
                <nav>
                  <ul>
                      <li><h5><a class="volver" title="Volver" onClick="history.back()">Volver.</a></h5></li>
                  </ul>
                </nav>
        </div>  
    </header>

    <section class="wrap">
      <section class="main">
         
         <br /><br />
          <br /><br /> 
           <div class="container mlogin">
              <div id="login">
                <h1>Recupera tu contraseña </h1>
                  <form name="loginform" id="loginform" action="newpw.php" method="POST">
                    <p>
                      <label>Correo electrónico<br />
                      <input type="email" name="email" placeholder="Correo electrónico" id="email" class="input" value="" size="20" required/></label>
                        </p>
                        <p class="submit">
                      <input type="submit" name="login" class="button" value="Recuperar la contraseña" />
                    </p>
                  <p class="regtext">¿No estás regístrado? <a href="registro.php" >¡Regístrate Aquí!</a></p>
                </form>
              </div>
            </div>
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

