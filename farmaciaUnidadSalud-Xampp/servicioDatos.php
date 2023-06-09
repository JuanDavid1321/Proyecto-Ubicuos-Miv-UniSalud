<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/logo-unisalud-header.png" />
    <!-- Para agregar el ícono favicon -->
    <title>Datos en tiempo real</title>

    <!-- LIBRERÍAS -->
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css"/>
    <script src="librerias/jquery-3.6.1.min.js"></script>
    <script src="librerias/plotly-2.14.0.min.js"></script>
    <script src="https://kit.fontawesome.com/00121ead02.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/droid-serif-2" rel="stylesheet">

    <link rel="stylesheet" href="css/DATos.css" />
  </head>

  <body>
    <!-- Para la cabecera con menú principal -->
    <header>
      <a href="#" class="logo">
        <img src="images/logo-unisalud-header.png" alt="logo de la compañia" />
        <h2>SERVICIO FARMACÉUTICO</h2>
      </a>

      <input type="checkbox" id="check">

      <div class="menu">
        <ul>
          <li>
            <a href="inicio.php">
              <i class="fa-solid fa-house"></i>
              Inicio
            </a>
          </li>
          <li id="menu-a-graficas">
            <a href="servicioGraficas.php">
              <i class="fa-sharp fa-solid fa-chart-line"></i>
              Gráficas
            </a>
          </li>
          <li>
            <a id="seleccionActual" href="servicioDatos.php">
              <i class="fa-solid fa-table-list"></i>
              Datos en tiempo real
            </a>
          </li>
          <li>
            <a id="cierre" href="index.php">
              <i class="fa-solid fa-user-xmark"></i>
              Cerrar Sesión
            </a>
          </li>
        </ul>
      </div>
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
    </header>

    <main id="seccionMain">
      <div class="contenedor-descripcion-colores">
        <div class="contenedor-vn">
          <div class="color-vn">s</div>
          <div class="textN">Valores normales</div>
        </div>
        <div class="contenedor-ve">
          <div class="color-ve">s</div>
          <div class="textN">Valores elevados</div>
        </div>
        <div class="contenedor-vf">
          <div class="color-vf">s</div>
          <div class="textN">Valores fuera de rango</div>
        </div>
      </div>

      <div class="contenedor-cards">
        <div id="cardTemp" class="card">
          <div class="card-body d-flex flex-row justify-content-center align-items-center">
            <img src="images/temperatura.png" id="imgTemp" class="card-img-top" alt="iconoTemp">
            <h5 class="card-title d-flex justify-content-center" id="textData">8°C</h5> 
          </div>
        </div>
        <div id="cardHum" class="card">
          <div class="card-body d-flex flex-row justify-content-center align-items-center">
            <img src="images/humidity.png" id="imgHum" alt="iconoGraficas"/>
            <h5 class="card-title d-flex justify-content-center" id="textData">68%</h5>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    $('#tabla').load('php/tabla.php');	
  });
</script>

<script src="js/noDisplay.js"></script>