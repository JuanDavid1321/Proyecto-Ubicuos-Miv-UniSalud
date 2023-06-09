<?php
    require "php/dbConnection.php";

    if(isset($_POST['registrar'])){
        if(strlen($_POST['user'])>=1 && strlen($_POST['pass'])>=1){
            $username = $_POST['user'];
            $password = $_POST['pass'];

            $consulta = "INSERT INTO users(username, password) VALUES ('$username','$password')";
            $resultado = mysqli_query($conn,$consulta);
            echo "<script>alert('Registro exitoso')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/logo-unisalud-header.png"> <!-- Para agregar el ícono favicon -->
        <title>Registro</title>
        
       <!-- LIBRERÍAS -->
        <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
        <script src="librerias/jquery-3.6.1.min.js"></script>
        <script src="librerias/plotly-2.14.0.min.js"></script>
        <script src="https://kit.fontawesome.com/00121ead02.js" crossorigin="anonymous"></script>
        <link href="http://fonts.cdnfonts.com/css/baskerville" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

        <link rel="stylesheet" href="css/registros.css">


    </head>
    <body>
        <div class="contenedorImagen">
            <img src="images/unidadSaludGeneral.png" alt="logo de la compañia">
        </div>
        
        <div class="formulario">
            
            <h1>Registrarse </h1>
            
            <form action="registro.php" method="post">
                <!-- USER -->
                <input type="text" placeholder="Ingrese usuario" name="user">

                <!-- PASSWORD -->
                <input type="password" placeholder="Ingrese contraseña" name="pass">

                <input type="submit" name="registrar" value="GUARDAR">

                <a href="index.php" >
                 <i class="fa-solid fa-arrow-left"></i>
                </a>

                
            </form>
        </div> 
    </body>
</html>