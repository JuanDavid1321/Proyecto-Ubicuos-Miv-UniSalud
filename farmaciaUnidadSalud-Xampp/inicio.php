<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/logo-unisalud-header.png" />
    <!-- Para agregar el ícono favicon -->
    <title>Inicio</title>

    <!-- LIBRERÍAS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="librerias/bootstrap/css/bootstrap.css"
    />
    <script src="librerias/jquery-3.6.1.min.js"></script>
    <script src="librerias/plotly-2.14.0.min.js"></script>
    <script
      src="https://kit.fontawesome.com/00121ead02.js"
      crossorigin="anonymous"
    ></script>
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <link rel="stylesheet" href="css/INIcio.css" />
  </head>
  <body>
    <!-- Para mi cabecera con menú principal -->
    <header>
      <a href="#" class="logo">
        <img src="images/logo-unisalud-header.png" alt="logo de la compañia" />
        <h2>SERVICIO FARMACÉUTICO</h2>
      </a>

      <input type="checkbox" id="check">

      <div class="menu">
        <ul>
          <li>
            <a id="seleccionActual" href="inicio.php">
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
            <a href="servicioDatos.php">
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
      <section class="seccionTitulo">
        <br />
        <h1 style="color: #af0b19; font-weight: bold; text-transform: uppercase; margin-top: -30px">
          ¿Qué tiene a su disposición?
        </h1>
        <br />
        <!--<hr style="width: 80%; margin: auto; color: #AF0B19;">-->
      </section>
      <section class="seccionTarjetasInformativas" style="margin-top: -20px; margin-bottom: 30px;">
        <div id="cardGraficas" class="card" style="width: 20rem; box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
          <img
            src="images/iconoGraficas.png"
            class="card-img-top"
            alt="iconoGraficas"
          />
          <div class="card-body">
            <h5 class="card-title" style="font-weight: bold; color: #af0b19">GRÁFICAS</h5>
            <hr />
            <p class="card-text">
              Para que pueda observar de forma lineal los registros de temperatura y
              humedad
            </p>
          </div>
        </div>
        <div id="cardTablas" class="card" style="width: 20rem">
          <img
            src="images/tiempo-real.png"
            class="card-img-top"
            alt="iconoGraficas"
          />
          <div class="card-body">
            <h5 class="card-title" style="font-weight: bold; color: #af0b19;">DATOS EN TIEMPO REAL</h5>
            <hr />
            <p class="card-text">
              Para que pueda observar el valor de temperatura y humedad en tiempo real
            </p>
          </div>
        </div>
      </section>
      <svg style="margin-top: -170px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0E2A47" fill-opacity="1" d="M0,128L80,149.3C160,171,320,213,480,208C640,203,800,149,960,154.7C1120,160,1280,224,1360,256L1440,288L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
      <section class="secccionMapaGoogleUnidadDeSalud" style=" padding: 30px;">
        <h1 style="color: red; font-weight: bold; text-transform: uppercase">
          Ubicación de la unidad de salud
        </h1>
        <h1 style="color: #F0F3FC; font-weight: bold; text-transform: uppercase">
          universidad del cauca
        </h1>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.196599870825!2d-76.60580538573296!3d2.441469998220835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3003058216e8fb%3A0xfa501d4669be3eed!2sUnidad%20de%20Salud!5e0!3m2!1ses!2sco!4v1665679858222!5m2!1ses!2sco"
          id="mapaGoogle"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </section>
    </main>
  </body>
</html>

<script src="js/noDisplay.js"></script>
