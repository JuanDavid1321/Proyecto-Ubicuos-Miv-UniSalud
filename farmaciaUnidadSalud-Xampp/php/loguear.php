<?php 
    require 'dbConnection.php';
    session_start();

    $usuario = $_POST['user'];
    $clave = $_POST['pass'];

    $query = "SELECT COUNT(*) as contar FROM users where username = '$usuario' and password = '$clave'";

    $consulta = mysqli_query($conn,$query);

    $array = mysqli_fetch_array($consulta);

    if ($array['contar'] > 0) {
        
        header("location: ../inicio.php");

    }
    else{
        echo 
        "<script>
            confirm('Datos incorrectos')
            open('../index.php ')
            close('loguear.php')
        </script>";
    }

?>