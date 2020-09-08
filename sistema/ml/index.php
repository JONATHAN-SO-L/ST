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
  <link rel="stylesheet" type="text/css" href="/st/css/ml_botones.css">
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
    <a href="/st/sistema/" class="btn btn-danger btn-sm">VOLVER</a>
  </form>
  
</nav>

<!-- Verificación de registros dentro de la base de datos -->
<?php

  include "../../funciones/conexion.php";

  $resultado = mysqli_query($conexion,"SELECT EXISTS (SELECT * FROM $table2);");
  $row=mysqli_fetch_row($resultado);

      if ($row[0]=="1") {

        $resultado = mysqli_query($conexion, "SELECT * FROM $table2");

      while ($ml = mysqli_fetch_array($resultado)) {
      echo '
          <div class="alert alert-success">
          <strong><center>Ya tienes una meta de libros hecha, observala aquí abajo
          <button type="button" class="close" data-dismiss="alert">&times;</center>
          </div></strong>';

      echo "<br><br>
                  <div class='container'>          
                    <table class='table table-dark table-hover' id='dash_ml'>
                      <thead>
                      <tr>
                        <th><center><strong>ENERO</strong></center></th>
                        <th><center><strong>FEBRERO</strong></center></th>
                        <th><center><strong>MARZO</strong></center></th>
                        <th><center><strong>ABRIL</strong></center></th>
                        <th><center><strong>MAYO</strong></center></th>
                        <th><center><strong>JUNIO</strong></center></th>
                        <th><center><strong>JULIO</strong></center></th>
                        <th><center><strong>AGOSTO</strong></center></th>
                        <th><center><strong>SEPTIEMBRE</strong></center></th>
                        <th><center><strong>OCTUBRE</strong></center></th>
                        <th><center><strong>NOVIEMBRE</strong></center></th>
                        <th><center><strong>DICIEMBRE</strong></center></th>
                      </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><center>".$ml['libro1']."</center></td>
                          <td><center>".$ml['libro2']."</center></td>
                          <td><center>".$ml['libro3']."</center></td>
                          <td><center>".$ml['libro4']."</center></td>
                          <td><center>".$ml['libro5']."</center></td>
                          <td><center>".$ml['libro6']."</center></td>
                          <td><center>".$ml['libro7']."</center></td>
                          <td><center>".$ml['libro8']."</center></td>
                          <td><center>".$ml['libro9']."</center></td>
                          <td><center>".$ml['libro10']."</center></td>
                          <td><center>".$ml['libro11']."</center></td>
                          <td><center>".$ml['libro12']."</center></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                <br><br>
                ";
      }

      echo '<div class="container contenedor-modal" align="center">
    <button name="modificar" id="modificar" style="margin: 10px" type="sumbit" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#miModal2">MODIFICAR LA META DE LIBROS</button>
    <button name="reiniciar" style="margin: 10px" type="sumbit" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#miModal3"><img id="ren" src="/st/img/reiniciar.png">REINICIAR META DE LIBROS</button>
    </div>';

      } else {
        echo '
        <div class="container">
          <div class="alert alert-danger alert-dismissible">
          <strong><center>Al parecer aún no tienes una meta de libros programada, hazla ahora mismo en "INICIAR CON LA META DE LIBROS"</center>
          <button type="button" class="close" data-dismiss="alert">&times;
        </div></strong>
        </div>';

        echo '<div class="container contenedor-modal" align="center">
    <button name="ingresar" style="margin: 10px" type="sumbit" class="btn btn-success btn-lg" data-toggle="modal" data-target="#miModal">INICIAR CON LA META DE LIBROS</button>
    </div>';

      }

  include "../../funciones/close.php";

?>

<!-- Modal 1 -->
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-contenido modal-dialog modal-lg" role="document">
      <div class="modal-content">
      <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
