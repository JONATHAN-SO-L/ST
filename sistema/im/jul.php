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
  <link rel="stylesheet" type="text/css" href="/st/css/im_botones.css">
</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <a class="navbar-brand" href="#">
    <img src="/st/img/logo.png" alt="logo" style="width:40px;">
  </a>

  <div class="collapse navbar-collapse " id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a style="margin: 5px;" class="nav-link" href="#">SEGUIMIENTO TEOCRÁTICO</a>
      </li>
    </ul>
  </div>

  <form class="form-inline float-lg-right" id="volver">
    <a href="/st/sistema/im" class="btn btn-danger btn-sm">VOLVER</a>
  </form>
  
</nav>
<br>

<?php

  include "../../funciones/conexion.php";

    $resultado = mysqli_query($conexion,"SELECT EXISTS (SELECT * FROM julio);");
    $row=mysqli_fetch_row($resultado);

      if ($row[0]=="1") {

        $resultado = mysqli_query($conexion, "SELECT * FROM julio");

      while ($julio = mysqli_fetch_array($resultado)) {

      echo "
            <br><br>
              <div class='container'>
                  <div class='alert alert-success alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong><center>Ya tienes este mes con tu actividad, mírala aquí abajo</center></strong>
              </div>";

    echo "
        <br><br>
          <div class='container'>
            <table class='table table-dark table-hover'>
                <tr>
                  <td><center>PUBLICACIONES</center></td>
                  <td><center><strong>".$julio['publicaciones']."</strong></center></td>
                </tr>
                <tr>
                  <td><center>VIDEOS</center></td>
                  <td><center><strong>".$julio['videos']."</strong></center></td>
                </tr>
                <tr>
                  <td><center>HORAS</center></td>
                  <td><center><strong>".$julio['horas']."</strong></center></td>
                </tr>
                <tr>
                  <td><center>REVISITAS</center></td>
                  <td><center><strong>".$julio['revisitas']."</strong></center></td>
                </tr>
                <tr>
                  <td><center>NÚMERO DE <i> DIFERENTES </i><br> CURSOS BÍBLICOS DIRIGIDOS</center></td>
                  <td><center><strong>".$julio['cursos']."</strong></center></td>
                </tr>
                <tr>
                  <td><center>COMENTARIOS</center></td>
                  <td><center><strong>".$julio['comentarios']."</strong></center></td>
                </tr>
            </table>
            <div class='form-group'>
              <center>
              <a href='/st/sistema/im/mod7.php' class='btn active btn-warning' style='color:white;'>MODIFICAR INFORME</a>
              </center>
            </div>
          </div>

        <br><br>
        ";

      }

    } else {

      echo '  <div class="container">
    <form class="form-inline" id="informe" method="POST" action="#"><br>
      <h3 class="titulo_informe"><center><strong>INFORME DE JULIO</strong></center></h3><br>
          <div class="form-inline" align="center">
            <label style="margin: 20px;" ><strong>PUBLICACIONES (IMPRESAS Y ELECTRÓNICAS):</strong></label>
            <input style="margin: 5px;" required="#" type="number" min="0" class="form-control" id="publicaciones" name="publicaciones" placeholder="0">
          </div><br>
          <div class="form-inline">
            <label style="margin: 20px;" ><strong>PRESENTACIONES DE VIDEOS:</strong></label>
            <input style="margin: 5px;" required="#" type="number" min="0" class="form-control" id="videos" name="videos" placeholder="0">
          </div><br>
          <div class="form-inline">
            <label style="margin: 20px;" ><strong>HORAS:</strong></label>
            <input style="margin: 5px;" required="#" type="number" min="0" class="form-control" id="horas" name="horas" placeholder="0">
          </div><br>
          <div class="form-inline">
            <label style="margin: 20px;" ><strong>REVISITAS:</strong></label>
            <input style="margin: 5px;" required="#" type="number" min="0" class="form-control" id="revisitas" name="revisitas" placeholder="0">
          </div><br>
          <div class="form-inline">
            <label style="margin: 20px;" ><strong>NÚMERO DE <i>DIFERENTES</i> CURSOS BÍBLICOS DIRIGIDOS:</strong></label>
            <input style="margin: 5px;" required="#" type="number" min="0" class="form-control" id="cursos" name="cursos" placeholder="0">
          </div><br>
          <div class="form-inline">
            <label style="margin: 20px;" ><strong>COMENTARIOS:</strong></label>
            <textarea style="margin: 20px;"  class="form-control-lg" rows="10" id="comentarios" name="comentarios" placeholder="Ingresa tus comentarios aquí"></textarea>
          </div>
          <div class="form-group">
            <input style="margin: 20px;" type="submit" class="btn btn-success" id="guardar" name="guardar" value="GUARDAR INFORME">
          </div>
          <br>
        </form>
      </div>

<br>';

  if (isset($_POST['guardar'])) {

    $pubs = $_POST['publicaciones'];
    $videos = $_POST['videos'];
    $hours = $_POST['horas'];
    $revisit = $_POST['revisitas'];
    $courses = $_POST['cursos'];
    $comments = $_POST['comentarios'];

    $conexion->query("INSERT INTO julio (publicaciones, videos, horas, revisitas, cursos, comentarios) VALUES ('$pubs', '$videos', '$hours', '$revisit', '$courses', '$comments')");

    echo "<script>alert('INFORME REGISTRADO')</script>";

    echo "<meta HTTP-EQUIV='REFRESH' CONTENT='0;URL=/st/sistema/im'>";

      }

    }

    include "../../funciones/close.php";
?>

<footer class="pie3">
  <div class="container" align="center">
    <a style="margin: 20px" href="https://my.jw.org/home/es" target="_blank"><img id="apps" src="https://assets1.jw.org/images/siteMarkApps_mobile.svg">DOMINIO DE LA CONRGEGACIÓN</a>
  </div>

<br>

  <div class="container" align="center">
    <p id="foot">All rights reserved. Copyrights by Jonathán Sánchez ©</p>
  </div>
</footer>

</body>
</html>