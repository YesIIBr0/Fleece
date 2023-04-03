<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <script src="https://kit.fontawesome.com/4cd3ce9734.js" crossorigin="anonymous"></script>
    </head>

  <body class="form">    
      <form class="formulario" method="post" action="backend/register_action.php">
        <h1>Registrate!</h1>
        <div class="contenedor">

        <div class="input_contenedor">
            <i class="fa-solid fa-user icon"></i>
        <input type="text" placeholder="Nombre Completo" name="usuario" > 
        </div >
        <div class="input_contenedor">
        <i class="fa-sharp fa-solid fa-envelope icon"></i> 
        <input type="text" placeholder="Correo electronico" name ="correo"> 
        </div >
        <div class="input_contenedor">
            <i class="fa-solid fa-lock icon"></i>
        <input type="password" placeholder="Contraseña" name ="clave"> 
        
        </div >
        <input type="submit" name="enviar" value="Registrate" class="button">
        <p class="texto">Al registrarte, aceptas las politicas de privacidad y Condiciones de uso</p><br>
        <p class="texto">Ya tienes cuenta?<a class="link" href="Log in.html">Iniciar Sesion</a></p>

    </div>
</form>
  </body>
  </html>


