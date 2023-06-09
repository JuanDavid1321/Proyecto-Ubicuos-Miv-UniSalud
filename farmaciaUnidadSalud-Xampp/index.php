<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/logo-unisalud-header.png"> <!-- Para agregar el ícono favicon -->
        <title>Inicio de sesión</title>
        
       <!-- LIBRERÍAS -->
        <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
        <script src="librerias/jquery-3.6.1.min.js"></script>
        <script src="librerias/plotly-2.14.0.min.js"></script>
        <script src="https://kit.fontawesome.com/00121ead02.js" crossorigin="anonymous"></script>
        <link href="http://fonts.cdnfonts.com/css/baskerville" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

        <link rel="stylesheet" href="css/Index.css">

        <script src="librerias/jquery-3.6.1.min.js"></script>
        <script src="librerias/plotly-2.14.0.min.js"></script>

    </head>
    <body>
        <div class="contenedorImagen">
            <img src="images/unidadSaludGeneral.png" alt="logo de la compañia">
        </div>
        
        <div class="formulario">
            <img src="images/logo-unisalud-header.png" alt="logo de la compañia">
            <h1>Iniciar Sesión </h1>
            
            <form action="php/loguear.php" method="POST">
                <!-- USER -->
                <label for="username">
                    <i class="fa-solid fa-user"></i>
                    Usuario
                </label>
                <input type="text" placeholder="Ingrese usuario" id="pUsuario" name="user" required>

                <!-- PASSWORD -->
                <label for="password">
                    <i class="fa-solid fa-key"></i>
                    Contraseña
                </label>
                <input type="password" placeholder="Ingrese contraseña" id="pContra" name="pass" required>

                <input type="submit" name="ingresar" value="INGRESAR">

                <!-- Para Registro -->
                <div class="referencias">
                    <a href="registro.php">¡Registrarse!</a>
                </div>
                
            </form>
        </div> 
    </body>
</html>