<br>
<div id="form_ml" class="container">

  <div class="container">
  <form class="form-inline">
    <img id="ml-index" src="/st/img/ml.png" style="margin-top: 10px" ><h2 class="form-title" style="margin: 10px">FORMULARIO DE INICIO DE LECTURA DE LIBROS DE LA ORGANIZACIÓN</h2>
  </form>
  </div>

    <br>
    <h3 class="temas">PLAN 2021</h3><br>

    <form method="POST" action="registro.php">
        <div>

          <h3 class="temas">LIBROS</h3><br>
          <div class="form-group">
            <label>ENERO:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro1" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>FEBRERO:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro2" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>MARZO:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro3" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>ABRIL:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro4" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>MAYO:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro5" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>JUNIO:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro6" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>JULIO:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro7" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>AGOSTO:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro8" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>SEPTIEMBRE:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro9" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>OCTUBRE:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro10" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>NOVIEMBRE:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro11" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>DICIEMBRE:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro12" placeholder="Ingresa el libro por leer aquí">
          </div>

          <div class="form-group">
            <input type="submit" class="btn btn-success" id="guardar" name="guardar" value="GUARDAR PLAN DE LECTURA">
          </div>

          <br>

        </div>
    </form>
  </div>
</div>
</div>
</div>
</div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="miModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-contenido modal-dialog modal-lg" role="document">
      <div class="modal-content">
      <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
<br>
<div id="form_ml" class="container">

  <div class="container">
  <form class="form-inline">
    <img id="ml-index" src="/st/img/ml.png" style="margin-top: 10px" ><h2 class="form-title" style="margin: 10px">FORMULARIO DE MODIFICACIÓN DE LA LECTURA DE LIBROS DE LA ORGANIZACIÓN</h2>
  </form>
  </div>

    <br>
    <h3 class="temas">PLAN 2021</h3><br>

    <form method="POST" action="mod.php">
        <div>

          <h3 class="temas">LIBROS</h3><br>
          <div class="form-group">
            <label>ENERO:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro1" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>FEBRERO:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro2" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>MARZO:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro3" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>ABRIL:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro4" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>MAYO:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro5" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>JUNIO:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro6" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>JULIO:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro7" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>AGOSTO:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro8" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>SEPTIEMBRE:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro9" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>OCTUBRE:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro10" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>NOVIEMBRE:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro11" placeholder="Ingresa el libro por leer aquí">
          </div>
          <div class="form-group">
            <label>DICIEMBRE:</label>
            <input required="#" type="text" class="form-control" id="libro1" name="libro12" placeholder="Ingresa el libro por leer aquí">
          </div>

          <div class="form-group">
            <input type="submit" class="btn btn-success" id="guardar" name="guardar" value="GUARDAR MODIFICACIONES">
          </div>

          <br>

        </div>
    </form>
  </div>
</div>
</div>
</div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="miModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-contenido modal-dialog modal-lg" role="document">
      <div class="modal-content">
      <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
<br>
<div id="form_ep" class="container">

  <div class="container">
  <form class="form-inline">
    <img id="alerta" src="https://images-na.ssl-images-amazon.com/images/I/41gHK8dto8L.png" style="margin-top: 10px" ><h2 class="form-title" style="margin: 10px"><strong>¿ESTÁS SEGURO(A) DE BORRAR TODO E INICIAR DE NUEVO?</strong></h2>
  </form>
  </div>
<br>
    <div class="form-group">
      <a href="/st/sistema/ml/reinicio.php"><input type="submit" class="btn btn-danger" id="eliminar" name="eliminar" value="SI, REINICIALO"></a>
    </div><br>
</div>
</div>
</div>
</div>
</div>
<br>

<footer class="pie5">
  <div class="container" align="center">
    <a style="margin: 20px" href="https://jw.org" target="_blank"><img id="jw" src="https://movilsagt.com/jw/files/2016/01/JW-NUEVO.jpg">SITIO OFICIAL DE LOS TESTIGOS DE JEHOVÁ</a>
    <a style="margin: 20px" href="https://wol.jw.org/es" target="_blank"><img id="wol" src="https://pbs.twimg.com/media/EFglz6RWoAAmj_P.jpg">BIBLIOTECA EN LÍNEA</a>
  </div>

  <div class="container" align="center">
    <p id="foot">All rights reserved. Copyrights by Jonathán Sánchez ©</p>
  </div>
</footer>

</body>
</html>