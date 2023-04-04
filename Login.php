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
      <form class="formulario" method="post" action="backend/login_action.php">         
        <h1>Login!</h1>
        <div class="contenedor">

        <div class="input_contenedor">
        <i class="fa-sharp fa-solid fa-envelope icon"></i> 
        <input type="text" placeholder="Correo electronico" name="email" required> 
        </div >
        <div class="input_contenedor">
            <i class="fa-solid fa-lock icon"></i>
        <input type="password" placeholder="Contraseña" name="password" required> 
        
        </div >
        <input type="submit" name="enviar" value="Login" class="button">
        <p class="texto">Al registrarte, aceptas las politicas de privacidad y Condiciones de uso</p><br>
        <p class="texto">No tienes cuenta?<a class="link" href="Registro.php">Registrate</a></p>

    </div>
</form>
  </body>
  </html>


