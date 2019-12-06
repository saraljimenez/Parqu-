
<!DOCTYPE html>

<html lang=es>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="icon" type="image/gif" href="animated_favicon1.gif" >
    <title>Regístrar parqueadero - Parquí</title>
  </head>

<body>

    <header class="new">
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
           <div class="mregister">
              <div id="login">
                <h1>Regístrar parqueadero</h1>
                  <form name="registerform" id="loginform" action="insertar-parqueadero.php" method="POST">
                    <p id="uno">
                      <label for="user_login">Nombre del propietario<br />
                      <input type="text" name="nombre" placeholder="Nombre" class="input"  value="" size="20" required>
                        </p>
                          <p id="dos">
                            <label for="user_login">Apellido del propietario<br />
                            <input type="text" name="apellido" placeholder="Apellido" class="input"  value="" size="20" required>
                          </p>
                           <p id="tres">
                            <label for="user_pass">E-mail<br />
                            <input type="email" name="email" placeholder="E-mail" class="input" size="20" required>
                          </p> 
                          <p id="cuatro">
                            <label for="user_pass">Contraseña<br />
                            <input type="password" name="pw" placeholder="Contraseña" class="input" size="20" required>
                          </p> 
                          <p id="cinco">
                            <label for="user_pass">Cédula<br />
                            <input type="number" name="cedula" placeholder="Cédula" class="input" value="" size="20" required>
                          </p>
                          <p id="seis">
                            <label for="user_pass">Teléfono<br />
                            <input type="number" name="telefono" placeholder="Teléfono" class="input" value="" size="20" required>
                          </p>
                          <p id="siete">
                            <label for="user_pass">Ciudad<br />
                            <input type="text" name="ciudad" placeholder="Ciudad" class="input" value="" size="20" required>
                          <p id="ocho">
                            <label for="user_pass">Dirección del arrendatirio<br />
                            <input type="text" name="direccion" placeholder="Dirección" class="input" value="" size="20" required>
                          </p>
                           <p id="ocho">
                            <label for="user_pass">Tipo de parqueadero<br />
                            <select class="input" name="tipo" value="Seleccione el tipo" placeholder="Seleccione el tipo">
                               <option value="1">Casa</option> 
                               <option value="2">Conjunto</option> 
                               <option value="3">Parqueadero publico</option>
                               <option value="4">Lote</option> 
                            </select>
                          </p>
                        <p class="submit">
                      <input type="submit" name="login" class="button" value="Regístrarse" />
                    </p>
                  <p class="regtext">¿Ya tienes una cuenta? <a href="inicia.php" >¡Inicia sesión!</a></p>
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

