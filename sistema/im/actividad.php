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

<div class="container" style="background-color: white;">

<?php 

  include "../../funciones/conexion.php"; // Se incluye la conexión a la DDBB

// Se abre contenido
    echo "
    <div class='container'><br>
    <h2><center><strong>INFORME ANUAL</strong></center</h2><br><br>"; // Título

// Se consulta todo lo que esté registrado en la tabla del mes correspondiente
  $actividad_enero = mysqli_query($conexion,"SELECT * FROM enero");

// Mientras exista infromación, la va a almacenar en una arreglo de datos
        while ($consulta1 = mysqli_fetch_array($actividad_enero)) {

// Se muestra lo que se almacenó en una tabla
  echo "<div class='container'><br>
    <table class='table table-dark table-striped'>
      <thead>
        <tr>
          <strong>ENERO</strong>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Publicaciones (impresas y electrónicas): </td>
          <td><center>".$consulta1 ['publicaciones']."</center></td>
        </tr>
        <tr>
          <td>Videos: </td>
          <td><center>".$consulta1 ['videos']."</center></td>
        </tr>
        <tr>
          <td>Horas: </td>
          <td><center>".$consulta1 ['horas']."</center></td>
        </tr>
        <tr>
          <td>Revisitas: </td>
          <td><center>".$consulta1 ['revisitas']."</center></td>
        </tr>
        <tr>
          <td>Número de <i> diferentes </i> <br> cursos bíblicos dirigidos</td>
          <td><center>".$consulta1 ['cursos']."</center></td>
        </tr>
        <tr>
          <td>Comentarios: </td>
          <td><center>".$consulta1 ['comentarios']."</center></td>
        </tr>
      </tbody>
    </table>
    </div>";
  }

  $actividad_febrero = mysqli_query($conexion,"SELECT * FROM febrero");

        while ($consulta2 = mysqli_fetch_array($actividad_febrero)) {
  
  echo "
    <div class='container'><br>   
    <table class='table table-dark table-striped'>
      <thead>
        <tr>
          <strong>FEBRERO</strong>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Publicaciones (impresas y electrónicas): </td>
          <td><center>".$consulta2 ['publicaciones']."</center></td>
        </tr>
        <tr>
          <td>Videos: </td>
          <td><center>".$consulta2 ['videos']."</center></td>
        </tr>
        <tr>
          <td>Horas: </td>
          <td><center>".$consulta2 ['horas']."</center></td>
        </tr>
        <tr>
          <td>Revisitas: </td>
          <td><center>".$consulta2 ['revisitas']."</center></td>
        </tr>
        <tr>
          <td>Número de <i> diferentes </i> <br> cursos bíblicos dirigidos</td>
          <td><center>".$consulta2 ['cursos']."</center></td>
        </tr>
        <tr>
          <td>Comentarios: </td>
          <td><center>".$consulta2 ['comentarios']."</center></td>
        </tr>
      </tbody>
    </table>
    </div>";
  }

  $actividad_marzo = mysqli_query($conexion,"SELECT * FROM marzo");

        while ($consulta3 = mysqli_fetch_array($actividad_marzo)) {
  
  echo "  
    <div class='container'>       
    <table class='table table-dark table-striped'>
      <thead>
        <tr>
          <strong>MARZO</strong>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Publicaciones (impresas y electrónicas): </td>
          <td><center>".$consulta3 ['publicaciones']."</center></td>
        </tr>
        <tr>
          <td>Videos: </td>
          <td><center>".$consulta3 ['videos']."</center></td>
        </tr>
        <tr>
          <td>Horas: </td>
          <td><center>".$consulta3 ['horas']."</center></td>
        </tr>
        <tr>
          <td>Revisitas: </td>
          <td><center>".$consulta3 ['revisitas']."</center></td>
        </tr>
        <tr>
          <td>Número de <i> diferentes </i> <br> cursos bíblicos dirigidos</td>
          <td><center>".$consulta3 ['cursos']."</center></td>
        </tr>
        <tr>
          <td>Comentarios: </td>
          <td><center>".$consulta3 ['comentarios']."</center></td>
        </tr>
      </tbody>
    </table>
    </table>
    </div>";
  }

  $actividad_abril = mysqli_query($conexion,"SELECT * FROM abril");

        while ($consulta4 = mysqli_fetch_array($actividad_abril)) {
  
  echo "  
    <div class='container'>       
    <table class='table table-dark table-striped'>
      <thead>
        <tr>
          <strong>ABRIL</strong>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Publicaciones (impresas y electrónicas): </td>
          <td><center>".$consulta4 ['publicaciones']."</center></td>
        </tr>
        <tr>
          <td>Videos: </td>
          <td><center>".$consulta4 ['videos']."</center></td>
        </tr>
        <tr>
          <td>Horas: </td>
          <td><center>".$consulta4 ['horas']."</center></td>
        </tr>
        <tr>
          <td>Revisitas: </td>
          <td><center>".$consulta4 ['revisitas']."</center></td>
        </tr>
        <tr>
          <td>Número de <i> diferentes </i> <br> cursos bíblicos dirigidos</td>
          <td><center>".$consulta4 ['cursos']."</center></td>
        </tr>
        <tr>
          <td>Comentarios: </td>
          <td><center>".$consulta4 ['comentarios']."</center></td>
        </tr>
      </tbody>
    </table>
    </table>
    </div>";
  }

  $actividad_mayo = mysqli_query($conexion,"SELECT * FROM mayo");

        while ($consulta5 = mysqli_fetch_array($actividad_mayo)) {
  
  echo "  
    <div class='container'>       
    <table class='table table-dark table-striped'>
      <thead>
        <tr>
          <strong>MAYO</strong>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Publicaciones (impresas y electrónicas): </td>
          <td><center>".$consulta5 ['publicaciones']."</center></td>
        </tr>
        <tr>
          <td>Videos: </td>
          <td><center>".$consulta5 ['videos']."</center></td>
        </tr>
        <tr>
          <td>Horas: </td>
          <td><center>".$consulta5 ['horas']."</center></td>
        </tr>
        <tr>
          <td>Revisitas: </td>
          <td><center>".$consulta5 ['revisitas']."</center></td>
        </tr>
        <tr>
          <td>Número de <i> diferentes </i> <br> cursos bíblicos dirigidos</td>
          <td><center>".$consulta5 ['cursos']."</center></td>
        </tr>
        <tr>
          <td>Comentarios: </td>
          <td><center>".$consulta5 ['comentarios']."</center></td>
        </tr>
      </tbody>
    </table>
    </table>
    </div>";
  }

  $actividad_junio = mysqli_query($conexion,"SELECT * FROM junio");

        while ($consulta6 = mysqli_fetch_array($actividad_junio)) {
  
  echo "  
    <div class='container'>       
    <table class='table table-dark table-striped'>
      <thead>
        <tr>
          <strong>JUNIO</strong>     
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Publicaciones (impresas y electrónicas): </td>
          <td><center>".$consulta6 ['publicaciones']."</center></td>
        </tr>
        <tr>
          <td>Videos: </td>
          <td><center>".$consulta6 ['videos']."</center></td>
        </tr>
        <tr>
          <td>Horas: </td>
          <td><center>".$consulta6 ['horas']."</center></td>
        </tr>
        <tr>
          <td>Revisitas: </td>
          <td><center>".$consulta6 ['revisitas']."</center></td>
        </tr>
        <tr>
          <td>Número de <i> diferentes </i> <br> cursos bíblicos dirigidos</td>
          <td><center>".$consulta6 ['cursos']."</center></td>
        </tr>
        <tr>
          <td>Comentarios: </td>
          <td><center>".$consulta6 ['comentarios']."</center></td>
        </tr>
      </tbody>
    </table>
    </table>
    </div>";
  }

  $actividad_julio = mysqli_query($conexion,"SELECT * FROM julio");

        while ($consulta7 = mysqli_fetch_array($actividad_julio)) {
  
  echo "  
    <div class='container'>       
    <table class='table table-dark table-striped'>
      <thead>
        <tr>
          <strong>JULIO</strong>     
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Publicaciones (impresas y electrónicas): </td>
          <td><center>".$consulta7 ['publicaciones']."</center></td>
        </tr>
        <tr>
          <td>Videos: </td>
          <td><center>".$consulta7 ['videos']."</center></td>
        </tr>
        <tr>
          <td>Horas: </td>
          <td><center>".$consulta7 ['horas']."</center></td>
        </tr>
        <tr>
          <td>Revisitas: </td>
          <td><center>".$consulta7 ['revisitas']."</center></td>
        </tr>
        <tr>
          <td>Número de <i> diferentes </i> <br> cursos bíblicos dirigidos</td>
          <td><center>".$consulta7 ['cursos']."</center></td>
        </tr>
        <tr>
          <td>Comentarios: </td>
          <td><center>".$consulta7 ['comentarios']."</center></td>
        </tr>
      </tbody>
    </table>
    </table>
    </div>";
  }

  $actividad_agosto = mysqli_query($conexion,"SELECT * FROM agosto");

        while ($consulta8 = mysqli_fetch_array($actividad_agosto)) {
  
  echo "  
    <div class='container'>       
    <table class='table table-dark table-striped'>
      <thead>
        <tr>
          <strong>AGOSTO</strong>      
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Publicaciones (impresas y electrónicas): </td>
          <td><center>".$consulta8 ['publicaciones']."</center></td>
        </tr>
        <tr>
          <td>Videos: </td>
          <td><center>".$consulta8 ['videos']."</center></td>
        </tr>
        <tr>
          <td>Horas: </td>
          <td><center>".$consulta8 ['horas']."</center></td>
        </tr>
        <tr>
          <td>Revisitas: </td>
          <td><center>".$consulta8 ['revisitas']."</center></td>
        </tr>
        <tr>
          <td>Número de <i> diferentes </i> <br> cursos bíblicos dirigidos</td>
          <td><center>".$consulta8 ['cursos']."</center></td>
        </tr>
        <tr>
          <td>Comentarios: </td>
          <td><center>".$consulta8 ['comentarios']."</center></td>
        </tr>
      </tbody>
    </table>
    </table>
    </div>";
  }

  $actividad_septiembre = mysqli_query($conexion,"SELECT * FROM septiembre");

        while ($consulta9 = mysqli_fetch_array($actividad_septiembre)) {
  
  echo "  
    <div class='container'>       
    <table class='table table-dark table-striped'>
      <thead>
        <tr>
          <strong>SEPTIEMBRE</strong>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Publicaciones (impresas y electrónicas): </td>
          <td><center>".$consulta9 ['publicaciones']."</center></td>
        </tr>
        <tr>
          <td>Videos: </td>
          <td><center>".$consulta9 ['videos']."</center></td>
        </tr>
        <tr>
          <td>Horas: </td>
          <td><center>".$consulta9 ['horas']."</center></td>
        </tr>
        <tr>
          <td>Revisitas: </td>
          <td><center>".$consulta9 ['revisitas']."</center></td>
        </tr>
        <tr>
          <td>Número de <i> diferentes </i> <br> cursos bíblicos dirigidos</td>
          <td><center>".$consulta9 ['cursos']."</center></td>
        </tr>
        <tr>
          <td>Comentarios: </td>
          <td><center>".$consulta9 ['comentarios']."</center></td>
        </tr>
      </tbody>
    </table>
    </table>
    </div>";
  }

  $actividad_octubre = mysqli_query($conexion,"SELECT * FROM octubre");

        while ($consulta10 = mysqli_fetch_array($actividad_octubre)) {
  
  echo "  
    <div class='container'>       
    <table class='table table-dark table-striped'>
      <thead>
        <tr>
          <strong>OCTUBRE</strong>      
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Publicaciones (impresas y electrónicas): </td>
          <td><center>".$consulta10 ['publicaciones']."</center></td>
        </tr>
        <tr>
          <td>Videos: </td>
          <td><center>".$consulta10 ['videos']."</center></td>
        </tr>
        <tr>
          <td>Horas: </td>
          <td><center>".$consulta10 ['horas']."</center></td>
        </tr>
        <tr>
          <td>Revisitas: </td>
          <td><center>".$consulta10 ['revisitas']."</center></td>
        </tr>
        <tr>
          <td>Número de <i> diferentes </i> <br> cursos bíblicos dirigidos</td>
          <td><center>".$consulta10 ['cursos']."</center></td>
        </tr>
        <tr>
          <td>Comentarios: </td>
          <td><center>".$consulta10 ['comentarios']."</center></td>
        </tr>
      </tbody>
    </table>
    </table>
    </div>";
  }

  $actividad_noviembre = mysqli_query($conexion,"SELECT * FROM noviembre");

        while ($consulta11 = mysqli_fetch_array($actividad_noviembre)) {
  
  echo "  
    <div class='container'>       
    <table class='table table-dark table-striped'>
      <thead>
        <tr>
          <strong>NOVIEMBRE</strong>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Publicaciones (impresas y electrónicas): </td>
          <td><center>".$consulta11 ['publicaciones']."</center></td>
        </tr>
        <tr>
          <td>Videos: </td>
          <td><center>".$consulta11 ['videos']."</center></td>
        </tr>
        <tr>
          <td>Horas: </td>
          <td><center>".$consulta11 ['horas']."</center></td>
        </tr>
        <tr>
          <td>Revisitas: </td>
          <td><center>".$consulta11 ['revisitas']."</center></td>
        </tr>
        <tr>
          <td>Número de <i> diferentes </i> <br> cursos bíblicos dirigidos</td>
          <td><center>".$consulta11 ['cursos']."</center></td>
        </tr>
        <tr>
          <td>Comentarios: </td>
          <td><center>".$consulta11 ['comentarios']."</center></td>
        </tr>
      </tbody>
    </table>
    </table>
    </div>";
  }

  $actividad_diciembre = mysqli_query($conexion,"SELECT * FROM diciembre");

        while ($consulta12 = mysqli_fetch_array($actividad_diciembre)) {
  
  echo "  
    <div class='container'>       
    <table class='table table-dark table-striped'>
      <thead>
        <tr>
          <strong>DICIEMBRE</strong>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Publicaciones (impresas y electrónicas): </td>
          <td><center>".$consulta12 ['publicaciones']."</center></td>
        </tr>
        <tr>
          <td>Videos: </td>
          <td><center>".$consulta12 ['videos']."</center></td>
        </tr>
        <tr>
          <td>Horas: </td>
          <td><center>".$consulta12 ['horas']."</center></td>
        </tr>
        <tr>
          <td>Revisitas: </td>
          <td><center>".$consulta12 ['revisitas']."</center></td>
        </tr>
        <tr>
          <td>Número de <i> diferentes </i> <br> cursos bíblicos dirigidos</td>
          <td><center>".$consulta12 ['cursos']."</center></td>
        </tr>
        <tr>
          <td>Comentarios: </td>
          <td><center>".$consulta12 ['comentarios']."</center></td>
        </tr>
      </tbody>
    </table>
    </table>
    </div>";
  }
      echo "</div><br>";  // Se cierra el contenido

      include "../../funciones/close.php";  // Se cierra la conexión a la DDBB

?>

<br>
</div>
<br>

<!-- Botón de descarga en PDF -->
      <div class="container" align="center">
        <a class="boton" href="/st/informe"><button style="margin: 10px" type="sumbit" class="btn btn-danger btn-md"><img id="mes" src="/st/img/descarga_pdf.png">DESCARGAR INFORME EN PDF</button></a>
      </div>

<br>

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