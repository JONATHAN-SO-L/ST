<!DOCTYPE html>
<html lang="es">
<head>
  <title>ST</title>
  <link rel="icon" href="/st/img/favicon.ico" type="image/icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/st/css/index.css">
  <link rel="stylesheet" type="text/css" href="/st/css/ep_botones.css">
  <link rel="stylesheet" type="text/css" href="/st/css/im_botones.css">
  <script src="/st/funciones/subir.js"></script>
</head>

<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <a class="navbar-brand" href="#">
      <img src="/st/img/logo.png" alt="logo" style="width:40px;">
    </a>

    <div class="collapse navbar-collapse " id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a style="margin: 5px;" class="nav-link" href="#">Q&S</a>
        </li>
      </ul>
    </div>

    <!-- Barra superior -->
    <form class="form-inline float-lg-right" id="volver"> <!-- Alineación a la derecha -->
      <a href="/st/sistema/qns/qns.php" class="btn btn-danger btn-sm">VOLVER</a> <!-- Enlace de clase botón -->
    </form> <!-- Botón de salida o vuelta -->

  </nav>

  <div class='container'><br>
    <h2 class="text-center" style="color: white;"><strong>RESULTADOS DE LA BÚSQUEDA</strong></h2>
    <table class='table table-dark table-hover'>
      <thead>
        <br>
      </thead>
      <tbody>

        <?php

        //if (isset($_POST['buscar'])) {

        include "../../funciones/conexion.php";

        $word = $_POST['busqueda'];
        $search = $_POST['buscar'];

        $sql = "SELECT * FROM q_n_s WHERE q_or_s LIKE '%$word%'";
        $query = mysqli_query ($conexion, $sql);
        $count_results = mysqli_num_rows($query);

        if (mysqli_num_rows($query) > 0) {

          while ($qns = mysqli_fetch_array ($query)){

            echo "
            <tr>
            <td><center>".$qns ['id_qns']."</center></td>
            <td><center>".$qns ['nombre']."</center></td>
            <td><center>".$qns ['q_or_s']."</center></td>
            </tr>
            ";

          }

          } else {
          
            echo '<div style="background-color: black;">
            <h2 class="text-center" style="color: white;"><strong>No hay resultados</strong></h2>
            </div>';
          
          }

          include "../../funciones/close.php";

     //   }

          ?>

        </tbody>
      </table><br>
    </div>

    <span class="ir-arriba"><strong>^</strong></span>

    <!-- Pie de página -->
    <footer class="pie1">
      <!-- Imágenes redireccionables -->
      <div class="container" align="center">
        <a style="margin: 20px" href="https://jw.org/es" target="_blank"><img id="jw" src="https://movilsagt.com/jw/files/2016/01/JW-NUEVO.jpg">SITIO OFICIAL DE LOS TESTIGOS DE JEHOVÁ</a> <!-- Apertura en otra pestaña -->
        <a style="margin: 20px" href="https://my.jw.org/home/es" target="_blank"><img id="apps" src="https://assets1.jw.org/images/siteMarkApps_mobile.svg">DOMINIO DE LA CONGREGACIÓN</a>
        <a style="margin: 20px" href="https://wol.jw.org/es" target="_blank"><img id="wol" src="https://pbs.twimg.com/media/EFglz6RWoAAmj_P.jpg">BIBLIOTECA EN LÍNEA</a>
      </div>

      <br>

      <!-- Texto de derechos de autor -->
      <div class="container" align="center">
        <p id="foot">All rights reserved. Copyrights by Jonathán Sánchez ©</p>  <!-- Etiqueta de comentario -->
        <p id="foot">Versión 1.0.0</p>
        <p id="foot">Last release 2020</p>
      </div>
    </footer>

  </body>
  </html>