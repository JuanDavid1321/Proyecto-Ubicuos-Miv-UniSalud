<?php
  require "dbConnection.php";  // Conexión con base de datos
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 	Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
  <html>
    <head>
        <link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.css"/>
        
        <link rel="stylesheet" href="../css/estilos.css">    
         <title> ULTIMOS datos medidos de TEMPERATURA y HUMEDAD dispositivo IoT </title>
        <meta http-equiv="refresh" content="" />
        
    </head>

    <body>

      <table width="100%" align=center cellpadding=17 id="tablaw" border="1">

    	 <tr>
         <td valign="center" align=center bgcolor="#0E2A47" WIDTH="50" HEIGHT="50" style="border-right: 0.1px solid black; color:#ffffff;">
            <b>TEMPERATURA</b>
         </td>
        
         <td valign="center" align=center bgcolor="#0E2A47" WIDTH="50" HEIGHT="50" style="border-right: 0.1px solid black; color:#ffffff">
            <b>HUMEDAD</b>
         </td>

         <td valign="center" align=center bgcolor="#0E2A47" WIDTH="50" HEIGHT="50" style="border-right: 0.1px solid black; color:#ffffff">
            <b>FECHA</b>
         </td>
       
    		 <td valign="center" align=center bgcolor="#0E2A47" WIDTH="50" HEIGHT="50" style="color:#ffffff">
            <b>HORA</b>
         </td>

 	     </tr>

<?php

  $sql1 = "SELECT * from registros order by id DESC LIMIT 10"; // Aqu� se ingresa el valor recibido a la base de datos.
  // la siguiente l�nea ejecuta la consulta guardada en la variable sql, con ayuda del objeto de conexi�n a la base de datos mysqli
  $result1 = mysqli_query($conn,$sql1);

  while($row1 = mysqli_fetch_row($result1))
  {
        $fecha = $row1[3];
      $hora = $row1[4];

      $temperatura = $row1[1];
      $humedad = $row1[2];

    ?>

          <tr>
            <td valign="center" align=center style="color: #3F5E83; font-weight: bold; border-right: 0.1px solid black; background-color: white; border-bottom: 0.1px solid black;">
              <?php echo $temperatura . '°C'; ?> 
            </td>
    
            <td valign="center" align=center style="color: #3F5E83; font-weight: bold; border-right: 0.1px solid black; background-color: white; border-bottom: 0.1px solid black;">
              <?php echo $humedad . '%'; ?> 
            </td>

            <td valign="center" align=center style="color: #3F5E83; font-weight: bold; border-right: 0.1px solid black; background-color: white; border-bottom: 0.1px solid black;">
              <?php echo $fecha; ?> 
            </td>

            <td valign="center" align=center style="color: #3F5E83; font-weight: bold; background-color: white; border-bottom: 0.1px solid black;"> 
              <?php echo $hora; ?> 
            </td>
            
          </tr>
        <?php
  }
?>
  </body>
</html>