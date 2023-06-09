<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/logo-unisalud-header.png" />
    <!-- Para agregar el ícono favicon -->
    <title>Gráficas</title>

    <!-- LIBRERÍAS -->
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css"/>
    <script src="librerias/jquery-3.6.1.min.js"></script>
    <script src="librerias/plotly-2.14.0.min.js"></script>
    <script src="https://kit.fontawesome.com/00121ead02.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

    <link rel="stylesheet" href="css/GRaficas.css" />
  </head>
  <body>
    <!-- Para la cabecera con menú principal -->
    <header>
      <a href="#" class="logo">
        <img src="images/logo-unisalud-header.png" alt="logo de la compañia" />
        <h2>SERVICIO FARMACÉUTICO</h2>
      </a>

      <div class="menu">
        <ul>
          <li>
            <a href="inicio.php">
              <i class="fa-solid fa-house"></i>
              Inicio
            </a>
          </li>
          <li>
            <a id="seleccionActual" href="servicioGraficas.php">
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
    </header>

    <main style="margin: 20px;">
      <section class="contenedor-mes">
        <form action="servicioGraficas.php" method="POST">
            <label for="mes-selecionado" class="etiqueta-select">Seleccione un mes: </label>
            <select name="mes" class="selector-mes" id="mes-selecionado" >
              <option value="1">Enero</option>
              <option value="2">Febrero</option>
              <option value="3">Marzo</option>
              <option value="4">Abril</option>
              <option value="5">Mayo</option>
              <option value="6">Junio</option>
              <option value="7">Julio</option>
              <option value="8">Agosto</option>
              <option value="9">Septiembre</option>
              <option value="10">Octubre</option>
              <option value="11">Noviembre</option>
              <option value="12">Diciembre</option>
            </select>
            <button id="consultar" type="submit" class="consulta">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            
          </form>
          <button class="boton-reporte" id="descargar-pdf"><i class="fa-solid fa-download"></i> Reporte</button>
      </section>

      <section class="cont" style="margin-top: -20px;">
        <div id="contenido-div1" class="card">
          <div id="cargaLineal" class="mi-grafica"></div>  
        </div>

        <div id="contenido-div2" class="card">
          <div id="cargaLineal2" class="mi-grafica"></div>  
        </div>

    </main>
  </body>
</html>

<script src="js/convertpdf.js"></script>


<?php
	require_once 'php/consultaTemp_M.php';
  require_once 'php/consultaHum_M.php';
?>
