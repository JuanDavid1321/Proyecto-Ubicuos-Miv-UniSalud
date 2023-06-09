<?php
    include "../php/dbConnectionDevice.php";  // Conexión tiene la información sobre la conexión de la base de datos.
    $temp = $_POST ['temp'];
    $hum = $_POST ['hum'];
    $date = $_POST ['date'];
    $timestamp = $_POST ['timestamp'];
    
    $mysqli = new mysqli($server, $user, $pass, $database); // Aquí se hace la conexión a la base de datos.

    date_default_timezone_set('America/Bogota'); // esta línea es importante cuando el servidor es REMOTO.

    // $fecha = date("Y-m-d");
    // $hora = date("H:i:s");
    
    $sql1 = "INSERT into registros (id, temp, hum, fecha, hora) VALUES (NULL, '$temp', '$hum', '$date', '$timestamp')"; // Aquí se ingresa el valor recibido a la base de datos.
    
    $result1 = $mysqli->query($sql1);
    echo "result es...".$result1; // Si result es 1, quiere decir que el ingreso a la base de datos fue correcto.;
    

?>