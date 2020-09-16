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

<!-- Barra superior -->
  <form class="form-inline float-lg-right" id="volver"> <!-- Alineación a la derecha -->
    <a href="/st/sistema/" class="btn btn-danger btn-sm">VOLVER</a> <!-- Enlace de clase botón -->
  </form> <!-- Botón de salida o vuelta -->
  
</nav>

<?php

// Se hace la conexión a la DDBB
include "../../funciones/conexion.php";

// Consulta si hay información ya registrada en la tabla del estudio personal
$resultado = mysqli_query($conexion,"SELECT EXISTS (SELECT * FROM $table1);");

// Se guardará la información en un arreglo de filas
$row=mysqli_fetch_row($resultado);

    if ($row[0]=="1") {

      $resultado = mysqli_query($conexion, "SELECT * FROM $table1");

// Mientras haya información en la tabla, la va a mostrar en un arreglo de datos almacenado en la variable "ep"
    while ($ep = mysqli_fetch_array($resultado)) {

// Mensaje que confirma la existencia de información de registros en la DDBB
      echo '
          <div class="alert alert-success">
          <strong><center>Ya tienes un programa de estudio hecho, observalo aquí abajo
          <button type="button" class="close" data-dismiss="alert">&times;</center>
          </div></strong>';

// Tabla que muestra lo que está almacenado en la DDBB
    echo "<br><br>
          <div class='container'>          
            <table class='table table-dark table-hover id='dash_ep'>
              <thead>
              <tr>
                <th><center><strong>DÍA</strong></center></th>
                <th><center><strong>HORA</strong></center></th>
                <th><center><strong>AM / PM</strong></center></th>
                <th><center><strong>TEMAS</strong></center></th>
              </tr>
              </thead>
              <tbody>
                <tr>
                    <td><center>".$ep ['dia']."</center></td>
                  <td><center>".$ep ['hora']."</center></td>
                  <td><center>".$ep ['am_pm']."</center></td>
                  <td><center>".$ep ['titulo1']."</center></td>
                </tr>
                <tr>
                  <td><center>".$ep ['dia']."</center></td>
                  <td><center>".$ep ['hora']."</center></td>
                  <td><center>".$ep ['am_pm']."</center></td>
                  <td><center>".$ep ['titulo2']."</center></td>
                </tr>
                <tr>
                  <td><center>".$ep ['dia']."</center></td>
                  <td><center>".$ep ['hora']."</center></td>
                  <td><center>".$ep ['am_pm']."</center></td>
                  <td><center>".$ep ['titulo3']."</center></td>
                </tr>
                <tr>
                  <td><center>".$ep ['dia']."</center></td>
                  <td><center>".$ep ['hora']."</center></td>
                  <td><center>".$ep ['am_pm']."</center></td>
                  <td><center>".$ep ['titulo4']."</center></td>
                </tr>
              </tbody>
            </table>
          </div>
        <br><br>";
        echo '
          <div class="container contenedor-modal" align="center">
          <button name="modificar" id="modificar" style="margin: 10px" type="sumbit" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#miModal2">MODIFICAR PLAN DE ESTUDIO</button>
            <button name="reiniciar" style="margin: 10px" type="sumbit" class="btn btn-primary btn-danger btn-lg" data-toggle="modal" data-target="#miModal3"><img id="ren" src="/st/img/reiniciar.png">REINICIAR PLAN DE ESTUDIO</button></div>';}

    } else{

// Mensaje de confirmación de datos inexistentes en la DDBB
        echo '
        <div class="container">
          <div class="alert alert-danger alert-dismissible">
          <strong><center>Al parecer aún no tienes un programa de estudio, hazlo ahora mismo en "INICIAR PLAN DE ESTUDIO"</center>
          <button type="button" class="close" data-dismiss="alert">&times;
        </div></strong>
        </div>';

        echo '<div class="container contenedor-modal" align="center">
            <div class="container contenedor-modal" align="center">
          <button name="ingresar" style="margin: 10px" type="sumbit" class="btn btn-success btn-lg" data-toggle="modal" data-target="#miModal">INIICIAR PLAN DE ESTUDIO</button>
          </div>
        ';
    }    

// Se cierra la conexión a la DDBB
include "../../funciones/close.php";

?>

<!-- Modal 1 -->
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-contenido modal-dialog modal-lg" role="document">
      <div class="modal-content">
      <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
<br>
<div id="form_ep" class="container">

<!-- Contenido de la modal -->
  <div class="container">

  <!-- Formulario del inicio del estudio personal -->
  <form class="form-inline">
    <img id="ep-index" src="/st/img/ep.png" style="margin-top: 10px" ><h2 class="form-title" style="margin: 10px">FORMULARIO DE INICIO DEL ESTUDIO PERSONAL</h2>
  </form>
  </div>

    <br>
    <h3 class="temas">HORARIO</h3><br>  <!-- Título -->

    <form method="POST" action="registro.php">  <!-- Método y archivo para el envío de datos -->

      <label for="hora"><strong>HORA:</strong></label>
          <select class="hora" style="margin: 10px" id="hora" name="hora">  <!-- Lista desplegable -->
            <option value="12:00">12:00</option>
            <option value="12:30">12:30</option>
            <option value="01:00">01:00</option>
            <option value="01:30">01:30</option>
            <option value="02:00">02:00</option>
            <option value="02:30">02:30</option>
            <option value="03:00">03:00</option>
            <option value="03:30">03:30</option>
            <option value="04:00">04:00</option>
            <option value="04:30">04:30</option>
            <option value="05:00">05:00</option>
            <option value="05:30">05:30</option>
            <option value="06:00">06:00</option>
            <option value="06:30">06:30</option>
            <option value="07:00">07:00</option>
            <option value="07:30">07:30</option>
            <option value="08:00">08:00</option>
            <option value="08:30">08:30</option>
            <option value="09:00">09:00</option>
            <option value="09:30">09:30</option>
            <option value="10:00">10:00</option>
            <option value="10:30">10:30</option>
            <option value="11:00">11:00</option>
            <option value="11:30">11:30</option>
          </select>

          <select class="horario" style="margin: 10px" id="horario" name="horario"> <!-- Lista desplegable -->
            <option value="A.M.">A.M.</option>
            <option value="P.M.">P.M.</option>
          </select>
          <br><br>

        <label for="dia"><strong>DÍA:</strong></label>
          <select class="dia" style="margin: 10px" id="dia" name="dia"> <!-- Lista desplegable -->
            <option value="DOMINGO">DOMINGO</option>
            <option value="LUNES">LUNES</option>
            <option value="MARTES">MARTES</option>
            <option value="MIÉRCOLES">MIÉRCOLES</option>
            <option value="JUEVES">JUEVES</option>
            <option value="VIERNES">VIERNES</option>
            <option value="SÁBADO">SÁBADO</option>
          </select>

        <div>
          <br><br>
          <h3 class="temas">TEMAS</h3><br>  <!-- Entradas de texto -->
          <div class="form-group">
            <input required="#" type="text" class="form-control" id="titulo1" name="titulo1" placeholder="Ingresa el primer tema a estudiar">
          </div>

          <div class="form-group">
            <input required="#" type="text" class="form-control" id="titulo2" name="titulo2" placeholder="Ingresa el segundo tema a estudiar">
          </div>

          <div class="form-group">
            <input required="#" type="text" class="form-control" id="titulo3" name="titulo3" placeholder="Ingresa el tercer tema a estudiar">
          </div>

          <div class="form-group">
            <input required="#" type="text" class="form-control" id="titulo4" name="titulo4" placeholder="Ingresa el cuarto tema a estudiar">
          </div>

          <div class="form-group">
            <input type="submit" class="btn btn-success" id="guardar" name="guardar" value="GUARDAR">
          </div><br>

        </div>

    </form>

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
<div id="form_ep" class="container">

  <div class="container">
  <form class="form-inline">
    <img id="ep-index" src="/st/img/ep.png" style="margin-top: 10px" ><h2 class="form-title" style="margin: 10px">FORMULARIO DE MODIFICACIÓN DEL ESTUDIO PERSONAL</h2>
  </form>
  </div>

    <br>
    <h3 class="temas">HORARIO</h3><br>

    <form method="POST" action="mod.php">

      <label for="hora"><strong>NUEVA HORA:</strong></label>
          <select class="hora" style="margin: 10px" id="hora" name="hora">
            <option value="12:00">12:00</option>
            <option value="12:30">12:30</option>
            <option value="01:00">01:00</option>
            <option value="01:30">01:30</option>
            <option value="02:00">02:00</option>
            <option value="02:30">02:30</option>
            <option value="03:00">03:00</option>
            <option value="03:30">03:30</option>
            <option value="04:00">04:00</option>
            <option value="04:30">04:30</option>
            <option value="05:00">05:00</option>
            <option value="05:30">05:30</option>
            <option value="06:00">06:00</option>
            <option value="06:30">06:30</option>
            <option value="07:00">07:00</option>
            <option value="07:30">07:30</option>
            <option value="08:00">08:00</option>
            <option value="08:30">08:30</option>
            <option value="09:00">09:00</option>
            <option value="09:30">09:30</option>
            <option value="10:00">10:00</option>
            <option value="10:30">10:30</option>
            <option value="11:00">11:00</option>
            <option value="11:30">11:30</option>
          </select>

          <select class="horario" style="margin: 10px" id="horario" name="horario">
            <option value="A.M.">A.M.</option>
            <option value="P.M.">P.M.</option>
          </select>
          <br><br>

        <label for="dia"><strong> NUEVO DÍA:</strong></label>
          <select class="dia" style="margin: 10px" id="dia" name="dia">
            <option value="DOMINGO">DOMINGO</option>
            <option value="LUNES">LUNES</option>
            <option value="MARTES">MARTES</option>
            <option value="MIÉRCOLES">MIÉRCOLES</option>
            <option value="JUEVES">JUEVES</option>
            <option value="VIERNES">VIERNES</option>
            <option value="SÁBADO">SÁBADO</option>
          </select>

        <div>
          <br><br>
          <h3 class="temas"> NUEVOS TEMAS</h3><br>
          <div class="form-group">
            <input required="#" type="text" class="form-control" id="titulo1" name="titulo1" placeholder="Ingresa el primer tema a estudiar">
          </div>

          <div class="form-group">
            <input required="#" type="text" class="form-control" id="titulo2" name="titulo2" placeholder="Ingresa el segundo tema a estudiar">
          </div>

          <div class="form-group">
            <input required="#" type="text" class="form-control" id="titulo3" name="titulo3" placeholder="Ingresa el tercer tema a estudiar">
          </div>

          <div class="form-group">
            <input required="#" type="text" class="form-control" id="titulo4" name="titulo4" placeholder="Ingresa el cuarto tema a estudiar">
          </div>

          <div class="form-group">
            <input type="submit" class="btn btn-success" id="guardar" name="guardar" value="GUARDAR CAMBIOS">
          </div><br>

        </div>
    </form>

</div>
</div>
</div>
</div>
</div>
<br>

<!-- Modal 3 -->
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
      <a href="/st/sistema/ep/reinicio.php"><input type="submit" class="btn btn-danger" id="eliminar" name="eliminar" value="SI, REINICIALO"></a>
    </div><br>

</div>
</div>
</div>
</div>
</div>

<!-- Pie de página -->
<br>
<footer class="pie2">
  <div class="container" align="center">
    <a style="margin: 20px" href="https://jw.org/es" target="_blank"><img id="jw" src="https://movilsagt.com/jw/files/2016/01/JW-NUEVO.jpg">SITIO OFICIAL DE LOS TESTIGOS DE JEHOVÁ</a>
    <a style="margin: 20px" href="https://wol.jw.org/es" target="_blank"><img id="wol" src="https://pbs.twimg.com/media/EFglz6RWoAAmj_P.jpg">BIBLIOTECA EN LÍNEA</a>
  </div>

<br>

  <div class="container" align="center">
    <p id="foot">All rights reserved. Copyrights by Jonathán Sánchez ©</p>
  </div>
</footer>

</body>
</html>